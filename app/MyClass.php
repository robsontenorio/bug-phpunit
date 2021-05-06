<?php 

namespace App;

class MyClass{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return "Hi {$this->name}";
    }
}