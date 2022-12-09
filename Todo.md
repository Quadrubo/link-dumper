# Todo

## In Production

- Change PasswordValidationRules

## Development

- Add Seeders for everything
- Add Permissions for everything (Spatie Permissions)
  - Add authentication for the filament admin panel `App\Models\User` -> `canAccessFilament()`

### Translation
- Think about the `php artisan lang:update` command from https://publisher.laravel-lang.com/using/update.html, when should it run?
- Add translation for frontend https://kazupon.github.io/vue-i18n/ or https://github.com/GENL/matice#installation https://github.com/laravel/jetstream/pull/560
- Add: `module: {
        rules: [
            {
                resourceQuery: /blockType=i18n/,
                type: 'javascript/auto',
                loader: '@intlify/vue-i18n-loader',
            },
        ],
    },` to vite.config.js