<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Rayon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">

    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">Ubah Data Rayon</h2>
        <form action="{{ route('rayon.update', $rayon->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Rayon</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $rayon->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</body>
</html>
