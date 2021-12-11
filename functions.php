<?php

use ConfettiCode\RandomName\RandomName;

if (! function_exists('random_name')) {
    /**
     * Generate a random name.
     *
     * @param  array  $options
     * @return string
     */
    function random_name(array $options = []): string
    {
        return RandomName::create()->generate($options);
    }
}
