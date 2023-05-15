<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\BarangRequest;
use App\Http\Resources\BarangResource;
use App\DataTables\BarangDataTable;
class BarangController extends Controller
{
    public function index(BarangDataTable $dataTable)
    {
        return $dataTable->render('barangs.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $barang = Barang::create($request->all());

        return [$barang];
    }

    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {

        return $barang->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return response(null, 200);
    }
}
