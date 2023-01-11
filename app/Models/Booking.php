<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
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
    protected $table = 'bookings';

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
                  'Passenger_Passport_No',
                  'Schedule_Flight_FLIGHTNUM'
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
     * Get the Passenger for this model.
     *
     * @return App\Models\Passenger
     */
    public function Passenger()
    {
        return $this->belongsTo('App\Models\Passenger','Passenger_Passport_No','Passport_No');
    }

    /**
     * Get the Schedule for this model.
     *
     * @return App\Models\Schedule
     */
    public function Schedule()
    {
        return $this->belongsTo('App\Models\Schedule','Schedule_Flight_FLIGHTNUM','Flight_FLIGHTNUM');
    }



}
