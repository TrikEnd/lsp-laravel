@extends('component/layout')

@section('title', 'Home')

@section('content')

<link rel="stylesheet" href="{{asset('css/absen/data.css')}}">

<div class="container-home">
    <div class="welcome">
        <h3>Data</h3>
    </div>

    <table>
        <th>No</th>
        <th>Nama</th>
        <th></th>

        @if($i = 1)
        @endif
        @foreach($absen as $d)

        <tr>
            <td>{{$i++}}</td>
            <td>{{$d->nama}}</td>
            <td><a href="/detail/{{$d->id}}">Detail</a></td>
        </tr>

        @endforeach
    </table>

    @endSection
