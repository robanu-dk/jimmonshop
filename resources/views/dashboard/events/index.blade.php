@extends('dashboard.layouts.main')

@section('content')

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-11">
        <a href="/dashboard/events/create" class="btn btn-primary mb-3">Create new event</a>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Event</th>
                <th scope="col" style="width: 25%">Speaker</th>
                <th scope="col" style="width: 10%">Date</th>
                <th scope="col" style="width: 10%">Time</th>
                <th scope="col" style="width: 15%">Location</th>
                <th scope="col" style="text-align: center; width: *">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($events as $ev)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $ev->nama_event }}</td>
                        <td>{{ $ev->pemateri }}</td>
                        <td>{{ $ev->tanggal }}</td>
                        <td>{{ $ev->waktu }}</td>
                        <td>{{ $ev->location }}</td>
                        <td>
                            <a href="/dashboard/events/{{ $ev->slug }}" class="badge bg-info"><img src={{ asset('feather/eye.svg') }} alt=""></a>
                            <a href="/dashboard/events/{{ $ev->slug }}/edit" class="badge bg-warning"><img src={{ asset('feather/edit.svg') }} alt=""></a>
                            <form action="/dashboard/events/{{ $ev->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><img src={{ asset('feather/x-circle.svg') }} alt=""></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

@endsection
