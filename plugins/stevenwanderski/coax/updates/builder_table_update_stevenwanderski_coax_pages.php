<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxPages extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_pages', function($table)
        {
            $table->renameColumn('key', 'slug');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_pages', function($table)
        {
            $table->renameColumn('slug', 'key');
        });
    }
}
