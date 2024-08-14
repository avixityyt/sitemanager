<?php namespace Avixity\SiteManager\Models;

use Model;

/**
 * Model
 */
class Site extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];
    public $fillable = ['title', 'url']; // Allow these for mass assignment

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'avixity_sitemanager_sites';

}