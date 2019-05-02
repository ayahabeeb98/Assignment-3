<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Note extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'notes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'note_title','description'
    ];

    protected $dates = ['created_at', 'updated_at','deleted_at'];

}
