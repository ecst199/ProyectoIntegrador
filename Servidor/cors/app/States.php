<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class States extends Model 
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 
    ];
    public function Board()
    {
        return $this->belongsTo('App\Board');
    }
}