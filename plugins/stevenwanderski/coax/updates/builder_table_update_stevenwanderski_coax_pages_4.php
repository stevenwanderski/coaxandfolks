<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxPages4 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_pages', function($table)
        {
            $table->string('track')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_pages', function($table)
        {
            $table->dropColumn('track');
        });
    }
}
