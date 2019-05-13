<?php

namespace Qiwi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Qiwi
 * @package Qiwi\Facades
 */
class Qiwi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'qiwi';
    }
}
