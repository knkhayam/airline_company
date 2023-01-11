<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
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
    protected $table = 'staff';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'EMPNUM';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'SURNAME',
                  'NAME',
                  'ADDRESS',
                  'PHONE',
                  'SALARY'
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
     * Get the crew for this model.
     *
     * @return App\Models\Crew
     */
    public function crew()
    {
        return $this->hasOne('App\Models\Crew','Staff_EMPNUM','EMPNUM');
    }

    /**
     * Get the pilot for this model.
     *
     * @return App\Models\Pilot
     */
    public function pilot()
    {
        return $this->hasOne('App\Models\Pilot','Staff_EMPNUM','EMPNUM');
    }

    public function getTypeAttribute()
    {
        return $this->pilot == null ? 'Staff' : 'Pilot';
    }


}
