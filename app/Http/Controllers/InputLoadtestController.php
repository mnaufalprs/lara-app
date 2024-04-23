<?php

namespace App\Http\Controllers;

use App\Models\InputLoadtest;
use App\Http\Requests\StoreInputLoadtestRequest;
use App\Http\Requests\UpdateInputLoadtestRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InputLoadtestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loadTest.index', [
            "title" => "Load Balance Testing",
            // "input_livetest" => InputLivetest::latest()->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $allowedExtensions = ['biz', 'com', 'edu', 'info', 'name', 'net', 'org', 'pro', 'aero', 'asia', 'cat', 'coop', 'edu', 'int', 'jobs', 'tel', 'travel', 'id', 'co'];

        $validator = Validator::make($request->all(), [
            'server_address' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Validasi untuk IPv4
                    if (filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false) {
                        return;
                    }

                    // Validasi untuk domain name
                    if (!preg_match('/^(?:[a-zA-Z0-9-]+(?:\.[a-zA-Z]{2,})+)$/', $value)) {
                        $fail($attribute.' is not a valid IPv4 or domain name.');
                    }
                },
                function ($attribute, $value, $fail) use ($allowedExtensions) {
                    // Validasi untuk ekstensi domain
                    if (preg_match('/^(?:[a-zA-Z0-9-]+(?:\.[a-zA-Z]{2,})+)$/', $value)) {
                        $domainParts = explode('.', $value);
                        $extension = end($domainParts);
                        if (!in_array($extension, $allowedExtensions)) {
                            $fail($attribute.' is not a valid domain extension.');
                        }
                    }
                }
            ],
            'request_count' => 'numeric',
            'connection_count'=> 'numeric',
            'algortima_LB'=>'required',
            'field_chart'=>'required',
            'urutan_pengukuran'=>'required',
        ]);

        if ($validator->fails()) {
            // dd($validator->errors()->first());
            return redirect('/loadTest')
                        ->withErrors($validator)
                        ->withInput();
        } else{
            // dd('Input Data Benar!');
        
            $validated = $validator->validated(); // Retrieve the validated input...
            $validated['user_id'] = auth()->user()->id;
            InputLoadtest::create($validated); // simpan pada database
            return redirect('/loadTest');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInputLoadtestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InputLoadtest $inputLoadtest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InputLoadtest $inputLoadtest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInputLoadtestRequest $request, InputLoadtest $inputLoadtest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InputLoadtest $inputLoadtest)
    {
        //
    }
}
