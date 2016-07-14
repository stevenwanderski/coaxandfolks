<?php namespace StevenWanderski\Coax\Components;

class TrackPlayer extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'TrackPlayer',
            'description' => 'Plays an mp3'
        ];
    }

    public function onRender(){
        $this->page['track'] = $this->property('track');
    }
}