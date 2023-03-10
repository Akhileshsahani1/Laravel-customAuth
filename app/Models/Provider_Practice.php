<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider_Practice extends Model
{
    use HasFactory;

    protected $table = 'provider__practices';

    protected $fillable =[
         'practice_id','admin_id','start','end'
    ];
}
