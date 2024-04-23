<?php

namespace App\Http\Controllers;

use App\Models\Data_livetest;
use App\Http\Requests\StoreData_livetestRequest;
use App\Http\Requests\UpdateData_livetestRequest;
use App\Models\InputLivetest;

class DataLivetestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $input_livetes2 = InputLivetest::latest()->first();
        $data_livetest = Data_livetest::latest()->first();
        // dd($data_livetest); // Tambahkan ini untuk melihat data
        return view('realtime_analytic.index', [
            "title" => "Realtime Analytic",
            "data_livetest" => $data_livetest,
            "input_livetest2" => $input_livetes2,
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
    public function store(StoreData_livetestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Data_livetest $data_livetest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data_livetest $data_livetest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateData_livetestRequest $request, Data_livetest $data_livetest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data_livetest $data_livetest)
    {
        //
    }
}
