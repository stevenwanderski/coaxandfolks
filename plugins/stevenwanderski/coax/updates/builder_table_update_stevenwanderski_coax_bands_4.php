<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxBands4 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->renameColumn('video_url', 'video');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_bands', function($table)
        {
            $table->renameColumn('video', 'video_url');
        });
    }
}
