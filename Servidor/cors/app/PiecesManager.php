<?php

namespace app;

use Illuminate\Database\Eloquent\Model;


class PiecesManager extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    protected $fillable = [
        'pieceMovement', 'numberMovement',
    ];
}