<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [

        'content'

    ];

 
public function subject()

{

    return $this->belongsTo(Subject::class);

}


public function user()

{

    return $this->belongsTo(Subject::class);

}
} 

