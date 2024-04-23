<?php

namespace App\Http\Controllers;

use App\Events\LiveChart;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class ChartRtsController extends Controller
{
    
    public function index(){
        // LiveChart::dispatch('lorem ipsum dolor sit ammet');
        
        // return view('realtime_analytic.index', [
        //     "title" => "Analytic Realtime Server"
        // ]);
    }
}
