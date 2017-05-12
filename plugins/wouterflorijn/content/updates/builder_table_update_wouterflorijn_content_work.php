<?php namespace WouterFlorijn\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWouterflorijnContentWork extends Migration
{
    public function up()
    {
        Schema::rename('wouterflorijn_content_', 'wouterflorijn_content_work');
    }
    
    public function down()
    {
        Schema::rename('wouterflorijn_content_work', 'wouterflorijn_content_');
    }
}
