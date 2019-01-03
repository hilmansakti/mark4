<?php namespace Hilman\Imageslider\Models;

use Model;

/**
 * Model
 */
class Kanan extends Model
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
    public $table = 'hilman_imageslider_kanan';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'img_kanan' => 'System\Models\File'
    ];
}
