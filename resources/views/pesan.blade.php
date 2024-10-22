@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row mt-5">
      <div class="col-12">
        <div class="d-flex items-center gap-3 mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z"/>
            <path fill="#000000" d="M20 2H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14l4 4v-20a2 2 0 0 0-2-2zm-2 14H6v-2h12v2zm0-4H6v-2h12v2zm0-4H6V6h12v2z"/>
          </svg>          
          <h1>Pesan Masuk</h1>
        </div>

        <!-- Form to submit a new message -->
        <form action="{{ route('pesan.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>

        <hr>

        <!-- Display all messages -->
        <ul class="list-group">
          @foreach($pesans as $pesan)
            <li class="list-group-item">
              <p>Dari <b>{{ $pesan->name }}</b> dengan email <b>{{ $pesan->email }}</b></p>
              <p>{{ $pesan->message }}</p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
