<?php

namespace app;

use Illuminate\Database\Eloquent\Model;


class PlayerProgress extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    protected $fillable = [
        'wins', 'losses', 'draws',
    ];
}