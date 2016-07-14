<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxShows extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_shows', function($table)
        {
            $table->integer('venue');
            $table->string('time');
            $table->string('type');
            $table->renameColumn('band_id', 'band');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_shows', function($table)
        {
            $table->dropColumn('venue');
            $table->dropColumn('time');
            $table->dropColumn('type');
            $table->renameColumn('band', 'band_id');
        });
    }
}
