<?php namespace Hilman\Imageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanImagesliderKanan extends Migration
{
    public function up()
    {
        Schema::create('hilman_imageslider_kanan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_imageslider_kanan');
    }
}
