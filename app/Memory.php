<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Memory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'memory_title',
        'memory_description',
    ];
    public function user (){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}