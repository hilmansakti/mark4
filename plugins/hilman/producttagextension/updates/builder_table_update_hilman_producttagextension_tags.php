<?php namespace Hilman\ProductTagExtension\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHilmanProducttagextensionTags extends Migration
{
    public function up()
    {
        Schema::rename('hilman_producttagextension_product_tags', 'hilman_producttagextension_tags');
    }
    
    public function down()
    {
        Schema::rename('hilman_producttagextension_tags', 'hilman_producttagextension_product_tags');
    }
}
