<?php

/*
|--------------------------------------------------------------------------
| Application Language Lines
|--------------------------------------------------------------------------
|
| The following language lines are used for the Application.
|
*/

return [

    'jetstream' => [

        'Forgot Password' => 'Forgot Password',
        'Two-factor Confirmation' => 'Two-factor Confirmation',
        'Email Verification' => 'Email Verification',

    ],

    'general' => [

        'attributes' => [

            'id' => [
                'label' => 'ID',
                'helper' => '',
                'hint' => '',
            ],

            'name' => [
                'label' => 'Name',
                'helper' => '',
                'hint' => '',
            ],

            'created_at' => [
                'label' => 'Created at',
                'helper' => '',
                'hint' => '',
            ],

            'updated_at' => [
                'label' => 'Updated at',
                'helper' => '',
                'hint' => '',
            ],

        ],

    ],

    'models' => [

        'link' => [
            'label' => 'Link',
            'plural_label' => 'Links',
            'navigation_group' => 'Content',

            'attributes' => [

                'title' => [
                    'label' => 'Title',
                    'helper' => '',
                    'hint' => '',
                ],

                'user_id' => [
                    'label' => 'User',
                    'helper' => '',
                    'hint' => '',
                ],

                'url' => [
                    'label' => 'URL',
                    'helper' => '',
                    'hint' => '',
                ],

                'website' => [
                    'label' => 'Website',
                    'helper' => '',
                    'hint' => '',
                ],

                'author' => [
                    'label' => 'Author',
                    'helper' => '',
                    'hint' => '',
                ],

                'posted_at' => [
                    'label' => 'Posted at',
                    'helper' => '',
                    'hint' => '',
                ],

                'done' => [
                    'label' => 'Done',
                    'helper' => '',
                    'hint' => '',
                ],

                'tags' => [
                    'label' => 'Tags',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

        'user' => [

            'label' => 'User',
            'plural_label' => 'Users',
            'navigation_group' => 'Authorization',

            'attributes' => [

                'email' => [
                    'label' => 'Email',
                    'helper' => '',
                    'hint' => '',
                ],

                'email_verified_at' => [
                    'label' => 'Email verified at',
                    'helper' => '',
                    'hint' => '',
                ],

                'password' => [
                    'label' => 'Password',
                    'helper' => '',
                    'hint' => '',
                ],

                'name' => [
                    'label' => 'Name',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

            'relations' => [

                'roles' => [
                    'label' => 'Roles',
                    'helper' => '',
                    'hint' => '',
                ],

                'links' => [
                    'label' => 'Links',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

        'permission' => [

            'label' => 'Permission',
            'plural_label' => 'Permissions',
            'navigation_group' => 'Authorization',

            'attributes' => [

                'guard_name' => [
                    'label' => 'Guard name',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

            'relations' => [

                'roles' => [
                    'label' => 'Roles',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

        'role' => [

            'label' => 'Role',
            'plural_label' => 'Roles',
            'navigation_group' => 'Authorization',

            'attributes' => [

                'guard_name' => [
                    'label' => 'Guard name',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

            'relations' => [

                'permissions' => [
                    'label' => 'Permissions',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

    ],

    'filament' => [

        'navigation_groups' => [

            'content' => [
                'label' => 'Content',
            ],

            'authorization' => [
                'label' => 'Authorization',
            ],

        ],

        'forms' => [

            'actions' => [

                'create_and_back' => [
                    'label' => 'Create & back',
                ],

                'save_and_back' => [
                    'label' => 'Save & back',
                ],

            ],

            'sections' => [

                'authorization' => [
                    'label' => 'Authorization',
                ],

                'metadata' => [
                    'label' => 'Metadata',
                ],

                'general_information' => [
                    'label' => 'General information',
                ],

                'data' => [
                    'label' => 'Data',
                ],

                'statistics' => [
                    'label' => 'Statistics',
                ],

                'additional_information' => [
                    'label' => 'Additional information',
                ],

            ],

        ],

        'tables' => [

            'filters' => [

                'verified' => [
                    'label' => 'Verified',
                    'placeholder' => 'All',
                    'true_label' => 'Verified',
                    'false_label' => 'Unverified',
                ],

                'show' => [
                    'label' => 'Show',
                    'placeholder' => 'All',
                    'true_label' => 'Is showing',
                    'false_label' => 'Is hidden',
                ],

            ],

        ],

    ],

    'other' => [

        'yes' => 'Yes',
        'no' => 'No',

    ],

];
