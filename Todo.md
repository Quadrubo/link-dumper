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
- Fix Privacy Policy Translation https://github.com/xiCO2k/laravel-vue-i18n/issues/86
- Translate all `<Head title=""></Head>` Elements