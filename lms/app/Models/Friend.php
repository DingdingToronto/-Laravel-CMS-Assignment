<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Friend extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'fname',
        'lname',
        'age',
    ];

    
    public function hobbies()
    {
        return $this->belongsToMany(Hobby::class, 'friend_hobby', 'friend_id', 'hobby_id');
    }
}