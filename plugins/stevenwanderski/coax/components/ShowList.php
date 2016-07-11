<?php

namespace StevenWanderski\Coax\Components;

use \StevenWanderski\Coax\Models\Show;
use \StevenWanderski\Coax\Models\Band;

class ShowList extends \Cms\Classes\ComponentBase {

  public $shows;

  public function componentDetails() {
    return [
      'name' => 'ShowList',
      'description' => 'Displays a collection of shows.'
    ];
  }

  public function onRun() {
    if($this->param('slug') == null){
      $this->shows = Show::upcoming()->get();
    }else{
      $band = Band::where('slug', $this->param('slug'))->first();
      $this->shows = $band->shows()->upcoming()->get();
    }
  }

  public function onRender(){
      $this->page['band'] = $this->property('band');
  }
}