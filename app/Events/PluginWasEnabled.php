<?php

namespace App\Events;

use App\Services\Plugin;

class PluginWasEnabled extends Event
{
    public $plugin;

    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
    }
}
