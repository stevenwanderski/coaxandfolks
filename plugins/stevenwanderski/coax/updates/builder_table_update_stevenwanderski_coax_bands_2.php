<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxBands2 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
