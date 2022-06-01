<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    const PUBLIC  = 1;
    const FRIENDS = 2;
    const SPACIFIC_FRIENDS = 3;
    const ONLY_ME = 4;

    
    protected $fillable = [
        'body',
        'status',
        'visibility',
        'user_id'
    ];

    public function user(){

        return $this->belongsto(User::Class);
    }
}
