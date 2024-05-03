<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Satuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 /**
         * Display a listing of the resource.
         */
        public function index()
        {
            // ELOQUENT
            $barang = Barang::all();

            return view('barang.index', [
                'barang' => $barang
            ]);
        }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Barang';
        // RAW SQL Query
        $satuan = DB::select('select * from satuan');

        return view('barang.create', compact('pageTitle', 'satuan'));
    }


    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // INSERT QUERY
        DB::table('barangs')->insert([
            'kodeBarang' => $request->kode,
            'namaBarang' => $request->nama,
            'hargaBarang' => $request->harga,
            'deskripsiBarang' => $request->deskripsi,
            'satuans_id' => $request->satuan,
        ]);

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { {
            $pageTitle = 'barang Detail';

            // RAW SQL QUERY
            $barang = Barang::find($id);

            return view('barang.show', compact('pageTitle', 'barang'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $satuan = DB::select('select * from satuan');

        // ELOQUENT
         $barang = Barang::find($id);
         return view('Barang.edit', compact(
             'satuan',
             'barang',
            ));
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barang.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // QUERY BUILDER
        DB::table('barangs')
            ->where('id', $id)
            ->delete();

        return redirect()->route('barang.index');
    }
}
