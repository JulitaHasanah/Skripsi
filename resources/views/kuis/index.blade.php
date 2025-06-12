@extends("layouts.app")

@section("contents")

<div class="d-flex justify-content-center align-items-center mb-3 flex-wrap gap-4">

<!-- Filter Kuis dan Kelas -->
<form method="GET" action="{{ route('kuis.index') }}" class="form-inline mr-4" id="filterKuisKelasForm">
    <!-- Dropdown Kuis -->
    <label for="kuis" class="mr-2">Hasil:</label>
    <select name="kuis" id="kuis" class="form-control mr-2" onchange="document.getElementById('filterKuisKelasForm').submit()">
        <option value="kuis1" {{ request('kuis') == 'kuis1' ? 'selected' : '' }}>Kuis 1</option>
        <option value="kuis2" {{ request('kuis') == 'kuis2' ? 'selected' : '' }}>Kuis 2</option>
        <option value="kuis3" {{ request('kuis') == 'kuis3' ? 'selected' : '' }}>Kuis 3</option>
    </select>

    <!-- Dropdown Kelas -->
    <label for="kelas" class="mr-2">Kelas:</label>
    <select name="kelas" id="kelas" class="form-control mr-2" onchange="document.getElementById('filterKuisKelasForm').submit()">
        <option value="">Semua Kelas</option>
        <option value="VIIIA" {{ request('kelas') == 'VIIIA' ? 'selected' : '' }}>VIIIA</option>
        <option value="VIIIB" {{ request('kelas') == 'VIIIB' ? 'selected' : '' }}>VIIIB</option>
        <option value="VIIIC" {{ request('kelas') == 'VIIIC' ? 'selected' : '' }}>VIIIC</option>
        <option value="VIIID" {{ request('kelas') == 'VIIID' ? 'selected' : '' }}>VIIID</option>
    </select>
</form>

 <!-- Search -->
{{-- <form action="{{ route('kuis.index') }}" method="GET"
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

    <div class="input-group">
        <input type="text" name="search" value="{{ request('search') }}"
            class="form-control border-1 small" placeholder="Cari Data Nilai Siswa..."
            aria-label="Search" aria-describedby="basic-addon2">

        <input type="hidden" name="kuis" value="{{ request('kuis', 'kuis1') }}">
        <input type="hidden" name="kelas" value="{{ request('kelas', '') }}">

        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form> --}}

<form action="{{ route('kuis.index') }}" method="GET"
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
    id="searchForm">

    <div class="input-group">
        <input type="text" name="search" value="{{ request('search') }}"
            class="form-control border-1 small" placeholder="Cari Data Nilai Siswa..."
            aria-label="Search" aria-describedby="basic-addon2" id="searchInput">

        {{-- Jaga parameter kuis dan kelas tetap ada --}}
        <input type="hidden" name="kuis" value="{{ request('kuis', 'kuis1') }}">
        <input type="hidden" name="kelas" value="{{ request('kelas', '') }}">

        <div class="input-group-append">
            <span class="input-group-text bg-primary text-white">
                <i class="fas fa-search fa-sm"></i>
            </span>
        </div>
    </div>
</form>

<script>
    let timer;
    const searchInput = document.getElementById('searchInput');
    const searchForm = document.getElementById('searchForm');

    searchInput.addEventListener('input', function () {
        clearTimeout(timer);
        timer = setTimeout(() => {
            searchForm.submit();
        }, 400); // submit setelah 0.5 detik tidak mengetik
    });
</script>



    <a href="{{ route('kuis.downloadPDF', ['kuis' => request('kuis', 'kuis1'), 'kelas' => request('kelas')]) }}"
   class="btn btn-success" target="_blank">
   <i class="fas fa-download me-2"></i> Download PDF
   </a>


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