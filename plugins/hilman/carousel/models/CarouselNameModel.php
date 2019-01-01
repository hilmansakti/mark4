<?php namespace Hilman\Carousel\Models;

use Model;

/**
 * Model
 */
class CarouselNameModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hilman_carousel_name';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
