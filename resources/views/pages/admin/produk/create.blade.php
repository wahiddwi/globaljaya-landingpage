@extends('layouts.app')
@section('title', 'Tambah Produk')

@section('content')

    <div class="section-body">
        <div class="col-12 col-md col-lg-8">
            <form action="{{ route('admin.produk.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="title" class="font-weight-bolder">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" aria-describedby="emailHelp"
                    placeholder="Judul" value="{{ old('title') }}" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="image" class="font-weight-bolder">Gambar</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                    placeholder="Gambar">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </form>
        </div>
    </div>

@endsection
