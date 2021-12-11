<?php

namespace Tests\ConfettiCode\RandomName;

use ConfettiCode\RandomName\RandomName;
use PHPUnit\Framework\TestCase;

class RandomNameTest extends TestCase
{
    public function test_it_can_generate_a_random_name_without_options()
    {
        $instance = new RandomName();

        $name = $instance->generate();

        [$person, $adjective] = explode('-', $name);

        $this->assertTrue(in_array($person, $instance->getData()['people']));
        $this->assertTrue(in_array($adjective, $instance->getData()['adjectives']));
    }

    public function test_it_can_generate_a_random_name_with_suffix()
    {
        $instance = new RandomName();

        $name = $instance->generate(['suffix' => 'foobar']);

        [$person, $adjective, $suffix] = explode('-', $name);

        $this->assertTrue(in_array($person, $instance->getData()['people']));
        $this->assertTrue(in_array($adjective, $instance->getData()['adjectives']));
        $this->assertSame('foobar', $suffix);
    }
}
