@extends('dashboard.layouts.main')

@section('content')
    <div class="table-responsive col-lg-11 caption-top" style="padding-bottom: 20px">
        <caption>List of events</caption>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Event</th>
                <th scope="col" style="width: 25%">Speaker</th>
                <th scope="col" style="width: 10%">Date</th>
                <th scope="col" style="width: 10%">Time</th>
                <th scope="col" style="width: 15%">Location</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="table-responsive col-lg-11 caption-top" style="padding-bottom: 20px">
        <caption>List of categories</caption>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 15%">Name of Category</th>
                <th scope="col" style="width: 20%">Admin</th>
                <th scope="col" style="width: 50%">Note</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $ca)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $ca->nama_kategori }}</td>
                        <td>{{ $ca->admin->name }}</td>
                        <td>{!! $ca->keterangan !!}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    <div class="table-responsive col-lg-11 caption-top" style="padding-bottom: 40px">
        <caption>List of products</caption>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Product</th>
                <th scope="col" style="width: 25%">Description</th>
                <th scope="col" style="width: 10%">Category</th>
                <th scope="col" style="width: 10%">Price</th>
                <th scope="col" style="width: 15%">Stock</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $pr)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pr->nama_produk }}</td>
                        <td>{!! $pr->deskripsi !!}</td>
                        <td>{{ $pr->kategori->nama_kategori }}</td>
                        <td>{{ $pr->harga }}</td>
                        <td>{{ $pr->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
