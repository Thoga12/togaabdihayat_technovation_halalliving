@include('admin.partials.sidebar')

<div class="container-fluid">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h1 class="h3 mb-4 text-gray-800">{{ $course->judul }}</h1>
                    <p>{{ $course->deskripsi }}</p>
                    <p><strong>Kategori:</strong> {{ $course->kategori }}</p>
                    <p><strong>Harga:</strong> Rp. {{ $course->harga }}</p>
                    <p><strong>Tipe:</strong> Rp. {{ $course->visibility }}</p>

                    <a href="{{ route('kursus.index') }}" class="btn btn-primary mt-2"><i class="bi bi-plus-circle"></i>Kembali Ke Daftra Modul</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h2>Modul</h2>
                    <ol class="list-group list-group-numbered">
                        @foreach($course->modules as $module)

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">{{ $module->judul }}</div>
                            {{ $module->deskripsi }}
                          </div>
                          <a href="{{ route('kursus.modul-kursus.show', ['kursu' => $course->id, 'modul_kursu' => $module->id]) }}) }}" class="badge text-bg-primary rounded-pill">Show</a>
                          {{-- <span class="badge text-bg-primary rounded-pill">14</span> --}}
                        </li>
                        @endforeach

                    </ol>
                    {{-- <ul>
                        @foreach($course->modules as $module)
                            <a href="{{ route('kursus.modul-kursus.show', ['kursu' => $course->id, 'modul_kursu' => $module->id]) }}) }}"><li>{{ $module->judul }}: {{ $module->deskripsi }}</li></a>
                        @endforeach
                    </ul> --}}
                    <a href="{{ route('kursus.modul-kursus.create', $course->id ) }}" class="btn btn-primary mt-2"><i class="bi bi-plus-circle"></i>Tambah Modul</a>
                    {{-- <a href="{{ route('modul.create', $course->id ) }}" class="btn btn-primary mb-2"><i class="bi bi-plus-circle"></i>Tambah Modul</a> --}}
                    {{-- <a href="/admin/kursus/modul/create/1" class="btn btn-primary mb-2"><i class="bi bi-plus-circle"></i>Tambah Modul</a> --}}
                </div>
            </div>
        </div>
    </div>

            {{-- <h2>Modul</h2>
            <ul>
                @foreach($course->modules as $module)
                    <a href="{{ route('kursus.modul-kursus.show', ['kursu' => $course->id, 'modul_kursu' => $module->id]) }}) }}"><li>{{ $module->judul }}: {{ $module->deskripsi }}</li></a>
                @endforeach
            </ul>
            <a href="{{ route('kursus.modul-kursus.create', $course->id ) }}" class="btn btn-primary mb-2"><i class="bi bi-plus-circle"></i>Tambah Modul</a>
            <h2>Quiz</h2>
            <ul>
                @foreach($course->quizzes as $quiz)
                    <li>{{ $quiz->title }}</li>
                @endforeach
            </ul>
        <div class="card-body"> --}}

    </div>
</div>
@include('admin.partials.footer')
