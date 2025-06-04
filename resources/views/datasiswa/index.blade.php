<style>
    .custom-placeholder::placeholder {
        font-size: 14px;
        color: #6c757d; /* opsional: warna placeholder */
    }
</style>

@extends("layouts.app")

@section("contents")

<div class="d-flex justify-content-center align-items-center mb-3 flex-wrap gap-5">

    <form action="{{ route('datasiswa.index') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" name="search" value="{{ request('search') }}"
            class="form-control border-1 small custom-placeholder" placeholder="Cari Nama, Kelas, atau Status..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>


    

</div>

<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Progres</th>   
                         <th>Status</th>                   
                    </tr>
                </thead>
                
                <tbody>
                @foreach($data as $index => $item)
                @php
                    $total = 4;
                    $selesai = 0;
                    if ($item->kuis1) $selesai++;
                    if ($item->kuis2) $selesai++;
                    if ($item->kuis3) $selesai++;
                    if ($item->evaluasi) $selesai++;
                    $persen = ($selesai / $total) * 100;
                @endphp

                    {{-- @foreach ($data as $index => $item) --}}
                    <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>

                    <td>
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $persen }}%;" aria-valuenow="{{ $persen }}" aria-valuemin="0" aria-valuemax="100">
                                {{ round($persen) }}%
                            </div>
                        </div>
                    </td>
                    <td>
                        @if($persen == 100)
                            <span class="badge bg-success text-white">Selesai</span>
                        @else
                            <span class="badge bg-danger text-white">Belum</span>
                        @endif
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



@endsection