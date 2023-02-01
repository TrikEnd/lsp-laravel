@extends('component/layout')

@section('title', 'visi misi')

@section('content')

<link rel="stylesheet" href="{{asset('css/visimisi.css')}}">

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


    <h3>Visi dan Misi</h3>
    <br>

    <div class="gambar">
        <img src="{{asset('gambar/visimisi2.png')}}" alt="">
    </div>

</div>



@endSection
