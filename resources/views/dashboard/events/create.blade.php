@extends('dashboard.layouts.main')

@section('content')
    <div class="content" style="padding-bottom: 40px">
        <div class="col-lg-8" style="padding-bottom: 10px">
            <form method="POST" action="/dashboard/events" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_event" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama_event" name="nama_event" required value="{{ old('nama_event') }}">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" required>
                @error('slug')
                   <div class="invalid-feedback">
                       {{ $message }}
                   </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="admin_id" class="form-label">Admin</label> <br>
                    <select class="form-select" name="admin_id" id="admin_id">
                        @foreach ($admins as $admin)
                            @if (old('admin_id') == $admin->id)
                                <option value={{ $admin->id }} selected>{{ $admin->name }}</option>
                            @else
                                <option value={{ $admin->id }}>{{ $admin->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                 @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
                </div>
                <div class="mb-3">
                    <label for="pemateri" class="form-label">Speaker</label>
                    <input type="text" class="form-control" id="pemateri" name="pemateri" required value="{{ old('pemateri') }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Date</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required value="{{ old('tanggal') }}">
                </div>
                <div class="mb-3">
                    <label for="waktu" class="form-label">Time</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" required value="{{ old('waktu') }}">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" required value="{{ old('location') }}">
                </div>
                <div class="mb-3">
                    <label for="kuota" class="form-label">Quota</label>
                    <input type="number" class="form-control" id="kuota" name="kuota" required value="{{ old('kuota') }}">
                </div>
                <div class="mb-3">
                    <label for="benefits" class="form-label">Benefits</label>
                    <input class="@error('benefits') is-invalid @enderror" id="benefits" type="hidden" name="benefits" required value="{{ old('benefits') }}">
                    <trix-editor input="benefits" style="background-color: white"></trix-editor>
                    @error('benefits')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create Event</button>
            </form>
        </div>
    </div>

    {{-- <script>
        const nama_event = document.querySelector('#nama_event');
        const slug = document.querySelector('#slug');

        nama_event.addEventListener('change', function() {
            fetch('/dashboard/event/checkSlug?nama_event='+nama_event.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script> --}}

@endsection
