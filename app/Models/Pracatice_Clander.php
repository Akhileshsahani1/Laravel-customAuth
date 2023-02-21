<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pracatice_Clander extends Model
{
    use HasFactory;
     protected $table = 'practice_calanders';
     protected $fillable = [
          'practice_id','start','end','title'
     ];
}
