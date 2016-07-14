<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStevenwanderskiCoaxShows extends Migration
{
    public function up()
    {
        Schema::create('stevenwanderski_coax_shows', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('date');
            $table->integer('band_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stevenwanderski_coax_shows');
    }
}
