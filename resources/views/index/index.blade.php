@extends('partials.main')

@section('title', 'HalalLiving Home Page')
@section('body')
    <section class="container-banner">
        <div class="banner">
            <h1><span>Hidup Halal, Pilihan Kita,</span> Platform terpercaya untuk gaya hidup halal
            </h1>
            <img src="{{ asset('images/banner1.png') }}" alt="HalalLiving">
        </div>
        @guest
            <div class="navigasi">
                <a href="{{ route('login') }}">Gabung Sekarang</a>
                <a href="#kelas">Pelajari Lebih Lanjut</a>
            </div>
        @endguest
    </section>

    {{-- <section class="berita-terbaru">
        <h1>Berita Terbaru</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, expedita.</p>
        <div class="container-card">

            <div class="card">
                <img src="{{ asset('images/berita.jpg') }}" alt="Berita Terbaru">
                <div class="deskripsi-card">
                    <p>12 Oktober 2200</p>
                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi eum ratione omnis iure mollitia debitis voluptatem explicabo accusantium sint porro.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/berita.jpg') }}" alt="Berita Terbaru">
                <div class="deskripsi-card">
                    <p>12 Oktober 2200</p>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi eum ratione omnis iure mollitia debitis voluptatem explicabo accusantium sint porro.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/berita.jpg') }}" alt="Berita Terbaru">
                <div class="deskripsi-card">
                    <p>12 Oktober 2200</p>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi eum ratione omnis iure mollitia debitis voluptatem explicabo accusantium sint porro.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/berita.jpg') }}" alt="Berita Terbaru">
                <div class="deskripsi-card">
                    <p>12 Oktober 2200</p>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi eum ratione omnis iure mollitia debitis voluptatem explicabo accusantium sint porro.</p>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="pendidikan-halal" id="kelas">
        <h1>Pendidikan Halal</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nobis!</p>
        <div class="banner-pendidikan">
            <div class="deskripsi-banner-pendidikan">
                <h2>Lorem ipsum dolor sit amet consectetur</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est esse aliquid?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, iste?
                </p>
            </div>
            <img src="{{ asset('images/image.png') }}" alt="Banner Pendidikan">
        </div>
        <div class="container-card-pendidikan">
            @foreach ($kelas as $kelas)

            <div class="card-pendidikan">
                <img src="{{ $kelas->img }}" alt="{{ $kelas->judul }}">
                <div class="deskripsi-pendidikan">
                    <h5>{{ $kelas->judul }}</h5>
                    <p>{{ $kelas->deskripsi }}</p>
                </div>
            </div>
            @endforeach
            {{-- <div class="card-pendidikan">
                <img src="{{ asset('images/learning.png') }}" alt="Pemdidikan Halal">
                <div class="deskripsi-pendidikan">
                    <h5>Judul Pendidikan</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="card-pendidikan">
                <img src="{{ asset('images/learning.png') }}" alt="Pemdidikan Halal">
                <div class="deskripsi-pendidikan">
                    <h5>Judul Pendidikan</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="card-pendidikan">
                <img src="{{ asset('images/learning.png') }}" alt="Pemdidikan Halal">
                <div class="deskripsi-pendidikan">
                    <h5>Judul Pendidikan</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div> --}}
    </section>
    <section class="donasi">
        <h1>Zakat Dan Donasi</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, architectos</p>
        {{-- <div class="rukun-islam">
            <div class="icon">
                <img src="" alt="">
            </div>
        </div> --}}
        <div class="banner-donasi">
            <img src="{{ asset('images/learning.png') }}" alt="Banner Zakat Dan Donasi">
            <div class="deskripsi-donasi">
                <h2>Ayo Bantu Mereka Yang Membutuhkan Melaui Donasi Dan Zakat</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, ipsum</p>
                <aside>
                    <div class="card-testimoni-home">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, ipsum
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, earum
                        </p>
                    </div>
                    <div class="card-testimoni-home">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, ipsum
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, earum
                        </p>
                    </div>
                </aside>
                <a href="{{ route('register') }}">Donasi Sekarang</a>
            </div>
        </div>
    </section>
    <section class="komunitas">
        <h1>Diskusi Terkini</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, ratione!</p>
        <div class="container-card-komunitas">
            <div class="card-komunitas">
                <img src="{{ asset('images/learning.png') }}" alt="Diskusi Terpopuler">
                <div class="deskripsi-komunitas">
                    <h5>Judul Diskusi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="card-komunitas">
                <img src="{{ asset('images/learning.png') }}" alt="Diskusi Terpopuler">
                <div class="deskripsi-komunitas">
                    <h5>Judul Diskusi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="card-komunitas">
                <img src="{{ asset('images/learning.png') }}" alt="Diskusi Terpopuler">
                <div class="deskripsi-komunitas">
                    <h5>Judul Diskusi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="card-komunitas">
                <img src="{{ asset('images/learning.png') }}" alt="Diskusi Terpopuler">
                <div class="deskripsi-komunitas">
                    <h5>Judul Diskusi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
    </section>
@endsection
