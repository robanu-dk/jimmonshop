@extends('layouts.main')

@section('container')

    <div class="container" style="padding-top: 100px;">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div align='center'>
            <div class="mb-5">
                <h1 class="title">{{ $title }} BUMJ JIMM FST Universitas Airlangga</h1>
            </div>
        </div>

        @if ($events->count())
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src={{ asset($events[0]->image) }} class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="min-height: 90%;">
                            <h5 class="card-title fs-2">{{ $events[0]->nama_event }}</h5>
                            <div class="text-muted">Sisa kuota: {{ $events[0]->kuota - $events[0]->registerEvent->count() }}</div>
                            <p class="card-text">
                                <h4 style="padding-top: 20px">Pemateri: {{ $events[0]->pemateri }}</h4><br>
                                Pelaksanaan:<br>
                                Tanggal: {{ $events[0]->tanggal }} <br>
                                Waktu: {{ $events[0]->waktu }} <br>
                                Lokasi: {{ $events[0]->location }} <br><br>
                                Benefit: <br>
                                {!! $events[0]->benefits !!} <br>
                                Contact Person: {{ $events[0]->admin->kontak }}({{ $events[0]->admin->name }})
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated {{ $events[0]->created_at->diffForHumans() }}</small></p>
                        </div>
                        <div class="text-end" style="padding-right: 5%; padding-bottom: 10%">
                            <a href="/register+event/{{ $events[0]->slug }}" class="btn btn-success
                                @if(!($events[0]->registerEvent->count() < $events[0]->kuota))
                                    disabled
                                @endif
                                @if($events[0]->tanggal <= date("Y-m-d"))
                                    @if($events[0]->tanggal == date("Y-m-d") && $events[0]->waktu <= date('H:i:s'))
                                    disabled
                                    @elseif($events[0]->tanggal < date("Y-m-d"))
                                        disabled
                                    @endif
                                @endif">Register</a>
                        </div>
                    </div>
                </div>
            </div>

        @foreach ($events->skip(1) as $event)
        <div class="card mb-3" style="width: 900px; max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4" style="width: 200px">
                    <img src={{ asset($event->image) }} class="img-fluid rounded-start" alt="poster-kajian">
                </div>
                <div class="col-md-9">
                    <div class="card-body" style="min-height: 80%;">
                        <h5 class="card-title">{{ $event->nama_event }}</h5>
                        <p class="card-text">
                            <h5>Pemateri: {{ $event->pemateri }}</h5>
                            Tanggal: {{ $event->tanggal }} <br>
                            Waktu: {{ $event->waktu }}
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated {{ $event->created_at->diffForHumans() }}</small></p>
                    </div>
                    <div class="text-end" style="padding-right: 10px; padding-bottom: 10px">
                        <a href="/events/{{ $event->slug }}" class="btn btn-primary">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div style="width: 50%">
            {{ $events->links() }}
        </div>

        @else
        <h1>Events not found!!!</h1>
        @endif
    </div>
@endsection
