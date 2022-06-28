<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Slugrule implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if (!preg_match("/^[-a-z0-9]*$/", $value)) {
            $fail(':attribute должен содержать только латинские буквы и цифры');
        }
    }
}
