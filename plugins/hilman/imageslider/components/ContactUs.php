<?php
/**
 * Created by PhpStorm.
 * User: hilmansakti
 * Date: 1/9/19
 * Time: 9:55 AM
 */

namespace Hilman\Imageslider\Components;

use Cms\Classes\ComponentBase;
use Hilman\Imageslider\Models\Contact;

class ContactUs extends ComponentBase {

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'Contact Us',
            'description' => 'Contact Us'
        ];
    }

    public function data() {
        $data = Contact::first();
        return $data;
    }


}