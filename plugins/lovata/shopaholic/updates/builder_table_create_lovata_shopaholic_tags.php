<?php namespace Lovata\Shopaholic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLovataShopaholicTags extends Migration
{
    public function up()
    {
        Schema::create('lovata_shopaholic_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lovata_shopaholic_tags');
    }
}
