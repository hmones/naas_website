<?php namespace Hmones\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesWebsiteTopics extends Migration
{
    public function up()
    {
        Schema::create('hmones_website_topics', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('content')->nullable();
            $table->string('slug', 500);
            $table->text('img_credits')->nullable();
            $table->smallInteger('category')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_website_topics');
    }
}
