<?php
namespace Hilman\Imageslider\Components;

use Cms\Classes\ComponentBase;
use Hilman\Imageslider\Models\ImageSlider;
use Illuminate\Support\Facades\DB;

class ImageList extends ComponentBase {

    public $imagelist;

    public function componentDetails()
    {
        return [
            'name' => 'IS',
            'description' => 'Image Slider',
        ];
    }

    public function onRun()
    {
        //parent::onRun(); // TODO: Change the autogenerated stub
        //$this->imagelist = ImageSlider::all();
        //$im = new ImageSlider();
        $this->il = DB::table('hilman_imageslider_')->get();
    }

    public function caros() {
        //$this->imagelist = DB::table('hilman_imageslider_')->find(4);
        $this->imagelist = ImageSlider::all();
        return $this->imagelist;
    }


}