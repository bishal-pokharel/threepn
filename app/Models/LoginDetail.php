<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginDetail extends Model
{
    use HasFactory;
    
    public $table = 'login_detail';

    protected $fillable = [
        'user_id',
        'ip_address',
        'user_agent',
        'tokenable_type',
        'tokenable_id',
        'login_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
