<?php namespace Avixity\SiteManager;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Avixity\SiteManager\Components\SiteManager' => 'siteManager'
        ];
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
