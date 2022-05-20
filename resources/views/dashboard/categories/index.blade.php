@extends('dashboard.layouts.main')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-11">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 15%">Name of Category</th>
                <th scope="col" style="width: 20%">Admin</th>
                <th scope="col" style="width: 50%">Note</th>
                <th scope="col" style="text-align: center; width: *">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $ca)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $ca->nama_kategori }}</td>
                        <td>{{ $ca->admin->name }}</td>
                        <td>{!! $ca->keterangan !!}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $ca->slug }}" class="badge bg-info"><img src={{ asset('feather/eye.svg') }} alt=""></a>
                            <a href="/dashboard/categories/{{ $ca->slug }}/edit" class="badge bg-warning"><img src={{ asset('feather/edit.svg') }} alt=""></a>
                            <form action="/dashboard/categories/{{ $ca->slug }}" method="POST" class="d-inline">
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
