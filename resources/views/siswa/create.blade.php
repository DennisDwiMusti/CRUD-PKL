<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">Tambah Data Siswa</h2>

        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf

            @if (Session::get('failed'))
                <div class="alert alert-danger my-2">{{ Session::get('failed') }}</div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Masukkan nama siswa" required>
            </div>

            <div class="mb-3">
                <label for="NIS" class="form-label">NIS:</label>
                <input type="number" class="form-control @error('NIS') is-invalid @enderror" name="NIS" id="NIS" value="{{ old('NIS') }}" min="0" placeholder="Masukkan NIS" required>
                @error('NIS')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="rayon_id" class="form-label">Rayon:</label>
                <select name="rayon_id" id="rayon_id" class="form-control" required>
                    <option value="" disabled selected hidden>Pilih Rayon</option>
                    @foreach ($rayons as $rayon)
                        <option value="{{ $rayon->id }}">{{ $rayon->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="rombel" class="form-label">Rombel:</label>
                <input type="text" name="rombel" id="rombel" class="form-control" value="{{ old('rombel') }}" placeholder="Masukkan rombel" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Tambah Data</button>
            </div>
        </form>
    </div>
</body>
</html>
