<?php

/**
 * Created by PhpStorm.
 * User: hilmansakti
 * Date: 1/9/19
 * Time: 9:56 AM
 */

namespace Hilman\Imageslider\Components;

use Cms\Classes\ComponentBase;
use Hilman\Imageslider\Models\About;

class AboutUs extends ComponentBase
{
    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'About Us',
            'description' => 'About Us'
        ];
    }

    public function data() {
        $data = About::first();
        return $data;
    }


}