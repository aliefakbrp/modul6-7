@extends('layouts.main')
@section('content')
<div class="container">
    <h1 class="text-primary mt-3 mb-5">About me</h1>
        <img src="https://pbs.twimg.com/media/FU40ZpHaQAAgUFJ?format=jpg&name=medium" alt="Alief AKbar Purnama"  width="200px" height="300px" class="mx-auto d-block rounded mb-5">
    <h2 class="text-primary mt-lg-5">
        Background
    </h2>
    <div class="container">
        Nama saya Alief AKbar Purnama, saya berasal dari Sumenep, saya merupakan anak kedua dari 2 bersaudara.
    </div>
    <div class="container">
        Saya seringkali memakan karbohidrat kompleks dan mengonsumsi makanan yang banyak mengandung kalori.
    </div>
    <div class="container">
        Tugas saya dirumah adalah menghabiskan makanan yang dibuat oleh ibu saya.
    </div>
    <div class="container">
        Saya sedang membangun diri saya menjadi lebih baik agar bisa santai di hari tua
    </div>
    <div class="container">
        saya sudah berhasil melalui 3 pendidikan dasar yaitu SMA, SMP, dan SD.
    </div>
    <div class="container">
        Berkuliah di UTM adalah salah satu perintah ibu saya, namun untuk jurusan semua tergantung dengan pilihan saya
        dan jurusan Teknik Informatika di Universitas Trunojoyo Madura adalah pilihan saya.
    </div>
    <h2 class="text-primary mt-lg-5">
        Suka Duka PAW
    </h2>
    <div class="container">
        Untuk sukanya adalah dimana kita bisa belajar Pemrograman Aplikasi Web dan mengimplementasikan, namun saya ada
        beberapa hal yang membuat saya berduka
        karna setiap praktikum terdapat tugas yang mengharuskan membuat laporan <img src="{{ asset('/smiley.png') }} "
            width="30px" height="30px" alt="">
    </div>
</div>

@endsection
