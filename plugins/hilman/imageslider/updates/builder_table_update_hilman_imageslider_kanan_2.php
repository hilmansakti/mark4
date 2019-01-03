<?php namespace Hilman\Imageslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHilmanImagesliderKanan2 extends Migration
{
    public function up()
    {
        Schema::table('hilman_imageslider_kanan', function($table)
        {
            $table->renameColumn('posistion', 'position');
        });
    }
    
    public function down()
    {
        Schema::table('hilman_imageslider_kanan', function($table)
        {
            $table->renameColumn('position', 'posistion');
        });
    }
}
