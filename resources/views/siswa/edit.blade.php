<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">Ubah Data Siswa</h2>

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PATCH')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $siswa->name }}" placeholder="Masukkan nama siswa" required>
            </div>

            <div class="mb-3">
                <label for="NIS" class="form-label">NIS:</label>
                <input type="text" name="NIS" id="NIS" class="form-control" value="{{ $siswa->NIS }}" placeholder="Masukkan NIS" required>
            </div>

            <div class="mb-3">
                <label for="rayon_id" class="form-label">Rayon:</label>
                <select name="rayon_id" id="rayon_id" class="form-control" required>
                    <option value="" disabled>Pilih Rayon</option>
                    @foreach ($rayons as $rayon)
                        <option value="{{ $rayon->id }}" {{ $siswa->rayon_id == $rayon->id ? 'selected' : '' }}>
                            {{ $rayon->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="rombel" class="form-label">Rombel:</label>
                <input type="text" name="rombel" id="rombel" class="form-control" value="{{ $siswa->rombel }}" placeholder="Masukkan rombel" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Ubah Data</button>
            </div>
        </form>
    </div>
</body>
</html>
