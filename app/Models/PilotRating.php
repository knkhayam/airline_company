<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilotRating extends Model
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
    protected $table = 'pilot_ratings';

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
                  'Pilot_EMPNUM',
                  'Airplane_Rating_Number'
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
     * Get the Pilot for this model.
     *
     * @return App\Models\Pilot
     */
    public function Pilot()
    {
        return $this->belongsTo('App\Models\Pilot','Pilot_EMPNUM','Staff_EMPNUM');
    }

    /**
     * Get the AirplaneRating for this model.
     *
     * @return App\Models\AirplaneRating
     */
    public function AirplaneRating()
    {
        return $this->belongsTo('App\Models\AirplaneRating','Airplane_Rating_Number','Rating_Number');
    }



}
