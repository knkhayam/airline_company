<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
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
    protected $table = 'airplanes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'NUMSER';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'NUMSER',
                  'Manufacturer_Model',
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
     * Get the AirplaneRating for this model.
     *
     * @return App\Models\AirplaneRating
     */
    public function AirplaneRating()
    {
        return $this->belongsTo('App\Models\AirplaneRating','Airplane_Rating_Number','Rating_Number');
    }

    /**
     * Get the schedule for this model.
     *
     * @return App\Models\Schedule
     */
    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule','Airplane_NUMSER','NUMSER');
    }



}
