<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AirplaneRating extends Model
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
    protected $table = 'airplane_ratings';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'Rating_Number';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'Name',
                  'Description'
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
     * Get the airplane for this model.
     *
     * @return App\Models\Airplane
     */
    public function airplane()
    {
        return $this->hasOne('App\Models\Airplane','Airplane_Rating_Number','Rating_Number');
    }

    /**
     * Get the pilotRating for this model.
     *
     * @return App\Models\PilotRating
     */
    public function pilotRating()
    {
        return $this->hasOne('App\Models\PilotRating','Airplane_Rating_Number','Rating_Number');
    }



}
