<?php namespace Lovata\Shopaholic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLovataShopaholicProducts extends Migration
{
    public function up()
    {
        Schema::table('lovata_shopaholic_products', function($table)
        {
            $table->string('link_tokped', 200)->nullable();
            $table->string('link_bukalapak', 200)->nullable();
            $table->string('link_shopee', 200)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('lovata_shopaholic_products', function($table)
        {
            $table->dropColumn('link_tokped');
            $table->dropColumn('link_bukalapak');
            $table->dropColumn('link_shopee');
        });
    }
}
