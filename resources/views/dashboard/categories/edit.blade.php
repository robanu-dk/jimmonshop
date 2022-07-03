@extends('dashboard.layouts.main')

@section('content')
    <div class="content" style="padding-bottom: 40px">
        <div class="col-lg-8" style="padding-bottom: 10px">
            <form method="POST" action="/dashboard/categories/{{ $category->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required value="{{ old('nama_kategori', $category->nama_kategori) }}">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
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
                            @if (old('admin_id',$category->admin_id) == $admin->id)
                                <option value={{ $admin->id }} selected>{{ $admin->name }}</option>
                            @else
                                <option value={{ $admin->id }}>{{ $admin->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="hidden" name="oldImage" value="{{ $category->image }}">
                    @if ($category->image)
                        <img src="{{ asset($category->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                 @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Note (Keterangan)</label>
                    <input class="@error('keterangan') is-invalid @enderror" id="keterangan" type="hidden" name="keterangan" required value="{{ old('keterangan', $category->keterangan) }}">
                    <trix-editor input="keterangan" style="background-color: white"></trix-editor>
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>

@endsection
