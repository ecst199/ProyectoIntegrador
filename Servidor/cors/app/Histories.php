<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Histories extends Model 
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plays', 'beginDate', 'endDate', 'moveNumber', 'turn'
    ];
    public function Board()
    {
        return $this->hasMany('App\Board');
    }
}