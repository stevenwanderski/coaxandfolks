<?php namespace StevenWanderski\Coax\Components;

use \StevenWanderski\Coax\Models\Show;

class Calendar extends \Cms\Classes\ComponentBase
{
    public $shows;

    public function componentDetails()
    {
        return [
            'name' => 'Calendar',
            'description' => 'Display a calendar of shows.'
        ];
    }

    public function onRun()
    {
        $shows = Show::all()->map(function($item, $key){
          $title = '<div class="event--band">' . $item->band->name . '</div>';
          $title .= '<div class="event--info">' . $item->venue->name . ' - ' . $item->time . '</div>';
          return array(
            'title' => $title,
            'start' => "$item->date",
            'allDay' => true
          );
        });
        $this->shows = $shows;
    }
}