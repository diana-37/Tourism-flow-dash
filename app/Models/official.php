<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class official extends Model
{
    use HasFactory;


    
    protected $fillable =[
        'user_id',
        'destination',
        'title',
    ];

    public function  user():BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
