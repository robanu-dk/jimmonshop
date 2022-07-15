@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px;" align="center">
        <div class="card" style="width: 70%;">
            <div class="fs-2" style="padding-top: 20px"><b>{{ $event->nama_event }}</b></div>
            <div class="image" style="text-align: center; padding-top: 30px;">
                <img style="max-width: 450px;" src={{ asset($event->image) }} class="card-img-top" alt="poster-kajian">
            </div>
            <div class="card-body" style="padding-left: 15%; text-align: left; width: 90%">
              <p class="card-text">
                <div class="text-primary" style="padding-top: 20px">Sisa kuota: {{ $event->kuota - $event->registerEvent->count() }}</div>
                <h4>Pemateri: {{ $event->pemateri }}</h4><br>
                Pelaksanaan:<br>
                Tanggal: {{ $event->tanggal }} <br>
                Waktu: {{ $event->waktu }} <br>
                Lokasi: {{ $event->location }} <br><br>
                Benefit: <br>
                {!! $event->benefits !!} <br>
                Admin: {{ $event->admin->kontak }}({{ $event->admin->name }})
              </p>
            </div>
            <table>
                <tr>
                    <td class="text-left" style="width: 50%; padding-left: 20px; padding-bottom: 20px">
                        <a href="/events" class="btn btn-danger">Back</a>
                    </td>
                    <td class="text-end" style="width: auto; padding-right: 20px; padding-bottom: 20px">
                        <a href="/register+event/{{ $event->slug }}" class="btn btn-success
                            @if(!($event->registerEvent->count() < $event->kuota))
                            disabled
                            @endif
                            @if($event->tanggal <= date("Y-m-d"))
                                @if($event->tanggal == date("Y-m-d") && $event->waktu <= date('H:i:s'))
                                    disabled
                                @elseif($event->tanggal < date("Y-m-d"))
                                    disabled
                                @endif
                            @endif">Register</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
