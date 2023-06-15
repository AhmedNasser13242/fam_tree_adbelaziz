<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'company_name',
        'company_address',
        'company_phone',
        'company_facebook',
        'company_twitter',
        'company_instagram',
        'company_links',
        'company_image',
    ];
    public function user (){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}