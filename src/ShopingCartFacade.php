<?php

namespace Ronashdkl\ShopingCart;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ronashdkl\ShopingCart\Skeleton\SkeletonClass
 */
class ShopingCartFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shoping-cart';
    }
}
