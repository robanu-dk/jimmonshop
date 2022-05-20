@extends('dashboard.layouts.main')

@section('content')
    <div class="content" style=" padding-bottom: 40px" align='center'>
        <div class="card" style="width: 70%;  text-align: center">
            <div align="left" style="padding: 10px">
                <a href="/dashboard/events" class="btn btn-success"><img src={{ asset('feather/arrow-left.svg') }} alt="icon-back">Back to all events</a>
                <a href="/dashboard/events/{{ $event->slug }}/edit" class="btn btn-warning"><img src={{ asset('feather/edit.svg') }} alt="icon-edit">Edit</a>
                <form action="/dashboard/events/{{ $event->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><img src={{ asset('feather/x-circle.svg') }} alt="icon-delete">Delete</button>
                </form>
            </div>
            <div style="padding-top: 20px; font-size: 20px"><b>{{ $event->nama_event }}</b></div>
            <div class="image" style="text-align: center; padding-top: 30px">
                <img style="max-width: 450px;" src={{ asset($event->image) }} class="card-img-top" alt="poster-kajian">
            </div>
            <div class="card-body" style="text-align: left">
              <p class="card-text">
                <h4 style="padding-top: 20px">Pemateri: {{ $event->pemateri }}</h4><br>
                Pelaksanaan:<br>
                Tanggal: {{ $event->tanggal }} <br>
                Waktu: {{ $event->waktu }} <br>
                Lokasi: {{ $event->location }} <br><br>
                Benefit: <br>
                {!! $event->benefits !!} <br>
                Admin: {{ $event->admin->kontak }}({{ $event->admin->name }})
              </p>
            </div>
            <div class="text-end" style="padding: 20px">
                <a href="#" class="btn btn-primary disabled">Check Partisipant</a>
            </div>
          </div>
    </div>
@endsection
