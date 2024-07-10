@include('admin.partials.sidebar')
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Tambah Modul untuk Kursus: {{ $course->judul }}</h1>
        <form action="{{ route('kursus.modul-kursus.store', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="kursus_id" value="{{ $course->id }}">
            <div>
                <label for="judul" class="form-label">Judul Modul</label>
                <input type="text" class="form-control" name="judul" id="judul" required>
            </div>
            <div class="">
                <label for="content" class="form-label">Konten</label>
                {{-- @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror --}}
                <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                <textarea id="summernote" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="content" class="form-control" required></textarea>
            </div>
            {{-- <div>
                <label for="file_path" class="form-label">Upload Materi</label>
                <input type="file" name="file_path" class="form-control" id="file_path" required>
            </div> --}}
            <button type="submit" class="btn btn-primary mt-3">Tambah Modul</button>
        </form>
        <a href="{{ route('kursus.show', $course->id) }}" class="btn btn-primary mt-3">Kembali ke Detail Kursus</a>
        {{-- <a href="{{ route('kursus.show', $course->id) }}"><button class="btn btn-primary"><i class="fa-solid fa-info"></i></button></a> --}}
    </div>
    <script>
         $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Masukan Teks',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@include('admin.partials.footer')
