<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Example3Test extends TestCase
{

    public function testBasicTest()
    {
        $this->assertEquals(
            [1, 2,  3, 4, 5, 6],
            [1, 2, 3, 4, 5, 6]
        );
    }
}
