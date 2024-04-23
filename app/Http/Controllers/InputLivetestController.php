<?php

namespace App\Http\Controllers;

use App\Models\InputLivetest;
use App\Http\Requests\StoreInputLivetestRequest;
use App\Http\Requests\UpdateInputLivetestRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
// use Clockwork\Request\Request;
use Illuminate\Http\Request;



class InputLivetestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('realtimeTest.index', [
            "title" => "Realtime Testing",
            "input_livetest" => InputLivetest::latest()->first(),
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
            'status_connect' => 'numeric',
            // 'category_server'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect('/realtimeTest')
                ->withErrors($validator)
                ->withInput();
        } else {
    
            // dd('Input Data Benar!');
            $validated = $validator->validated(); // Retrieve the validated input...
            // dd($validated);
            InputLivetest::create($validated); // simpan pada database
            return redirect('/realtimeTest');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInputLivetestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InputLivetest $inputLivetest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InputLivetest $inputLivetest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInputLivetestRequest $request, InputLivetest $inputLivetest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InputLivetest $inputLivetest)
    {
        //
    }
}
