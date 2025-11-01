<?php namespace Hmones\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesWebsiteStatistics extends Migration
{
    public function up()
    {
        Schema::create('hmones_website_statistics', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('property', 500);
            $table->integer('value');
            $table->integer('display_order')->default(0);
            $table->string('icon', 250)->default('stop');
            $table->integer('step')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_website_statistics');
    }
}
