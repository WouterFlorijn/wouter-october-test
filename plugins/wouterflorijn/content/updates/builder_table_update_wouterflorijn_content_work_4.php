<?php namespace WouterFlorijn\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWouterflorijnContentWork4 extends Migration
{
    public function up()
    {
        Schema::table('wouterflorijn_content_work', function($table)
        {
            $table->string('background_color', 32)->default('#FFFFFF');
            $table->string('text_color', 32)->default('#000000');
        });
    }
    
    public function down()
    {
        Schema::table('wouterflorijn_content_work', function($table)
        {
            $table->dropColumn('background_color');
            $table->dropColumn('text_color');
        });
    }
}
