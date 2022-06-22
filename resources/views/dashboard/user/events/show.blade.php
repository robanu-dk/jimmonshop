@extends('dashboard.layouts.main')

@section('content')

    <div class="content" style=" padding-bottom: 40px" align='center'>
        <div class="card" style="width: 70%;  text-align: center">
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
                Admin: <a style="text-decoration: none" href="{{ 'http://wa.me/' .  $event->admin->kontak}}"><i class="bi bi-whatsapp"> </i>{{ $event->admin->kontak }}({{ $event->admin->name }})</a>
            </p>
            </div>
        </div>
    </div>

@endsection
