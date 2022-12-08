<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\App;
use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        if (App::environment(['local', 'staging'])) {
            return ['required', 'string', new Password, 'confirmed'];
        }

        return ['required', 'string', (new Password)->length(10)->requireUppercase()->requireNumeric()->requireSpecialCharacter(), 'confirmed'];
    }
}
