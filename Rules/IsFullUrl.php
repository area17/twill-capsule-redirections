<?php

namespace App\Twill\Capsules\Redirections\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsFullUrl implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $url = parse_url($value);

        return filled($url['scheme'] ?? null) && filled($url['host'] ?? null);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        $key = 'validation.not_valid_full_url';

        return app('translator')->has($key) ? __($key) : 'Is not a valid full URL';
    }
}
