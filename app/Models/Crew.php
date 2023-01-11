<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
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
    protected $table = 'crews';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'Staff_EMPNUM',
                  'Flight_FLIGHTNUM'
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
     * Get the Schedule for this model.
     *
     * @return App\Models\Schedule
     */
    public function Schedule()
    {
        return $this->belongsTo('App\Models\Schedule','Flight_FLIGHTNUM','Flight_FLIGHTNUM');
    }



}
