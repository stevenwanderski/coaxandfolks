<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxVenues2 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_venues', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_venues', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
}
