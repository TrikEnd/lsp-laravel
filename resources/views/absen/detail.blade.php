@extends('component/layout')

@section('title', 'Home')

@section('content')

<link rel="stylesheet" href="{{asset('css/absen/detail.css')}}">

<div class="container-home">
    <div class="welcome">
        <h3>Data dari {{$absen->nama}}</h3>
    </div>

    <table>

        <th>Nama</th>
        <th>Absen</th>
        <th>kelas</th>


        <tr>

            <td>{{$absen->nama}}</td>
            <td>{{$absen->absen}}</td>
            <td>{{$absen->kelas}}</td>


        </tr>


    </table>


    <div class="tombol">
        <a class="edit" href="/edit/{{$absen->id}}">Edit</a>

        <form action="/delete/{{$absen->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>


    @endSection
