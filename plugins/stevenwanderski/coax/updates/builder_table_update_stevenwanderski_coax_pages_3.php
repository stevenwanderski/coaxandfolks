<?php namespace StevenWanderski\Coax\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStevenwanderskiCoaxPages3 extends Migration
{
    public function up()
    {
        Schema::table('stevenwanderski_coax_pages', function($table)
        {
            $table->text('title');
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::table('stevenwanderski_coax_pages', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('slug');
        });
    }
}
