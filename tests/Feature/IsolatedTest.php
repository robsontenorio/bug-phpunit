<?php

namespace Tests\Feature;

use App\MyClass;
use PHPUnit\Framework\TestCase;

class DefaultTest extends TestCase
{
    public function test_default()
    {
        $greet = (new MyClass('Mary'))->greet();

        $this->assertEquals($greet, 'Hi Mary');
    }
}
