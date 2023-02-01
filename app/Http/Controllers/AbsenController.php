<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;

class AbsenController extends Controller
{
    public function index()
    {

        $absen = Absen::all();

        return view('absen/data', ['absen' => $absen]);
    }

    public function detail($id)
    {
        $absen =  Absen::findorfail($id);

        return view('absen/detail', ['absen' => $absen]);
    }

    public function daftar()
    {
        return view('absen/daftar');
    }

    public function create(Request $request)
    {

        $absen = Absen::create($request->all());

        return redirect('daftar');
    }

    public function delete(Request $request, $id)
    {
        $absen = Absen::findorfail($id);

        $absen->delete();

        return redirect('data');
    }

    public function edit($id)
    {

        $absen = Absen::findorfail($id);

        return view('absen/edit', ['absen' => $absen]);
    }

    public function update(Request $request, $id)
    {
        $absen = Absen::findorfail($id);

        $absen->update($request->all());

        return redirect('data');
    }
}
