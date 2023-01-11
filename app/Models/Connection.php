<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
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
    protected $table = 'connections';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'booking_id',
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
     * Get the Booking for this model.
     *
     * @return App\Models\Booking
     */
    public function Booking()
    {
        return $this->belongsTo('App\Models\Booking','booking_id','id');
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
