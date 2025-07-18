<?php

namespace MyProject;

class Greeter
{
    private string $name;

    public function __construct(string $name = 'World')
    {
        $this->name = $name;
    }

    public function greet(): string
    {
        return 'Hello, ' . $this->name . '!';
    }
}
