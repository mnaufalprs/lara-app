<?php

namespace App\Http\Controllers;

use App\Models\InputLoadtest;
use App\Http\Requests\StoreInputLoadtestRequest;
use App\Http\Requests\UpdateInputLoadtestRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class InputLoadtestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan user_id dari pengguna yang saat ini sedang login
        $currentUserId = auth()->user()->id;

        return view('loadTest.index', [
            "title" => "Load Balance Testing",
            "dataUserId" => $currentUserId,
            // "input_livetest" => InputLivetest::latest()->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $allowedExtensions = ['biz', 'com', 'edu', 'info', 'name', 'net', 'org', 'pro', 'aero', 'asia', 'cat', 'coop', 'edu', 'int', 'jobs', 'tel', 'travel', 'id', 'co'];

        function generateUniqueTestId() {
            do {
                // Menghasilkan karakter 6 huruf acak
                $testId = Str::random(6);
                
                // Memeriksa apakah test_id sudah ada di database
                $exists = InputLoadtest::where('test_id', $testId)->exists();
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
            $validated['test_id'] = generateUniqueTestId();
            $validated['user_id'] = auth()->user()->id;
            InputLoadtest::create($validated); // simpan pada database
            return redirect('/loadTest')->withInput();
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
