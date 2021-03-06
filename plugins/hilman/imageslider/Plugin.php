<?php namespace Hilman\Imageslider;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'IS',
            'description' => 'Image Slider',
            'author' => 'Hilman',
            'icon' => 'icon-picture-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'Hilman\Imageslider\Components\ImageList' => 'imagelist',
            'Hilman\Imageslider\Components\ImageKanan' => 'imagekanan',
            'Hilman\Imageslider\Components\ContactUs' => 'contactus',
            'Hilman\Imageslider\Components\AboutUs' => 'aboutus',
        ];
    }

    public function registerSettings()
    {
        return [
            'imagelists' => [
                'label' => 'ImageSlider',
                'url' => Backend::url('hilman/imageslider/imageslider'),
                'description' => 'mohsin.carousel::lang.plugin.description',
                'icon' => 'icon-picture-o',
                'order' => 200
            ],
        ];
    }
}
