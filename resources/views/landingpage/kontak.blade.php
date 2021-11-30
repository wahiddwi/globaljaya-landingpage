@extends('landingpage.layout')
@section('content')
    <div class="bg-kontak"></div>
    <div class="row container kontakkami mx-auto">
        <div class="img-kontak col-md-5">
            <img src="{{ asset('assets/kontak.svg') }}" alt="" style="width: 100%; height: 350px;">
        </div>
        <form class="kontak col-md-7" action="{{ route('user.kontak.store') }}" method="post">
            @csrf
            @if (session('message'))
                <div class="alert alert-success alert-dismissible show-fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <h4>Kontak Kami</h4>
            <hr>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" @error('email')
                class="text-danger"
            @enderror>Email address @error('email')
                | {{ $message }}
            @enderror</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 500px;">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" @error('message')
                class="text-danger"
            @enderror>Your Message @error('message')
            | {{$message}}
            @enderror</label>
            <textarea type="text" name="message" class="form-control" style="height: 100px; width: 500px;"></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
@endsection
