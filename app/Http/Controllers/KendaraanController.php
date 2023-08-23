<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = kendaraan::all();
        return view('kendaraan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.input-kendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        kendaraan::create($request->post());

        return redirect()->route('kendaraan.index')->with('success', 'Data Berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = kendaraan::find($id);
        return view('kendaraan.edit-kendaraan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = kendaraan::find($id);

        $update->fill($request->post())->save();
        return redirect()->route('kendaraan.index')->with('success', 'Data Berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = kendaraan::find($id);
        $data->delete();
        return redirect()->route('kendaraan.index')->with('success', 'Data Berhasil diupdate.');
    }
}
