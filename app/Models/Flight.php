<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
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
    protected $table = 'flights';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'FLIGHTNUM';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'FLIGHTNUM',
                  'ORIGIN',
                  'DEST'
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
     * Get the schedule for this model.
     *
     * @return App\Models\Schedule
     */
    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule','Flight_FLIGHTNUM','FLIGHTNUM');
    }



}
