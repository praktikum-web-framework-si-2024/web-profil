@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <form action="{{ url('/form') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your nama">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection