<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxWordsRule implements Rule
{
    private $max_words;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($max_words = 5)
    {
        $this->max_words = $max_words;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return str_word_count($value) >= $this->max_words;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El :attribute debe tener al menos 5 palabras.';
    }
}
