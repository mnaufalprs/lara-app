<?php

namespace App\Http\Controllers;

use App\Models\Data_wbtest;
use Illuminate\Http\Request;

class DataWbtestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Data_wbtest $data_wbtest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data_wbtest $data_wbtest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data_wbtest $data_wbtest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data_wbtest $webAnalytic)
    {
        $webAnalytic->delete(); // Menghapus data
        return redirect()->route('webAnalytic.index')->with('success', 'Data berhasil dihapus.');
    }
}
