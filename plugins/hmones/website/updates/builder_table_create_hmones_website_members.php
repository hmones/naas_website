<?php namespace Hmones\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesWebsiteMembers extends Migration
{
    public function up()
    {
        Schema::create('hmones_website_members', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('role')->default(0);
            $table->text('name');
            $table->string('slug', 500);
            $table->text('content')->nullable();
            $table->text('location')->nullable();
            $table->string('email', 500)->nullable();
            $table->string('website', 500)->nullable();
            $table->string('facebook', 500)->nullable();
            $table->string('twitter', 500)->nullable();
            $table->string('youtube', 500)->nullable();
            $table->string('instagram', 500)->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_website_members');
    }
}
