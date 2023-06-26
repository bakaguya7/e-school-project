<?php

namespace App\Http\Controllers;

use App\Models\RegisterSiswa;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegisterSiswaRequest;
use App\Http\Requests\UpdateRegisterSiswaRequest;

class RegisterSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RegisSiswa = RegisterSiswa::orderBy('created_at', 'DESC')->get();
        return view('admin.register-siswa.list', compact('RegisSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.register-siswa.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        RegisterSiswa::create($request->all());

        return redirect()->route('register-siswa.index')->with('success', 'AKUN SISWA BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisterSiswa $registerSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$book = Book::findOrFail($id);
        // return view('pages.book.edit', compact('book'));
        $RegisSiswa = RegisterSiswa::findOrFail($id);
        return view('admin.register-siswa.edit', compact('RegisSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $RegisSiswa = RegisterSiswa::findOrFail($id);
        $RegisSiswa->update($request->all());

        return redirect()->route('register-siswa.index')->with('success', 'AKUN SISWA BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $RegisSiswa = RegisterSiswa::findOrFail($id);
        $RegisSiswa->delete();

        return redirect()->route('register-siswa.index')->with('success', 'AKUN SISWA BERHASIL DIHAPUS');
    }
}