<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswaMatkul extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('mahasiswa.mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('mahasiswa.create_mahasiswa')
            ->with('url_form', url('/mahasiswa'))
            ->with('kelas', $kelas);
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
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:225',
            'hp' => 'required|digits_between:6,15',
        ]);

        $data = Mahasiswa::create($request->except(['_token']));

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('kelas')->where('id',$id)->first();
        return view('mahasiswa.detail', ['mahasiswa' => $mahasiswa]);
    }

    public function nilai($id)
    {
        $mahasiswa = Mahasiswa::where('id',$id)->first();
        $nilai = Mahasiswa ::where('mahasiswa_id',$id)->get();
        return view('mahasiswa.nilai')
                ->with('mahasiswa', $mahasiswa)
                ->with('nilai', $nilai);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = kelas::all();
        $mhs = Mahasiswa::find($id);
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs', $mhs)
            ->with('url_form', url('/mahasiswa/'. $id))
            ->with('kelas', $kelas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:225',
            'hp' => 'required|digits_between:6,15',
        ]);

        $data = Mahasiswa::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
