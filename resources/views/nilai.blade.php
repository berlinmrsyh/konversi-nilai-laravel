<!DOCTYPE html>
<html>

<head>
    <title>Hasil Konversi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Hasil Konversi Nilai Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nilai Akhir</th>
                    <th>Nilai Huruf</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $na }}</td>
                    <td>{{ $nh }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
