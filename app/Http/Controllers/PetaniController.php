<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar Petani";

        $petani = [
        (object)[
            'id_penjual' => 1,
            'nama' => 'Petani 1',
            'nik' => '123456',
            'alamat' => 'Singapadu',
            'nama_kelompok' => 'Jaya Mula',
            'telp' => '082772892',
            'foto' => 'uploads/petanis/petani1.png'
        ],
        (object)[
            'id_penjual' => 2,
            'nama' => 'Petani 2',
            'nik' => '32145',
            'alamat' => 'Tegalalang',
            'nama_kelompok' => 'Tani Maju',
            'telp' => '988292882',
            'foto' => 'uploads/petanis/petani2.png'
        ]
    ];

    $petani = collect($petani);

    return view('admin.daftarpetani', compact('title', 'petani'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
