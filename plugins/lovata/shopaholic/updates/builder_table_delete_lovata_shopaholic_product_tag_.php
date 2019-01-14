<?php namespace Lovata\Shopaholic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteLovataShopaholicProductTag extends Migration
{
    public function up()
    {
        Schema::dropIfExists('lovata_shopaholic_product_tag_');
    }
    
    public function down()
    {
        Schema::create('lovata_shopaholic_product_tag_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('tag_id');
            $table->string('slug', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
