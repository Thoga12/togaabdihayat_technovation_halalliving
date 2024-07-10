<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'HalalLiving')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- BOOSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
</head>
<body>
    <header>
        <h3>HALALLIFE</h3>
        <nav class="navbar">
            <a href="/">Beranda</a>
            <a href="{{ 'langganan ' }}">Berlangganan</a>
            <a href="aboutMe.html">Komunitas</a>
            <a href="sertifikat.html">Transaksi Syariah</a>
            <a href="{{ route('daftarKursus') }}">Pendidikan Halal</a>
        </nav>
        <!-- <button type="submit" class="btn-chat">Chat</button> -->
        <aside class="float-right">
            {{-- <div class="search"> --}}
                {{-- <i class="bi bi-search"></i> --}}
                {{-- <input type="text" placeholder="Search"> --}}
            {{-- </div> --}}
            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Daftar</a>
            @endguest
            @auth
                <a href="{{ route('user.dashboard') }}">Dashboard</a>
                <img src="{{ asset('images/1720466663.jpg') }}" alt="Profil" class="profil">
            {{-- <a href=""><div><i class="bi bi-github btn-chat"></i></div></a> --}}
            @endauth
        </aside>
        {{-- <a href=""><div><i class="bi bi-github btn-chat"></i></div></a> --}}
    </header>
