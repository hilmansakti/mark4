<?php namespace Hilman\Imageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanImagesliderAboutUs extends Migration
{
    public function up()
    {
        Schema::create('hilman_imageslider_about_us', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('about')->nullable();
            $table->string('fb_link', 100)->nullable();
            $table->string('ig_link', 100)->nullable();
            $table->string('twitter_link', 100)->nullable();
            $table->string('gplus_link', 100)->nullable();
            $table->string('ytube_link', 100)->nullable();
            $table->string('bl_link', 100)->nullable();
            $table->string('tokped_link', 100)->nullable();
            $table->string('shopee_link', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_imageslider_about_us');
    }
}
