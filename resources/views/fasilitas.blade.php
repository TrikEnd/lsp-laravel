@extends('component/layout')

@section('title', 'Fasilitas')

@section('content')

<link rel="stylesheet" href="{{asset('css/fasilitas.css')}}">

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


    <h3>Fasilitas</h3>
    <br>

    <div class="gambar">
        <ul>
            <li> <img src="{{asset('gambar/fasilitas/desain.jpg')}}" alt="">
                <h3>Desain</h3>
            </li>
            <li> <img src="{{asset('gambar/fasilitas/dkv.jpg')}}" alt="">
                <h3>DKV</h3>
            </li>
            <li> <img src="{{asset('gambar/fasilitas/tb.jpg')}}" alt="">
                <h3>TB</h3>
            </li>
            <li> <img src="{{asset('gambar/fasilitas/tb2.jpg')}}" alt="">
                <h3>TB 2</h3>
            </li>
            <li> <img src="{{asset('gambar/fasilitas/tbsm.jpg')}}" alt="">
                <h3>TBSM</h3>
            </li>
            <li><img src="{{asset('gambar/fasilitas/tsm2.jpg')}}" alt="">
                <h3>TBSM 2</h3>
            </li>
            <li> <img src="{{asset('gambar/fasilitas/tkj.jpg')}}" alt=""> TKJ</li>
        </ul>







    </div>

</div>



@endSection
