@include('admin.partials.sidebar')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $modul->judul }}</h5>
            <p class="card-text">{!! $modul->content !!}</p>
            <a href="{{ route('kursus.show', $course->id) }}" class="btn btn-primary">Kembali Ke Detail Kursus</a>
        </div>
    </div>
</div>

@include('admin.partials.footer')
