<?php namespace StevenWanderski\Coax\Models;

use Model;

/**
 * Model
 */
class Show extends Model
{
    use \October\Rain\Database\Traits\Validation;

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
    public $table = 'stevenwanderski_coax_shows';

    public $belongsTo = [
        'band' => ['StevenWanderski\Coax\Models\Band'],
        'venue' => ['StevenWanderski\Coax\Models\Venue']
    ];

    protected $dates = ['date'];

    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', \Carbon\Carbon::now())->orderBy('date', 'asc');
    }
}