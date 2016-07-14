<?php namespace StevenWanderski\Coax\Models;

use Model;

/**
 * Model
 */
class Venue extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required',
        'address1' => 'required'
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stevenwanderski_coax_venues';
}