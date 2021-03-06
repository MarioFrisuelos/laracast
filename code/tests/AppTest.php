<?php

namespace AppTest;

use App\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    protected $app;

    public function setUp(): void
    {
        parent::setUp();
        $this->app = new App();
    }

    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->app->mean($numbers));
    }

    public function testCalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->app->median($numbers));
    }
}
