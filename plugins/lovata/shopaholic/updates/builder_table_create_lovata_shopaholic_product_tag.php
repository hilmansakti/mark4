<?php namespace Lovata\Shopaholic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLovataShopaholicProductTag extends Migration
{
    public function up()
    {
        Schema::create('lovata_shopaholic_product_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('tag_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lovata_shopaholic_product_tag');
    }
}
