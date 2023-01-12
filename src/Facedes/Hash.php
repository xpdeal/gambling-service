<?php

namespace Xpdeal\GamblingServices\Facades;

use Illuminate\Support\Facades\Facade;

class Hash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}
