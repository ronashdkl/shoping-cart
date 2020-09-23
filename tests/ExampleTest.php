<?php

namespace Ronashdkl\ShopingCart\Tests;

use Orchestra\Testbench\TestCase;
use Ronashdkl\ShopingCart\ShopingCartServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ShopingCartServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
