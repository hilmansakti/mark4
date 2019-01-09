<?php namespace Hilman\Imageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanImagesliderContactUs extends Migration
{
    public function up()
    {
        Schema::create('hilman_imageslider_contact_us', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email', 100);
            $table->string('phone', 25);
            $table->decimal('longitude', 9, 6);
            $table->decimal('latitude', 9, 6);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_imageslider_contact_us');
    }
}
