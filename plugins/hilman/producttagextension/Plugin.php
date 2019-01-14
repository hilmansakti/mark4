<?php namespace Hilman\ProductTagExtension;

use Backend;
use Hilman\ProductTagExtension\Tag;
use Config;
use Event;
use System\Classes\PluginBase;
use Lovata\Shopaholic\Controllers\Products as ProductsController;
use Lovata\Shopaholic\Models\Product as ProductModel;

class Plugin extends PluginBase
{

    public $require = ['Lovata.Shopaholic'];

    public function pluginDetails()
    {
        return [
            'name'        => 'product tag',
            'description' => 'product tag',
            'author'      => 'Hilman',
            'icon'        => 'icon-tags',
        ];
    }

    public function registerComponents()
    {
        //
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        // extend the blog navigation
        Event::listen('backend.menu.extendItems', function($manager) {
            $manager->addSideMenuItems('Lovata.Shopaholic', 'shopaholic', [
                'tags' => [
                    'label' => 'Tag',
                    'icon'  => 'icon-tags',
                    'code'  => 'tags',
                    'owner' => 'Lovata.Shopaholic',
                    'url'   => Backend::url('hilman/producttagextension/tags')
                ]
            ]);
        });

        // extend the post model
        ProductModel::extend(function($model) {
            $model->belongsToMany['tags'] = [
                'Hilman\ProductTagExtension\Models\Tag',
                'table' => 'hilman_producttagextension_product_tag',
                'order' => 'name'
            ];
        });

        // extend the post form
        ProductsController::extendFormFields(function($form, $model, $context) {
            if (!$model instanceof ProductModel) {
                return;
            }

            $form->addSecondaryTabFields([
                'tags' => [
                    'label' => 'Tags',
                    'mode'  => 'relation',
                    'tab'   => 'tab',
                    'type'  => 'taglist'
                ]
            ]);
        });
    }
}
