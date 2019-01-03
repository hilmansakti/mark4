<?php namespace Hilman\Imageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHilmanImagesliderKanan extends Migration
{
    public function up()
    {
        Schema::table('hilman_imageslider_kanan', function($table)
        {
            $table->string('posistion', 100);
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('hilman_imageslider_kanan', function($table)
        {
            $table->dropColumn('posistion');
            $table->increments('id')->unsigned()->change();
        });
    }
}
