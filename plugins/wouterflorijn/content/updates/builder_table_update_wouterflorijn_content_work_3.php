<?php namespace WouterFlorijn\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWouterflorijnContentWork3 extends Migration
{
    public function up()
    {
        Schema::table('wouterflorijn_content_work', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('wouterflorijn_content_work', function($table)
        {
            $table->string('image', 256)->nullable();
        });
    }
}
