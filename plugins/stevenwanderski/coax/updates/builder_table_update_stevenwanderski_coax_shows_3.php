<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxShows3 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_shows', function($table)
        {
            $table->integer('band_id');
            $table->integer('venue_id');
            $table->dropColumn('band');
            $table->dropColumn('venue');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_shows', function($table)
        {
            $table->dropColumn('band_id');
            $table->dropColumn('venue_id');
            $table->integer('band');
            $table->integer('venue');
        });
    }
}
