<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Rayon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
    @if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('deleted'))
        <div class="alert alert-danger">{{ Session::get('deleted') }}</div>
    @endif

    <h1 class="mb-4">Data Rayon</h1>
    <div>
        <a href="{{ route('siswa.index') }}" class="btn btn-success mb-3">data siswa</a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Rayon</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rayons as $rayon)
                <tr>
                    <td>{{ $rayon->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('rayon.edit', $rayon->id) }}" class="btn btn-primary btn-sm me-2">Edit</a>
                        <button class="btn btn-danger btn-sm" onclick="showModal('{{ $rayon->id }}', '{{ $rayon->name }}')">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('rayon.create') }}" class="btn btn-success mb-3">+ Tambah</a>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="form-delete-rayon" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Rayon <strong id="name-rayon"></strong></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data rayon <strong id="name-rayon"></strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showModal(id, name) {
            document.getElementById('form-delete-rayon').action = '/rayon/' + id;
            document.getElementById('name-rayon').textContent = name;
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
        }
    </script>
</body>
</html>
