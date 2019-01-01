<?php namespace Hilman\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanCarouselData2 extends Migration
{
    public function up()
    {
        Schema::create('hilman_carousel_data', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('name_id');
            $table->string('title', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('link', 255)->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_carousel_data');
    }
}
