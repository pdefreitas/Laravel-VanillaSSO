<?php
/**
 * This file is part of Laravel-VanillaSSO for jsConnect
 * @author pdefreitas <pdefreitas@users.noreply.github.com>
 * @license GPLv2
 */

namespace Pdefreitas\VanillaSSO;

use Illuminate\Support\Facades\Facade;

class VanillaSSOFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vanillasso';
    }

}