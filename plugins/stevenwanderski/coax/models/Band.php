<?php namespace StevenWanderski\Coax\Models;

use Model;
use October\Rain\Database\Attach\File;

/**
 * Model
 */
class Band extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stevenwanderski_coax_bands';

    public $hasMany = [
        'shows' => 'StevenWanderski\Coax\Models\Show'
    ];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];

    public $attachOne = [
        'homepagePhoto' => 'System\Models\File',
        'bodyPhoto' => 'System\Models\File'
    ];
}