@include('admin.partials.sidebar')
                <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- /.container-fluid -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('kursus.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="judul" class="form-label">Judul Kursus</label>
                      <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul') }}">
                    </div>
                    @error('judul')
                    <div class="invalid-feedabck">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                      <label for="kategori" class="form-label">Kategori</label>
                      <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required value="{{ old('kategori') }}">
                    </div>
                    @error('kategori')
                    <div class="invalid-feedabck">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                      <label for="harga" class="form-label">Harga (Opsional)</label>
                      <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
                    </div>
                    @error('harga')
                    <div class="invalid-feedabck">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="60" rows="6" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi') }}</textarea>
                    </div>
                    @error('deskripsi')
                    <div class="invalid-feedabck">
                      {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img">
                    </div>
                    @error('img')
                        <div class="invalid-feedabck">
                            {{ $message }}
                        </div>
                    @enderror
                    <div>
                        <label for="visibility">Pengaturan Privasi:</label>
                        <select name="visibility" id="visibility" required>
                            <option value="public">Publik</option>
                            <option value="subscribers">Hanya untuk yang berlangganan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Kursus</button>
                </form>
            </div>
@include('admin.partials.footer')
