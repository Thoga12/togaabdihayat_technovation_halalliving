@extends('partials.main')

@section('title', 'Detail Kelas Page')
@section('body')
<section class="detail-kursus">
    <aside>
        <img src="{{ asset($kursus->img) }}" alt="">
        <aside>
            <h1>{{ $kursus->judul }} </h1>
            <p>{{ $kursus->kategori }}</p>
        </aside>
    </aside>

    <aside class="card-aside">
        <a href="{{ route('transactions.index') }}" class="learning-now">Belajar Sekarang</a>
        <a href="" class="a">Informasi Kelas</a>
        <a href="" class="a">Lihat Materi</a>
    </aside>
</section>
<section class="deskripsi-kursus">
    <h3>Deskripsi</h3>
    <p>{{ $kursus->deskripsi }}</p>
</section>
@endsection
