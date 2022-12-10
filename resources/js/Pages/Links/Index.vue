<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    links: Object,
});
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
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 

                    <div class="bg-red-500">
                        
                        <div class="flex flex-row justify-between">

                            <div>
                                <p>Tag Filter</p>
                            </div>

                            <div>
                                <p>Tag Search</p>
                            </div>

                            <div>
                                <p>Title Search</p>
                            </div>

                            <TextInput
                                id="password"
                                type="password"
                                class="mt-1 block w-full"
                                required
                                autocomplete="current-password"
                            />

                        </div>

                    </div>

                </div>
            </div>

            <!-- Links -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <div class="bg-white overflow-hidden shadow-xl rounded-lg cursor-pointer" v-for="link, link_key in links" :key="link_key">

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
