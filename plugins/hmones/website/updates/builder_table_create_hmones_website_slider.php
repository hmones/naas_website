<?php namespace Hmones\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesWebsiteSlider extends Migration
{
    public function up()
    {
        Schema::create('hmones_website_slider', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('position', 191)->default('main');
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->integer('display_order')->unsigned()->default(0);
            $table->string('btn_txt', 191)->nullable();
            $table->text('link')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_website_slider');
    }
}
