<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class hobby extends Model
{
    use HasFactory;

    protected $fillable=[
        'hobbyName',      
    ];
    public function friends()
    {
        return $this->belongsToMany(Friend::class, 'friend_hobby', 'hobby_id', 'friend_id');
    }
}
