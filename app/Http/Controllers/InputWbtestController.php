<?php

namespace App\Http\Controllers;

use App\Models\Input_wbtest;
use App\Http\Requests\StoreInput_wbtestRequest;
use App\Http\Requests\UpdateInput_wbtestRequest;
use App\Http\Controllers\Controller;
// use Clockwork\Request\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class InputWbtestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan user_id dari pengguna yang saat ini sedang login
        $currentUserId = auth()->user()->id;

        // Mengambil data dari tabel Data_wbtest berdasarkan user_id
        // $dataWbtest = Input_wbtest::where('user_id', $currentUserId)->get();
        return view('webTest', [
            "title" => "Web Testing",
            "dataUserId" => $currentUserId
            
        ]);
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
        // $allowedExtensions = ['biz', 'com', 'edu', 'info', 'name', 'net', 'org', 'pro', 'aero', 'asia', 'cat', 'coop', 'edu', 'int', 'jobs', 'tel', 'travel', 'id', 'co', 'ac.id'];
        function generateUniqueTestId() {
            do {
                // Menghasilkan karakter 6 huruf acak
                $testId = Str::random(6);
                
                // Memeriksa apakah test_id sudah ada di database
                $exists = Input_wbtest::where('test_id', $testId)->exists();
            } while ($exists); // Ulangi jika test_id sudah ada di database
        
            return $testId; // Mengembalikan test_id yang unik
        }

        $validator = Validator::make($request->all(), [
            'server_address' => [
                'required',
                function ($attribute, $value, $fail) {
                    $allowedExtensions = ['biz', 'com', 'edu', 'info', 'name', 'net', 'org', 'pro', 'aero', 'asia', 'cat', 'coop', 'edu', 'int', 'jobs', 'tel', 'travel', 'id', 'co', 'ac.id'];
                    // Validasi untuk IPv4 atau IPv4:port
                    if (preg_match('/^(\d{1,3}(?:\.\d{1,3}){3})(?::(\d{1,5}))?$/', $value, $matches)) {
                        // Memeriksa apakah alamat IP valid
                        if (!filter_var($matches[1], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                            $fail($attribute.' must be a valid IPv4 address.');
                        }
                        
                        // Jika port ada, memeriksa apakah port valid (antara 0 dan 65535)
                        if (isset($matches[2])) {
                            $port = (int)$matches[2];
                            if ($port < 0 || $port > 65535) {
                                $fail($attribute.' must have a valid port number between 0 and 65535.');
                            }
                        }
                        return; // Jika sudah valid, hentikan validasi di sini
                    }
        
                    // Validasi untuk domain name
                    if (preg_match('/^(?:[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+)$/', $value)) {
                        $domainParts = explode('.', $value);
                        $extension = end($domainParts);
                        if (!in_array($extension, $allowedExtensions)) {
                            $fail($attribute.' is not a valid domain or ip extension.');
                        }
                    } else {
                        // Jika format tidak sesuai, tampilkan pesan kesalahan
                        $fail($attribute.' must be a valid IPv4, or domain name.');
                    }
                }
            ],
            'request_count' => 'numeric|required',
            'connection_count' => 'numeric|required|gt:request_count',
            'category_server' => 'required',
            'test_id' => '',

        ]);

        if ($validator->fails()) {
            // dd($validator->errors()->first());
            return redirect('/webTest')
                        ->withErrors($validator)
                        ->withInput();
        } else{
            // dd('Input Data Benar!');
        
            $validated = $validator->validated(); // Retrieve the validated input...
            $validated['test_id'] = generateUniqueTestId();
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
