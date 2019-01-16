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
        'row', 'column',
    ];
}