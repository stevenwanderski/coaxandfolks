<?php

namespace StevenWanderski\Coax\Components;

class Photos extends \Cms\Classes\ComponentBase {

  public function componentDetails() {
    return [
      'name' => 'Photos',
      'description' => 'Displays a collection of band photos.'
    ];
  }

  public function photos() {
    $band = \StevenWanderski\Coax\Models\Band::where('slug', $this->param('slug'))->first();
    return $band->photos()->get();
  }
}