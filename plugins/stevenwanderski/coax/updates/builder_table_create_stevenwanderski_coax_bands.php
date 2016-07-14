<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStevenwanderskiCoaxBands extends Migration
{
    public function up()
    {
        Schema::create('stevenwanderski_coax_bands', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('body');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stevenwanderski_coax_bands');
    }
}
