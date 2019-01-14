<?php namespace Hilman\ProductTagExtension\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHilmanProducttagextensionProductTags extends Migration
{
    public function up()
    {
        Schema::create('hilman_producttagextension_product_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hilman_producttagextension_product_tags');
    }
}
