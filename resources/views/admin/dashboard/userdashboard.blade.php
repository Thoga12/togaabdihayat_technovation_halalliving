<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard User</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header>
        <nav class="nav-dashboard">
            <a href="/"><h1>HalalLiving</h1></a>
            <img src="{{ asset('images/1720466663.jpg') }}" alt="Profil" class="profil" id="img">
            <form action="/logout" method="POST" class="logout-user" id='profil'>
                @csrf
                <button type="submit">Log Out</button>
            </form>
            {{-- <img src="" alt=""> --}}
        </nav>
    </header>
    <section class="banner-dashboard">
        @if(Auth::check())
            <h1>Selamat Datang <strong>{{ Auth::user()->name }}!</strong></h1>
            <p>Semoga Materi Yang Disediakan Berguna Bagi Anda</p>
            <aside>
                <h3>Status Langganan</h3>
                <div class="status-langganan">
                    <p>Anda Sudah Melakukan Langganan</p>
                </div>
            </aside>
        @endif
    </section>
    <section class="aktivitas">
        <div class="container-aktivitas">
            <h3><i class="fa-solid fa-book" style="margin-right:10px;"></i>Aktivitas Belajar</h3>
            <div class="container-card-aktivitas">
                <div class="card-aktivitas">
                    <h5>Status</h5>
                    <h3>Judul Kelas Yang Dipelajari</h3>
                </div>
            </div>
        </div>
        <div class="container-aktivitas">
            <h3><i class="fa-solid fa-coins" style="margin-right:10px;"></i>Zakat Dan Donasi</h3>
            <div class="container-card-aktivitas">
                <div class="card-aktivitas">
                    <h5>Status</h5>
                    <h3>Judul Kelas Yang Dipelajari</h3>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
