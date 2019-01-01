<?php namespace Hilman\Carousel\Models;

use Model;

/**
 * Model
 */
class CarouselModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hilman_carousel_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
