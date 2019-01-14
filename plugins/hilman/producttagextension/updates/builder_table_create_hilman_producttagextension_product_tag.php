<?php namespace Hilman\ProductTagExtension\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanProducttagextensionProductTag extends Migration
{
    public function up()
    {
        Schema::create('hilman_producttagextension_product_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('tag_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_producttagextension_product_tag');
    }
}
