@extends('dashboard.layouts.main')

@section('content')
    <div class="content" style="padding-bottom: 40px">
        <div class="col-lg-8" style="padding-bottom: 10px">
            <form method="POST" action="/dashboard/categories">
                @csrf
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required value="{{ old('nama_kategori') }}">
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
                    <input type="text" class="form-control" id="image" name="image" required value="{{ old('image') }}">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Note</label>
                    <input id="keterangan" type="hidden" name="keterangan" required value="{{ old('keterangan') }}">
                    <trix-editor input="keterangan" style="background-color: white"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary">Create Category</button>
            </form>
        </div>
    </div>

    {{-- <script>
        const nama_kategori = document.querySelector('#nama_kategori');
        const slug = document.querySelector('#slug');

        nama_kategori.addEventListener('change', function() {
            fetch('/dashboard/event/checkSlug?nama_kategori='+nama_kategori.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script> --}}
@endsection
