@extends('component/layout')

@section('title', 'Home')

@section('content')

<link rel="stylesheet" href="{{asset('css/absen/daftar.css')}}">

<div class="container-home">
    <div class="welcome">
        <h3>Daftar</h3>
    </div>

    <form action="/update/{{$absen->id}}" method="post">
        @csrf
        @method('PUT')
        <label for="nama">Nama</label>
        <input class="kelas" type="text" name="nama" id="nama" value="{{$absen->nama}}" required>
        <br>
        <label for=" absen">Absen</label>
        <input class="absen" type="text" name="absen" id="absen" value="{{$absen->absen}}" required>
        <br>
        <label for=" kelas">Kelas</label>
        <input class="kelas" type="text" name="kelas" id="kelas" value="{{$absen->kelas}}" required>
        <br>
        <br>
        <button type="submit">Update</button>
    </form>

    @endSection
