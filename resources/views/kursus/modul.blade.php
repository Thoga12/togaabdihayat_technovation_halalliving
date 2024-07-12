@extends('partials.main')

@section('title', 'Langganan Page')
@section('body')

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet"> --}}
<section class="modul">
    {{-- <div class="container-modul">
        <h1 class="card-title">{{ $modul->judul }}</h1>
        <p class="card-text">{!! $modul->content !!}</p>
    </div> --}}
    <div class="container-fluid">
        {{-- <div class="card shadow mb-4"> --}}
            <div class="card-body">
                <h1 class="card-title">{{ $modul->judul }}</h1>
                <p class="card-text">{!! $modul->content !!}</p>
                <a href="{{ route('kursus.show', $course->id) }}" class="btn btn-primary">Kembali Ke Detail Kursus</a>
            </div>
        </div>
    </div>
    <aside class="list-modul">
        <ul>
            @foreach ($course->modules as $modul)
             <a href="{{ route('modul',["kursu" => $course->id, "modul_kursu" => $modul->id]) }}"><li>{{ $modul->judul }}</li></a>
            @endforeach
        </ul>
    </aside>
</section>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script> --}}
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
