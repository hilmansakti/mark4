<?php namespace Hilman\Imageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanImageslider extends Migration
{
    public function up()
    {
        Schema::create('hilman_imageslider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_imageslider_');
    }
}
