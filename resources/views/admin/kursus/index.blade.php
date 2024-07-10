@include('admin.partials.sidebar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Daftar Kursus</h1>
                    <div class="table-responsive small">
                        <a href="{{ route('kursus.create') }}" class="btn btn-primary mb-2"><i class="bi bi-plus-circle"></i>Tambah Kursus</a>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Judul Kursus</th>
                              <th scope="col">Image</th>
                              <th scope="col">Kategori</th>
                              <th scope="col">Harga</th>
                              <th scope="col">Deskripsi</th>
                              {{-- <th scope="col">User</th> --}}
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Judul Kursus</th>
                              <th scope="col">Image</th>
                              <th scope="col">Kategori</th>
                              <th scope="col">Harga</th>
                              <th scope="col">Deskripsi</th>
                              {{-- <th scope="col">User</th> --}}
                              <th scope="col">Action</th>
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach ($kursus as $kursus)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kursus->judul }}</td>
                                <td><img src="{{ asset($kursus->img) }}" alt="{{ $kursus->judul }}" width="100px" height="100px" style="object-fit:cover;"></td>
                                <td>{{ $kursus->kategori }}</td>
                                <td>Rp. {{ $kursus->harga }}</td>
                                {{-- <td>{{ $kursus->instruktur_id }}</td> --}}
                                <td>{{ $kursus->deskripsi }}</td>
                                {{-- <td>{{ $kursus->img }}</td> --}}
                                <td class="d-flex">
                                    <a href="{{ route('kursus.show', $kursus->id) }}"><button class="btn btn-primary"><i class="fa-solid fa-info"></i></button></a>
                                    <a href="{{ route('kursus.edit', $kursus->id) }}"><button class="btn btn-primary btn-sm mr-1"><i class="fa-solid fa-pen"></i></button></a>
                                    <form action="{{ route('kursus.destroy', $kursus->id) }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin!?')"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
                      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                      <script>
                        // $(document).ready(function() {
                        //     $('#dataTable').DataTable();
                        // });
                        new DataTable('#dataTable');
                      </script>
                </div>
                <!-- /.container-fluid -->
@include('admin.partials.footer')
