<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;    ///////

class Post extends Model
{
    use SoftDeletes;        ///////////////
    use HasFactory;
    protected $fillable = [

        'content'

    ];


public function subject()

{

    return $this->belongsTo(Subject::class);

}


public function users()

{

    return $this->hasMany(User::class);

}
}

