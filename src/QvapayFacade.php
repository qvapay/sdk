<?php

namespace Qvapay/sdk\Qvapay;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Qvapay/sdk\Qvapay\Qvapay
 */
class QvapayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sdk';
    }
}
