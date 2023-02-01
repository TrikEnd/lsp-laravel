@extends('component/layout')

@section('title', 'Profile')

@section('content')

<link rel="stylesheet" href="{{asset('css/profile.css')}}">

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


</div>

<table>
    <th class="isi">
        <h3>Sambutan Ketua LSP-P1</h3>
        <br>
        <p>Salam Sejahtera bagi kita semua. Selamat datang di Website Resmi Lembaga Sertifikasi Profesi SMK Bina Nusantara Ungaran. Era persaingan global yang telah nampak nyata di depan mata adalah tantangan yang harus dihadapi semua eleman bangsa agar bisa terus menjadi bagian dari masyarakat dunia yang dinamis. Tuntutan tersedianya tenaga kerja yang unggul dan kompeten sudah tidak bisa dihindarkan lagi karena memiliki dampak terhadap daya saing bangsa kita di dunia. Instruksi Presiden nomor 9 tahun 2016 tentang Revitalisasi SMK yang ditengarai sebagai jawaban atas situasi yang terjadi sekarang ini menjadikan Sekolah Menengah Kejuruan memiliki peranan strategis dalam mewujudkan peningkatan kualitas dan daya saing sumber daya manusia Indonesia. Salah satu point penting dari Inpres di atas adalah mengenai sertifikasi kompetensi bagi lulusan SMK, agar aksesnya ditingkatkan. Lembaga Sertifikasi Profesi Pihak Pertama (LSP P1), kini menjadi penting keberadaannya. LSP P1 SMK Bina Nusantara yang telah mendapatkan lisensi dari Badan Nasional Standarisasi Profesi (BNSP) Nomor : BNSP-LSP-2013-ID tertanggal 18 Oktober 2021 hadir untuk menjadi bagian dari upaya-upaya di atas. Visi kami Menjadi Lembaga Sertifikasi Profesi Pihak Pertama yang unggul dan terpercaya menghasilkan tenaga kerja kompeten dan berdaya saing global, siap menjawab tantangan yang ada. Semoga kehadiran LSP P1 SMK Bina Nusantara Ungaran memberikan banyak manfaat bagi seluruh lapisan masyarakat dan menghantarkan Indonesia menjadi bangsa terdepan dalam kemajuan. Demikian yang dapat kami sampaikan, semoga Allah SWT senantiasa memberikan petunjuk dan bimbingan kepada kita semua dalam mengelola LSP P1 SMK Bina Nusantara ini.</p>
    </th>
    <th class="gambar"> <img src="{{asset('gambar/profile.jpeg')}}" alt="">
    </th>

</table>

</div>

<div class="gambar2"><img src="{{asset('gambar/profile.jpeg')}}" alt=""></div>


@endSection
