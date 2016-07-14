<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxShows2 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_shows', function($table)
        {
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_shows', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
