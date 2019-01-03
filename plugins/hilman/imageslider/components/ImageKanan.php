<?php
/**
 * Created by PhpStorm.
 * User: hilmansakti
 * Date: 1/3/19
 * Time: 8:32 AM
 */
namespace Hilman\Imageslider\Components;

use Cms\Classes\ComponentBase;
use Hilman\Imageslider\Models\Kanan;

class ImageKanan extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Kanan',
            'description' => 'Image Kanan',
        ];
    }

    public function atas() {
        $atas = Kanan::where('position', '=', 'atas')->first();
        return $atas;
    }

    public function bawahkiri() {
        $bkiri = Kanan::where('position', '=', 'bawahkiri')->first();
        return $bkiri;

    }

    public function bawahkanan() {
        $bkanan = Kanan::where('position', '=', 'bawahkanan')->first();
        return $bkanan;
    }

}