<?php

namespace App\Http\Controllers;

use Alert;
use App\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Pengguna';
        $pengguna = User::paginate(10);
        return view('pengguna.index', compact('pengguna','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Pengguna';
        $subtitle = 'Tambah data';
        return view('pengguna.create', compact('pengguna','title', 'subtitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => ['required','string','max:60'],
            'email'       => ['required','email'],
            'nip'    => ['required','digits:16'],
            'nomor_telepon'   => ['required','digits:12'],
        ]);

        $pengguna =  Pengguna::Create($request->all());
        Alert::success('Pengguna berhasil ditambahkan','Berhasil');
        return redirect()->route('pengguna.show',$pengguna);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $title = 'Pengguna';
        $subtitle = 'Detail Data';
        return view('pengguna.show', compact('user', 'title', 'subtitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
