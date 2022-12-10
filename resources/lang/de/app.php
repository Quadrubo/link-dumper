<?php

return [

    'jetstream' => [

        'Forgot Password' => 'Passwort vergessen',
        'Two-factor Confirmation' => 'Zwei-Faktor-Authentifizierung',
        'Email Verification' => 'E-Mail-Verifizierung',

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
                'label' => 'Erstellt am',
                'helper' => '',
                'hint' => '',
            ],

            'updated_at' => [
                'label' => 'Verändert am',
                'helper' => '',
                'hint' => '',
            ],

        ],

    ],

    'models' => [

        'link' => [
            'label' => 'Link',
            'plural_label' => 'Links',
            'navigation_group' => 'Inhalte',

            'attributes' => [

                'title' => [
                    'label' => 'Titel',
                    'helper' => '',
                    'hint' => '',
                ],

                'url' => [
                    'label' => 'URL',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

            'relations' => [

                'tags' => [
                    'label' => 'Tags',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

        'user' => [

            'label' => 'Benutzer',
            'plural_label' => 'Benutzer',
            'navigation_group' => 'Authorisierung',

            'attributes' => [

                'email' => [
                    'label' => 'E-Mail',
                    'helper' => '',
                    'hint' => '',
                ],

                'email_verified_at' => [
                    'label' => 'E-Mail verifiziert am',
                    'helper' => '',
                    'hint' => '',
                ],

                'password' => [
                    'label' => 'Passwort',
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
                    'label' => 'Rollen',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

        'permission' => [

            'label' => 'Berechtigung',
            'plural_label' => 'Berechtigungen',
            'navigation_group' => 'Authorisierung',

            'attributes' => [

                'guard_name' => [
                    'label' => 'Guard name',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

            'relations' => [

                'roles' => [
                    'label' => 'Rollen',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

        'role' => [

            'label' => 'Rolle',
            'plural_label' => 'Rollen',
            'navigation_group' => 'Authorisierung',

            'attributes' => [

                'guard_name' => [
                    'label' => 'Guard name',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

            'relations' => [

                'permissions' => [
                    'label' => 'Berechtigungen',
                    'helper' => '',
                    'hint' => '',
                ],

            ],

        ],

    ],

    'filament' => [

        'navigation_groups' => [

            'content' => [
                'label' => 'Inhalte',
            ],

            'authorization' => [
                'label' => 'Authorisierung',
            ],

        ],

        'forms' => [

            'actions' => [

                'create_and_back' => [
                    'label' => 'Erstellen & zurück',
                ],

                'save_and_back' => [
                    'label' => 'Speichern & zurück',
                ],

            ],

            'sections' => [

                'authorization' => [
                    'label' => 'Authorisierung',
                ],

                'metadata' => [
                    'label' => 'Metadaten',
                ],

                'general_information' => [
                    'label' => 'Generelle informationen',
                ],

                'data' => [
                    'label' => 'Daten',
                ],

                'statistics' => [
                    'label' => 'Statistiken',
                ],

                'additional_information' => [
                    'label' => 'Weitere informationen',
                ],

            ],

        ],

        'tables' => [

            'filters' => [

                'verified' => [
                    'label' => 'Verifiziert',
                    'placeholder' => 'Alle',
                    'true_label' => 'Verifiziert',
                    'false_label' => 'Nicht verifiziert',
                ],

                'show' => [
                    'label' => 'Show',
                    'placeholder' => 'All',
                    'true_label' => 'Angezeigt',
                    'false_label' => 'Nicht angezeigt',
                ],

            ],

        ],

    ],

    'other' => [

        'yes' => 'Ja',
        'no' => 'Nein',

    ],

];
