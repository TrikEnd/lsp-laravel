@extends('component/layout')

@section('title', 'Contact')

@section('content')

<link rel="stylesheet" href="{{asset('css/contact.css')}}">

<div class="container-home">
    <div class="welcome">
        <h3>Contact Me</h3>
    </div>

    <h3>Alamat</h3>
    <h4>Jl. Kisarino Mangunpranoto No.5, Bandarjo, Ungaran, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50517</h4>

    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=smk%20bina%20nusantara%20ungaran&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }

                @media (max-width: 576px) {
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 300px;
                        width: 300px;
                        margin-left: auto;
                        margin-right: auto;
                    }
                }
            </style><a href="https://www.embedgooglemap.net">google map code</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }

                @media (max-width: 576px) {
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 300px;
                        width: 300px;
                        margin-left: auto;
                        margin-right: auto;
                    }
                }
            </style>
        </div>
    </div>

    @endSection
