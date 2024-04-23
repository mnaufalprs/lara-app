<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_wbtest extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function scopeFilter($query, array $filters){
        // if(isset($filters['table-search']) ? $filters['table-search'] : false){
        //     return $query->where('server_address', 'like', '%' . $filters['table-search'] . '%');
        //     //  ->orWhere('transfer_rate', 'like', '%' . $filters['table-search'] . '%');
        // }

        $query->when($filters['table-search'] ?? false, function($query, $table_search){
            return $query->where(function($query) use ($table_search){
                $query->where('server_address', 'like', '%' . $table_search . '%');
            //  ->orWhere('transfer_rate', 'like', '%' . $table_search  . '%');
            });
        });

    }
    public function input_wbtest(){
        return $this->belongsTo(Input_wbtest::class);
    }

}
