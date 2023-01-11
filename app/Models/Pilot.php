<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pilots';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'Staff_EMPNUM';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'Staff_EMPNUM'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the Staff for this model.
     *
     * @return App\Models\Staff
     */
    public function Staff()
    {
        return $this->belongsTo('App\Models\Staff','Staff_EMPNUM','EMPNUM');
    }

    /**
     * Get the pilotRating for this model.
     *
     * @return App\Models\PilotRating
     */
    public function pilotRating()
    {
        return $this->hasOne('App\Models\PilotRating','Pilot_EMPNUM','Staff_EMPNUM');
    }

    /**
     * Get the schedule for this model.
     *
     * @return App\Models\Schedule
     */
    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule','Pilot_EMPNUM','Staff_EMPNUM');
    }



}
