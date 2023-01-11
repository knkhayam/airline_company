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
                  'Passenger_Passport_No'
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
     * Get the connection for this model.
     *
     * @return App\Models\Connection
     */
    public function connection1()
    {
        return $this->hasMany('App\Models\Connection','booking_id','id');
    }

    public function getTypeAttribute()
    {
        if(count($this->connection1) == 0)
            return "Booking Requires at least one connection";

        return count($this->connection1) > 1 ? "Connecting" : "Direct";
    }

    public function getOriginAttribute()
    {
        $first = $this->connection1->first();
        if($first)
        {
            return $first->Schedule->Flight->ORIGIN;
        }
    }

    public function getDestAttribute()
    {
        $last = $this->connection1->last();
        if($last)
        {
            return $last->Schedule->Flight->DEST;
        }
    }


}
