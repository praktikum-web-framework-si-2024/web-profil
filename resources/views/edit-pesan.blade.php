@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <h1 class="mb-3">Edit Pesan</h1>

        <form action="{{ route('pesan.update', ['id' => $pesan->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="name" placeholder="Enter your nama" value="{{ $pesan->name }}">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ $pesan->email }}">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="message" rows="3">{{ $pesan->message }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection