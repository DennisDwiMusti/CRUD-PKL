@extends('tempaltes.app', ['title' => 'buat data siswa'])

@section('content-dinamis')
    <div class="container mt-5">
        <div card>
            <div class="card-body">
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    @if (Session::get('failed'))
                    <div class="alert alert-danger my-2"> {{Session::get('failed')}}</div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                            <ol>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ol>
                    </div>
                    @endif
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">Nama : </label>
                        <div class="col-md-8">
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NIS" class="col-md-4 col-form-label">NIS : </label>
                        <div class="col-md-8">
                            <input type="text" name="NIS" id="NIS" class="form-control" value="{{ old('NIS') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rayon" class="col-md-4 col-form-label">Rayon : </label>
                        <div class="col-md-8">
                            <input type="text" name="rayon" id="rayon" class="form-control" value="{{ old('rayon') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rombel" class="col-md-4 col-form-label">Rombel : </label>
                        <div class="col-md-8">
                            <input type="text" name="rombel" id="rombel" class="form-control" value="{{ old('rombel') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-block btn-success">Kirim Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
