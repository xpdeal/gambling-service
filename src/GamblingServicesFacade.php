<?php

namespace Xpdeal\GamblingServices;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xpdeal\GamblingServices\Skeleton\SkeletonClass
 */
class GamblingServicesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gambling-services';
    }
}
