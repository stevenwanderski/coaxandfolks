<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStevenwanderskiCoaxVenues extends Migration
{
    public function up()
    {
        Schema::create('stevenwanderski_coax_venues', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('address1');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stevenwanderski_coax_venues');
    }
}
