@extends('templates.app', ['title' => 'Buat Data Siswa'])

@section('content-dinamis')

            <form action="{{ route('siswa.store') }}" method="POST" class="card justify-content-center p-5">
                @csrf
                @if (Session::get('failed'))
                    <div class="alert alert-danger my-2">{{ Session::get('failed') }}</div>
                @endif
                <div class="mb-3 row">
                    <label for="name" class="col-sm-3 col-form-label">Nama:</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Masukkan nama siswa" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="NIS" class="col-sm-3 col-form-label">NIS:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control @error('NIS') is-invalid @enderror" name="NIS" id="NIS" value="{{ old('NIS') }}" min="0" placeholder="Masukkan NIS" required>
                        @error('NIS')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="rayon_id" class="col-sm-3 col-form-label">Rayon:</label>
                    <div class="col-sm-9">
                        <select name="rayon_id" id="rayon_id" class="form-control" required>
                            <option value="" disabled selected hidden>Pilih Rayon</option>
                            @foreach ($rayons as $rayon)
                                <option value="{{ $rayon->id }}">{{ $rayon->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="rombel" class="col-sm-3 col-form-label">Rombel:</label>
                    <div class="col-sm-9">
                        <input type="text" name="rombel" id="rombel" class="form-control" value="{{ old('rombel') }}" placeholder="Masukkan rombel" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mt-3">Tambah Data</button>
                </div>
            </form>

@endsection
