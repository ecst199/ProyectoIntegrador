<?php

namespace app;

use Illuminate\Database\Eloquent\Model;


class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    protected $fillable = [
        'name', 'image', 'status', 'email', 'move',
    ];
}