<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Nilai</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #eee; }
        h2 { text-align: center; margin-bottom: 5px; }
        p { text-align: center; margin-top: 0; }
    </style>
</head>
<body>
    @php
        $kuisFormatted = 'Kuis ' . substr($kuis, -1);
        $kelas = request()->get('kelas');
    @endphp

    <h2>Laporan Nilai {{ $kuisFormatted }}{{ $kelas ? ' - Kelas ' . $kelas : '' }}</h2>
    <p>Dicetak pada: {{ date('d-m-Y H:i') }}</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Nilai</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $item)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $item->siswa->nama ?? '-' }}</td>
                    <td>{{ $item->siswa->kelas ?? '-' }}</td>
                    <td>{{ $item->nilai }}</td>
                    <td>{{ $item->waktu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
