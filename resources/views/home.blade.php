<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="background: url('{{ asset('img/bg.png') }}') no-repeat center center; background-size: cover;">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <h1 class="text-center ">Welcome To My Project</h1>
        <a href="{{ route('siswa.index') }}" class="btn btn-success mt-3">Masuk</a>
    </div>
</body>
</html>
