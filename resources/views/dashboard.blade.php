@extends("layouts.app")

@section("contents")

<!-- Content Row -->
<div class="row">

    <!-- Jumlah Siswa -->
    <div class="col-xl-4 col-md-6 mb-10">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="fs-2 font-weight-bold text-primary text-uppercase mb-2">
                            Jumlah Siswa</div>
                        <div class="h1 mb-1 font-weight-bold text-gray-800">{{ $jumlahSiswa }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jumlah Kelas -->
    <div class="col-xl-4 col-md-6 mb-10">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col mr-2">
                        <div class="fs-2 font-weight-bold text-info text-uppercase mb-2">Jumlah Kelas
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p class="mb-1"><strong>VIIIA:</strong> <br> {{ $kelasVIIIA }} siswa</p>
                                <p class="mb-1"><strong>VIIIB:</strong> <br> {{ $kelasVIIIB }} siswa</p>
                            </div>
                            <div class="col-5">
                                <p class="mb-1"><strong>VIIIC:</strong> <br> {{ $kelasVIIIC }} siswa</p>
                                <p class="mb-1"><strong>VIIID:</strong> <br> {{ $kelasVIIID }} siswa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto py-3">
                        <i class="fas fa-chalkboard-teacher fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
    });
</script>
@endif

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Gagal!',
        text: '{{ session('error') }}',
        showConfirmButton: true
    });
</script>
@endif
