<?php namespace Hilman\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanCarouselName2 extends Migration
{
    public function up()
    {
        Schema::create('hilman_carousel_name', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_carousel_name');
    }
}
