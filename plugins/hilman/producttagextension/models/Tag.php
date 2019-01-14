<?php namespace Hilman\ProductTagExtension\Models;

use Model;
use Config;
use Lovata\Shopaholic\Models\Product;

/**
 * Model
 */
class Tag extends Model
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
    public $table = 'hilman_producttagextension_tags';

    /**
     * relations
     */

    public $belongsToMany = [
        'products' => [
            'Lovata\Shopaholic\Models\Product',
            'table' => 'hilman_producttagextension_product_tag',
            'order' => 'published_at desc'
        ]
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:hilman_producttagextension_tags'
    ];

    /**
     * fillable
     */

    public $fillable = [
        'name',
        'slug',
    ];


    /**
     * before create
     */

    public function beforeCreate() {
        $this->setInitialSlug();
    }

    /**
     *
     * set initial slug
     */

    protected function setInitialSlug() {
        $this->slug = str_slug($this->name);
    }

    /**
     * convert tag names to lower case
     */

    public function setNameAttribute($value) {
        $this->attributes['name'] = mb_strtolower($value);
    }

    /**
     * Sets the "url" attribute with a URL to this object
     *
     * @param string                    $pageName
     * @param Cms\Classes\Controller    $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }

}
