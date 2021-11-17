@extends('landingpage.layout')
@section('content')
    <div class="bg-kontak"></div>
    <div class="row container kontakkami mx-auto">
        <div class="img-kontak col-md-5">
            <img src="{{ asset('assets/kontak.svg') }}" alt="" style="width: 100%; height: 350px;">
        </div>
        <form class="kontak col-md-7">
            <h4>Kontak Kami</h4>
            <hr>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 500px;">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Your Message</label>
            <input type="password" class="form-control" id="exampleInputPassword1" style="height: 100px; width: 500px;">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
@endsection