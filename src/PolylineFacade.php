<?php

namespace EndlessMiles\Polyline;

use Illuminate\Support\Facades\Facade;

class PolylineFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Polyline';
    }

}
