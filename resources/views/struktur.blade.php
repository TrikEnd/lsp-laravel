@extends('component/layout')

@section('title', 'Struktur Organisasi')

@section('content')

<link rel="stylesheet" href="{{asset('css/struktur.css')}}">

<div class="container-profile">

    <nav>
        <div class="menu">
            <ul>
                <li><a href="/tentang">Tentang Kami</a></li>
                <li><a href="/visimisi">Visi & Misi</a></li>
                <li><a href="/struktur">Struktur Organisasi</a></li>
                <li><a href="/fasilitas">Fasilitas</a></li>
            </ul>
        </div>
    </nav>

    <table>
        <td>
            <tr></tr>
            <tr></tr>
        </td>
    </table>


    <h3>Struktur Organisasi</h3>
    <br>

    <div class="gambar">
        <img src="{{asset('gambar/strukturorganisasi.jpg')}}" alt="">
    </div>

</div>



@endSection
