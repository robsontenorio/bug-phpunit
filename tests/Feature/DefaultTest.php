<?php

namespace Tests\Feature;

use App\MyClass;
use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class IsolatedTest extends TestCase
{
    public function test_isolated()
    {
        $greet = (new MyClass('Mary'))->greet();

        $this->assertEquals($greet, 'Hi Mary');
    }
}
