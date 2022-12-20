<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import Select from '@/Components/Select.vue';
import { ref, watch } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import debounce from 'lodash/debounce';

let props = defineProps({
    links: Object,
    filters: Object,
    tags: Object,
});

let titleFilter = ref(props.filters.title);
let tagsFilter = ref(props.filters.tags);

// watch, watches the ref and executes the throttle function everytime title changes
// debounce only makes the function execute once, after the value (300ms) has passed
watch(titleFilter, debounce(function (value) { 
    console.log('triggered: ' + value);
    Inertia.get('/links', { title: value }, {
        preserveState: true,
        replace: true, // replace the search history so there is no history entry for each keystroke
    });
}, 300));

watch(tagsFilter, function (value) {
    Inertia.get('/links', { tags: value }, {
        preserveState: true,
        replace: true, // replace the search history so there is no history entry for each keystroke
    });
});

const openLink = function (url) {
    window.open(url, '_blank').focus();
}
</script>

<template>
    <AppLayout :title="$t('app.models.link.plural_label')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $t('app.models.link.plural_label') }}
            </h2>
        </template>

        <div class="py-12 space-y-4">

            <!-- Filters -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-2 overflow-hidden shadow-xl rounded-lg"> 
 
                    <div class="flex flex-row justify-between">

                        <div>
                            <p>Site Filter</p>
                        </div>

                        <div>
                            <p>Author Filter</p>
                        </div>

                        <div>
                            <p>Tag Filter</p>
                        </div>

                        <div>
                            <Select
                                v-model="tagsFilter"
                                class="w-full"
                                required
                            >
                                <option value="">-</option>
                                <option v-for="tag, tag_key in tags" :key="tag_key" :value="tag">{{ tag }}</option>
                            </Select>
                        </div>

                        <div>
                            <TextInput
                                v-model="titleFilter"
                                class="w-full"
                                type="text"
                                required
                                placeholder="Title..."
                                autocomplete="off"
                            />
                        </div>

                    </div>

                </div>
            </div>

            <!-- Links -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <div class="bg-white overflow-hidden shadow-xl rounded-lg cursor-pointer" @click="openLink(link.url)" v-for="link, link_key in links" :key="link_key">

                        <img class="" src="https://laravelnews.s3.amazonaws.com/images/php-enum-helpers-featured.png?w=1366&h=692.22972972973&q=90&auto=format&fit=crop" alt="" srcset="">

                        <div class="flex flex-col px-4 pb-4 pt-2">
                            <!-- Title -->
                            <h3 class="text-gray-800 leading-tight text-2xl font-medium">{{ link.title }}</h3>
                        
                            <!-- Website & Author -->
                            <div class="flex flex-row space-x-2">
                                <span>{{ link.website }}</span>
                                <span>{{ link.author }}</span>
                            </div>

                            <!-- Tags -->
                            <div class="flex flex-row space-x-2 pt-2">
                                <span class="inline-flex min-h-6 px-2 py-0.5 text-sm font-medium text-primary-700 rounded-xl bg-primary-500/10 space-x-1" v-for="tag, tag_key in link.tags" :key="tag_key">{{ tag }}</span>
                            </div>
                        </div>

                    </div> 

                </div> 

            </div>

        </div>
    </AppLayout>
</template>
