@extends('dashboard.layouts.main')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Event's Name</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Location</th>
        <th scope="col">Detail</th>
      </tr>
    </thead>
    <tbody>
        @foreach (auth()->user()->registerEvent as $regisEvent)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $events->find($regisEvent->event_id)->nama_event }}</td>
            <td>{{ $events->find($regisEvent->event_id)->tanggal }}</td>
            <td>{{ $events->find($regisEvent->event_id)->waktu }}</td>
            <td>{{ $events->find($regisEvent->event_id)->location }}</td>
            <td><a class="btn btn-primary" href="/dashboard/my/register_event/{{ $events->find($regisEvent->event_id)->id }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
