<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartLivetest extends Component
{
    public function render(){
        // return view('realtime_analytic.index', [
        //     "title" => "Analytic Realtime Server"
        // ]);
        return view('livewire.ChartLivetest', [
                "title" => "Analytic Realtime Server"
        ]);
    }
}
