<?php namespace Hmones\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesWebsiteTeams extends Migration
{
    public function up()
    {
        Schema::create('hmones_website_teams', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name', 500);
            $table->string('slug', 500);
            $table->text('bio')->nullable();
            $table->integer('category')->default(0);
            $table->integer('display_order')->default(0);
            $table->string('img_credits', 500)->nullable();
            $table->string('position', 500)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('bio_summary', 500)->nullable();
            $table->string('email', 500)->nullable();
            $table->string('facebook', 500)->nullable();
            $table->string('instagram', 500)->nullable();
            $table->string('twitter', 500)->nullable();
            $table->string('linkedin', 500)->nullable();
            $table->string('website', 500)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_website_teams');
    }
}
