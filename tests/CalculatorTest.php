<?php

namespace Tests;

use YourVendor\CalculatorPackage\Calculator;
use Orchestra\Testbench\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */
    public function it_can_calculate_sum()
    {
        $calculator = new \irshadkhan\CalculatorPackage\Calculator();
        $result = $calculator->add(2, 3);

        $this->assertEquals(5, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            \App\Providers\CalculatorServiceProvider::class,
        ];
    }
}
