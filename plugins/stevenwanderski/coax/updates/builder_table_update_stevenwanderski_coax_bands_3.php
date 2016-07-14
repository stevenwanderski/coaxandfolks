<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxBands3 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->string('video_url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->dropColumn('video_url');
        });
    }
}
