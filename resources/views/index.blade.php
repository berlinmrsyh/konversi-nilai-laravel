<!DOCTYPE html>
<html>

<head>
    <title>Konversi Nilai Mahasiswa </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Konversi Nilai Mahasiwa </h2>
        <form method="post" action="{{ route('convert') }}">
            @csrf
            <div class="form-group">
                <label for="partisipasi">Masukkan Nilai Partisipasi:</label>
                <input type="text" class="form-control" id="partisipasi" name="partisipasi" value="{{ old('partisipasi') }}">
            </div>
            <div class="form-group">
                <label for="tugas">Masukkan Nilai Tugas:</label>
                <input type="text" class="form-control" id="tugas" name="tugas" value="{{ old('tugas') }}">
            </div>
            <div class="form-group">
                <label for="uts">Masukkan Nilai UTS:</label>
                <input type="text" class="form-control" id="uts" name="uts" value="{{ old('uts') }}">
            </div>
            <div class="form-group">
                <label for="uas">Masukkan Nilai UAS:</label>
                <input type="text" class="form-control" id="uas" name="uas" value="{{ old('uas') }}">
            </div>
            <button type="submit" class="btn btn-primary">Konversi</button>
        </form>
        @if ($errors->any())
        <div class="mt-4">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
</body>

</html>
