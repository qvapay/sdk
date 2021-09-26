<?php

namespace Qvapay\sdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Qvapay\sdk\Qvapay
 */
class QvapayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sdk';
    }
}
