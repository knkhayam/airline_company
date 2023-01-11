<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
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
    protected $table = 'schedules';

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
                  'Flight_FLIGHTNUM',
                  'Date',
                  'DEP_TIME',
                  'ARR_TIME',
                  'Airplane_NUMSER',
                  'Pilot_EMPNUM'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['Date', 'ARR_TIME', 'DEP_TIME'];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the Flight for this model.
     *
     * @return App\Models\Flight
     */
    public function Flight()
    {
        return $this->belongsTo('App\Models\Flight','Flight_FLIGHTNUM','FLIGHTNUM');
    }

    /**
     * Get the Airplane for this model.
     *
     * @return App\Models\Airplane
     */
    public function Airplane()
    {
        return $this->belongsTo('App\Models\Airplane','Airplane_NUMSER','NUMSER');
    }

    /**
     * Get the Pilot for this model.
     *
     * @return App\Models\Pilot
     */
    public function Pilot()
    {
        return $this->belongsTo('App\Models\Pilot','Pilot_EMPNUM','Staff_EMPNUM');
    }

    /**
     * Get the booking for this model.
     *
     * @return App\Models\Booking
     */
    public function booking()
    {
        return $this->hasOne('App\Models\Booking','Schedule_Flight_FLIGHTNUM','Flight_FLIGHTNUM');
    }

    /**
     * Get the crew for this model.
     *
     * @return App\Models\Crew
     */
    public function crew()
    {
        return $this->hasOne('App\Models\Crew','Flight_FLIGHTNUM','Flight_FLIGHTNUM');
    }

    /**
     * Set the Date.
     *
     * @param  string  $value
     * @return void
     */
    
}
