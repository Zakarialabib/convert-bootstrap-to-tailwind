<?php

namespace Zakarialabib\ConvertBootstrapToTailwind\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zakarialabib\ConvertBootstrapToTailwind\ConvertBootstrapToTailwind
 */
class ConvertBootstrapToTailwind extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Zakarialabib\ConvertBootstrapToTailwind\ConvertBootstrapToTailwind::class;
    }
}
