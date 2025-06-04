@extends("layouts.app")

@section("contents")

<div class="d-flex justify-content-center align-items-center mb-3 flex-wrap gap-4">

    <form method="GET" action="{{ route('kuis.index') }}" class="form-inline mr-4">
        <label for="kuis" class="mr-2">Hasil:</label>
        <select name="kuis" id="kuis" class="form-control mr-2">
            <option value="kuis1" {{ request('kuis') == 'kuis1' ? 'selected' : '' }}>Kuis 1</option>
            <option value="kuis2" {{ request('kuis') == 'kuis2' ? 'selected' : '' }}>Kuis 2</option>
            <option value="kuis3" {{ request('kuis') == 'kuis3' ? 'selected' : '' }}>Kuis 3</option>
        </select>

        <button type="submit" class="btn btn-primary">Tampilkan</button>
    </form>

    <!-- Topbar Search -->
    <form action="{{ route('kuis.index') }}" method="GET"
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        
        <div class="input-group">
            <input type="text" name="search" value="{{ request('search') }}"
                class="form-control border-1 small" placeholder="Cari Data Nilai Siswa..."
                aria-label="Search" aria-describedby="basic-addon2">

            {{-- Jaga parameter kuis tetap ada --}}
            <input type="hidden" name="kuis" value="{{ request('kuis', 'kuis1') }}">

            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>


    <form action="{{ route('kuis.download') }}" method="GET" class="form-inline">
        <input type="hidden" name="kuis" value="{{ request('kuis', 'kuis1') }}">
        <button type="submit" class="btn btn-success">
            <i class="fas fa-download"></i> Download
        </button>
    </form>

</div>


<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Nilai Kuis Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nilai</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($data as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->siswa->nama ?? '-' }}</td> {{-- asumsi nama siswa --}}
                        <td>{{ $item->siswa->kelas ?? '-' }}</td> {{-- asumsi kolom kelas --}}
                        <td>{{ $item->nilai }}</td>
                        <td>{{ $item->waktu }}</td>
                        <td>
                            <form>    
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center mt-3">
            <div>
                Menampilkan {{ $data->firstItem() }} - {{ $data->lastItem() }} dari total {{ $data->total() }} data
            </div>
            <div>
                @if ($data->onFirstPage())
                    <span class="btn btn-secondary btn-sm disabled">Previous</span>
                @else
                    <a href="{{ $data->previousPageUrl() }}" class="btn btn-primary btn-sm">Previous</a>
                @endif

                @if ($data->hasMorePages())
                    <a href="{{ $data->nextPageUrl() }}" class="btn btn-primary btn-sm">Next</a>
                @else
                    <span class="btn btn-secondary btn-sm disabled">Next</span>
                @endif
            </div>
        </div>
        </div>
    </div>
</div>



@endsection