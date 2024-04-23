<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_wbtest;

class Data_wbtestControler extends Controller
{
    public function index(){
        // $table_wbtest = Data_wbtest::latest();

        return view('web_analytic.index', [
            "title" => "Web Analytic",
            // "data_wbtest" => Data_wbtest::all()
            // "data_wbtest" => Data_wbtest::latest()->filter(request(['table-search']))->paginate(5)->withQueryString(),
            "data_wbtest" => Data_wbtest::where('user_id', auth()->user()->id)
                              ->latest()
                              ->filter(request(['table-search']))
                              ->paginate(5)
                              ->withQueryString()
        ]);
    }
}
