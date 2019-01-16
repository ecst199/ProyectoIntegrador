<?php

namespace app;

use Illuminate\Database\Eloquent\Model;


class Board extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    protected $fillable = [       
        'beginPosition', 'beginTime', 'endTime', 'row', 'column',
    ];
    public function histories()
    {
        return $this->belongsTo('App\Histories');
    }
    public function states()
    {
        return $this->hasMany('App\States');
    }
}