@extends('dashboard.layouts.main')

@section('content')

<table class="table table-stripped table-hover" style="width: 80%">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Institution</th>
        <th scope="col">Contact</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($partisipants as $partisipant)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $partisipant->nama_pendaftar }}</td>
          <td>{{ $partisipant->email }}</td>
          <td>{{ $partisipant->asal_instansi }}</td>
          <td>{{ $partisipant->noTelp }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
