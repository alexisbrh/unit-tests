<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\Test\TestsController;

class TestsControllerTest extends TestCase
{

    public function testBasicTest()
    {
        $controller = new TestsController();
        $this->assertSame(array('1d3' => 2), $controller->calculateSomme('1d3'));
    }
}
