@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Konversi Nilai Mahasiswa UNESA</h1>
    <form action="{{ url('/konversi') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="partisipasi">Nilai Partisipasi:</label>
            <input type="number" class="form-control @error('partisipasi') is-invalid @enderror" id="partisipasi" name="partisipasi" placeholder="Masukkan nilai partisipasi" step="0.01">
            @error('partisipasi')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tugas">Nilai Tugas:</label>
            <input type="number" class="form-control @error('tugas') is-invalid @enderror" id="tugas" name="tugas" placeholder="Masukkan nilai tugas" step="0.01">
            @error('tugas')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="uts">Nilai UTS:</label>
            <input type="number" class="form-control @error('uts') is-invalid @enderror" id="uts" name="uts" placeholder="Masukkan nilai UTS" step="0.01">
            @error('uts')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="uas">Nilai UAS:</label>
            <input type="number" class="form-control @error('uas') is-invalid @enderror" id="uas" name="uas" placeholder="Masukkan nilai UAS" step="0.01">
            @error('uas')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Konversi Nilai</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Validasi tambahan untuk memastikan nilai desimal
        $("input[type='number']").on('input', function() {
            var value = $(this).val();
            if (!/^\d+(\.\d{1,2})?$/.test(value)) {
                $(this).addClass('is-invalid');
                $(this).parent().find('.text-danger').html('Nilai harus berupa angka desimal (misalnya, 85.5).');
            } else {
                $(this).removeClass('is-invalid');
                $(this).parent().find('.text-danger').html('');
            }

            // Validasi tambahan untuk memastikan nilai tidak lebih dari 100
            if (value > 100) {
                $(this).addClass('is-invalid');
                $(this).parent().find('.text-danger').html('Nilai tidak boleh lebih dari 100.');
            } else {
                $(this).removeClass('is-invalid');
                $(this).parent().find('.text-danger').html('');
            }
        });
    });
</script>
@endsection