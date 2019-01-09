<?php namespace Lovata\Shopaholic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLovataShopaholicProducts2 extends Migration
{
    public function up()
    {
        Schema::table('lovata_shopaholic_products', function($table)
        {
            $table->decimal('price', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('lovata_shopaholic_products', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
