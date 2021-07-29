<?php namespace Layerok\Bills;



use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Bills management',
            'description' => 'Provides features to manage your bills in digital format.',
            'author'      => 'Rudomanenko Vladimir',
            'icon'        => 'icon-bills'
        ];
    }

    public function registerComponents()
    {
        return [

        ];
    }
}
