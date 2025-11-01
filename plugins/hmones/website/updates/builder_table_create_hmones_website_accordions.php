<?php namespace Hmones\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesWebsiteAccordions extends Migration
{
    public function up()
    {
        Schema::create('hmones_website_accordions', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title', 500);
            $table->text('content');
            $table->integer('display_order')->unsigned()->default(0);
            $table->string('identifier', 500);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('is_open')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_website_accordions');
    }
}
