<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxBands extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
