<?php

namespace app;

use Illuminate\Database\Eloquent\Model;


class Piece extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    protected $fillable = [
        'names', 'color', 'position', 'desing',
    ];
}