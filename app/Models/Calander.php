<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calander extends Model
{
    use HasFactory;
    protected $table = 'calanders';
    protected $fillable = [
        'provider_id','title','start','end','practice_id'
    ];
}
