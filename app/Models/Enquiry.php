<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enquiry extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];
    
    public static function getFilter():array
    {
        return [
            'name',
            'email',
            'phone',
        ];
    }
    
}
