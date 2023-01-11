<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
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
    protected $table = 'passengers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'Passport_No';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'Passport_No',
                  'SURNAME',
                  'NAME',
                  'ADDRESS',
                  'PHONE'
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
     * Get the booking for this model.
     *
     * @return App\Models\Booking
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking','Passenger_Passport_No','Passport_No');
    }



}
