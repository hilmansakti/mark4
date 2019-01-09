<?php namespace Hilman\Imageslider\Models;

use Model;

/**
 * Model
 */
class About extends Model
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
    public $table = 'hilman_imageslider_about_us';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
