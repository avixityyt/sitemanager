<?php namespace Avixity\SiteManager\Components;

use Cms\Classes\ComponentBase;
use Avixity\SiteManager\Models\Site;

/**
 * SiteManager Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class SiteManager extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'SiteManager',
            'description' => 'List the saved sites from the database',
            'icon' => 'icon-puzzle-piece'
        ];
    }

/**
 * Fetches all sites from the database and returns them as a collection.
 *
 * @return \Illuminate\Database\Eloquent\Collection A collection of Site models.
 */
public function listSites()
{
    $sites = Site::all();

    /*
     * Fetch all sites from the Site model
     */
    return $sites;
}

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
