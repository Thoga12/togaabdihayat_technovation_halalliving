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


        <form action="{{ route('kursus.update', $kursus->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $kursus->judul) }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori:</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori', $kursus->kategori) }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea id="deskripsi" class="form-control" name="deskripsi" required>{{ old('deskripsi', $kursus->deskripsi) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $kursus->harga) }}">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>
            @if($kursus->img)
                <img src="{{ asset($kursus->img) }}" alt="{{ $kursus->judul }}" width="100">
            @endif

            <div class="mb-3" >
            <label for="visibility" class="form-label">Visibility:</label>
                <select id="visibility" name="visibility" class="form-control" required>
                    <option value="public" {{ $kursus->visibility == 'public' ? 'selected' : '' }}>Public</option>
                    <option value="private" {{ $kursus->visibility == 'private' ? 'selected' : '' }}>Private</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Update Kursus</button>
        </form>
    </div>
@include('admin.partials.footer')

