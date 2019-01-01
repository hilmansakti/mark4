<?php namespace Hilman\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteHilmanCarouselName extends Migration
{
    public function up()
    {
        Schema::dropIfExists('hilman_carousel_name');
    }
    
    public function down()
    {
        Schema::create('hilman_carousel_name', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name', 100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
