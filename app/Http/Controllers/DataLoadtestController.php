<?php

namespace App\Http\Controllers;

use App\Models\Data_loadtest;
use App\Http\Requests\StoreData_loadtestRequest;
use App\Http\Requests\UpdateData_loadtestRequest;
use Illuminate\Http\Request;

class DataLoadtestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $urutan_pengukuran = $request->input('urutan_pengukuran');
        
        $data_loadtest = Data_loadtest::where('user_id', auth()->user()->id)
                                        ->where('urutan_pengukuran', $urutan_pengukuran)
                                        ->where('algortima_LB', '!=', 'no_load_balancer')
                                        ->latest()
                                        ->first();

        // $dataFromDatabase = YourModel::all(); // Ambil data dari database

        // // Konversi data ke format JSON
        // $dataLoadtests = array_map(function ($item) {
        //     return [
        //         'connection_count' => $item->connection_count,
        //         'connection_time' => $item->connection_time,
        //         'wrb' => $item->wrb,
        //         'lc' => $item->lc,
        //         'wlc' => $item->wlc,
        //     ];
        // }, $data_loadtest->toArray());

        // $dataLoadtest = Data_loadtest::where('user_id', auth()->user()->id)
        //                                 ->where('field_chart', 'field_chart2')
        //                                 ->where('algortima_LB', 'round_robin')
        //                                 ->orderBy('connection_count', 'desc')
        //                                 // ->orderByRaw('connection_count DESC, created_at ASC')
        //                                 ->take(3)
        //                                 ->get();

        $dataLoadtest = Data_loadtest::where('user_id', auth()->user()->id)
                                        // ->where('field_chart', 'field_chart2')
                                        // ->where('algortima_LB', 'round_robin')
                                        ->where('urutan_pengukuran', $urutan_pengukuran)
                                        ->orderBy('id', 'desc')
                                        // ->filter(request(['table-search']))
                                        // ->orderByRaw('connection_count DESC, created_at ASC')
                                        // ->take(1)
                                        // ->first();
                                        ->get();

        return view('load_analytic.index', [
            "title" => "Load Balance Analytic",
            "data_loadtest" => $data_loadtest,
            "dataLoadtests" => $dataLoadtest,
            // dd($urutan_pengukuran),
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
    public function store(StoreData_loadtestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Data_loadtest $data_loadtest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data_loadtest $data_loadtest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateData_loadtestRequest $request, Data_loadtest $data_loadtest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request)
    {
        // Dapatkan nilai urutan_pengukuran dari permintaan
        $urutanPengukuran = $request->input('urutan_pengukuran');
    
        // Pastikan nilai urutan_pengukuran tersedia
        if (!$urutanPengukuran) {
            // Kembalikan pesan kesalahan jika urutan_pengukuran tidak tersedia
            return redirect()->back()->withErrors('Tidak ada urutan_pengukuran yang diberikan.');
        }
    
        // Hapus semua data Data_loadtest berdasarkan urutan_pengukuran
        Data_loadtest::where('urutan_pengukuran', $urutanPengukuran)
            ->where('user_id', auth()->user()->id) // Pastikan hanya menghapus data milik pengguna saat ini
            ->delete();
    
        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
    // public function destroy($urutan_pengukuran)
    // {
    //     // Hapus data berdasarkan urutan_pengukuran
    //     Data_loadtest::where('user_id', auth()->user()->id)
    //                 ->where('urutan_pengukuran', $urutan_pengukuran)
    //                 ->delete();

    //     return redirect()->back()->with('success', 'Data deleted successfully');
    // }
}
