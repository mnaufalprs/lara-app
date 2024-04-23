<?php

namespace App\Http\Controllers;

use App\Models\Input_wbtest;
use App\Http\Requests\StoreInput_wbtestRequest;
use App\Http\Requests\UpdateInput_wbtestRequest;
use App\Http\Controllers\Controller;
// use Clockwork\Request\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class InputWbtestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('webTest', [
        //     'title' => 'webTest'
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $allowedExtensionsDomain = ['biz', 'com', 'edu', 'info', 'name', 'net', 'org', 'pro', 'aero', 'asia', 'cat', 'coop', 'edu', 'int', 'jobs', 'tel', 'travel', 'id', 'co'];
        // $request->validate([
        //     'server_address' => [
        //         'required',
        //         // 'regex:/^(?:(?:[0-9]{1,3}\.){3}[0-9]{1,3})|(?:[a-zA-Z0-9-]+(?:\.[a-zA-Z]{2,})+)$/', // Regex untuk IP atau domain name
        //         function ($attribute, $value, $fail) {
        //             // Validasi untuk IPv4
        //             if (filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false) {
        //                 return;
        //             }
        
        //             // Validasi untuk domain name
        //             if (!preg_match('/^(?:[a-zA-Z0-9-]+(?:\.[a-zA-Z]{2,})+)$/', $value)) {
        //                 $fail($attribute.' is not a valid IPv4 or domain name.');
        //             }
        //         },
        //         function ($attribute, $value, $fail) use ($allowedExtensionsDomain) {
        //             // Validasi untuk ekstensi domain
        //             if (preg_match('/^(?:[a-zA-Z0-9-]+(?:\.[a-zA-Z]{2,})+)$/', $value)) {
        //                 $domainParts = explode('.', $value);
        //                 $extension = end($domainParts);
        //                 if (!in_array($extension, $allowedExtensionsDomain)) {
        //                     $fail($attribute.' is not a valid domain extension.');
        //                 }
        //             }
        //         },
        //     ],
        //     'request_count' => 'numeric',
        //     'connection_count'=> 'numeric',
        // ]);

        // dd('Input Data Benar!');
        // if ($request->fails()) {
        //     // Handle kesalahan validasi di sini
        //     // return redirect()->back()->withErrors($request)->withInput();
        //     dd($request->errors()->first());
        // }
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
            'category_server'=>'required'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors()->first());
            return redirect('/webTest')
                        ->withErrors($validator)
                        ->withInput();
        } else{
            // dd('Input Data Benar!');
        
            $validated = $validator->validated(); // Retrieve the validated input...
            $validated['user_id'] = auth()->user()->id;
            Input_wbtest::create($validated); // simpan pada database
            return redirect('/webTest');
        }
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInput_wbtestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Input_wbtest $input_wbtest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Input_wbtest $input_wbtest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInput_wbtestRequest $request, Input_wbtest $input_wbtest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Input_wbtest $input_wbtest)
    {
        //
    }
}
