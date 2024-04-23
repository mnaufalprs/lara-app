<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_livetest extends Model
{
    use HasFactory;

    public function input_livetest(){
        return $this->belongsTo(InputLivetest::class);
    }
}
