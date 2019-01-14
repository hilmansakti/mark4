<?php namespace Lovata\Shopaholic\Models;

use Model;

/**
 * Model
 */
class ProductTag extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'lovata_shopaholic_product_tag';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


}
