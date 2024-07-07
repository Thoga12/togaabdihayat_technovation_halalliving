@extends('partials.main')

@section('title', 'Pendidikan Page')
@section('body')
<section class="title-daftar-kursus">
    <h1>Pendidikan Halal</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ratione minus similique!</p>
</section>
<section class="daftar-kursus">
    <div class="search-kursus">
        <div class="tipe-kelas">
            <label for="tipeKelas">Tipe Kursus</label>
            <select name="tipeKelas" id="tipeKelas">
                <option value="gratis">Semua Kursus</option>
                <option value="gratis">Gratis</option>
                <option value="berbayar">Berbayar</option>
            </select>
        </div>
        <div class="search">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search">
        </div>
    </div>
        <div class="container-card-kursus">
            <div class="card-kursus">
                <div class="header-card">
                    <img src= "{{ asset('images/background.png') }}" alt="Judul Kursus">
                    <aside>
                        <h5>Judul Kursus Pendidikans</h5>
                        <p>Rp. 12.000,00</p>
                    </aside>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Molestiae alias accusamus tenetur officiis, doloribus quia dicta nihil? Porro,
                    cumque voluptas?
                </p>
            </div>
            <div class="card-kursus">
                <div class="header-card">
                    <img src= "{{ asset('images/background.png') }}" alt="Judul Kursus">
                    <aside>
                        <h5>Judul Kursus Pendidikans</h5>
                        <p>Rp. 12.000,00</p>
                    </aside>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Molestiae alias accusamus tenetur officiis, doloribus quia dicta nihil? Porro,
                    cumque voluptas?
                </p>
            </div>
            <div class="card-kursus">
                <div class="header-card">
                    <img src= "{{ asset('images/background.png') }}" alt="Judul Kursus">
                    <aside>
                        <h5>Judul Kursus Pendidikans</h5>
                        <p>Rp. 12.000,00</p>
                    </aside>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Molestiae alias accusamus tenetur officiis, doloribus quia dicta nihil? Porro,
                    cumque voluptas?
                </p>
            </div>
            <div class="card-kursus">
                <div class="header-card">
                    <img src= "{{ asset('images/background.png') }}" alt="Judul Kursus">
                    <aside>
                        <h5>Judul Kursus Pendidikans</h5>
                        <p>Rp. 12.000,00</p>
                    </aside>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Molestiae alias accusamus tenetur officiis, doloribus quia dicta nihil? Porro,
                    cumque voluptas?
                </p>
            </div>
        </div>
    </section>
@endsection



