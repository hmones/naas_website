<?php namespace Hmones\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesWebsiteDownloads extends Migration
{
    public function up()
    {
        Schema::create('hmones_website_downloads', function($table)
        {
            $table->integer('id')->unsigned();
            $table->string('name', 500);
            $table->integer('display_order')->default(0);
            $table->string('identifier', 500);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_website_downloads');
    }
}
