<?php namespace Lovata\Shopaholic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLovataShopaholicProducts3 extends Migration
{
    public function up()
    {
        Schema::table('lovata_shopaholic_products', function($table)
        {
            $table->smallInteger('pre_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('lovata_shopaholic_products', function($table)
        {
            $table->dropColumn('pre_order');
        });
    }
}
