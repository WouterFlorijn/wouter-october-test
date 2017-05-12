<?php namespace WouterFlorijn\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWouterflorijnContent extends Migration
{
    public function up()
    {
        Schema::create('wouterflorijn_content_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 64);
            $table->text('description')->nullable();
            $table->string('url', 256)->nullable();
            $table->string('title', 64)->nullable();
            $table->string('started_at', 16);
            $table->string('ended_at', 16)->nullable();
            $table->string('classes', 64)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wouterflorijn_content_');
    }
}
