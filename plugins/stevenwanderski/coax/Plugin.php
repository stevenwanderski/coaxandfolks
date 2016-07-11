<?php

namespace StevenWanderski\Coax;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'StevenWanderski\Coax\Components\ShowList' => 'showList',
        'StevenWanderski\Coax\Components\TrackPlayer' => 'trackPlayer',
        'StevenWanderski\Coax\Components\Social' => 'social',
        'StevenWanderski\Coax\Components\Photos' => 'photos',
        'StevenWanderski\Coax\Components\Calendar' => 'calendar',
        'StevenWanderski\Coax\Components\ContactForm' => 'contactForm'
      ];
    }

    public function registerSettings()
    {
    }
}