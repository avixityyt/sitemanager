<?php namespace Avixity\SiteManager;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }


    public function registerFormWidgets()
    {
        return [
            'Avixity\Movies\FormWidgets\Actorbox' => [
                'label' => 'Actorbox field',
                'code'  => 'actorbox'
            ]    
        ];
    }

    public function registerSettings()
    {
    }
}
