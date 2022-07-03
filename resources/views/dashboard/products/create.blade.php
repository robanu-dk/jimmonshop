@extends('dashboard.layouts.main')

@section('content')
    <div class="content" style="padding-bottom: 40px">
        <div class="col-lg-8" style="padding-bottom: 10px">
            <form method="POST" action="/dashboard/products" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" required value="{{ old('nama_produk') }}">
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
                    <label for="kategori_id" class="form-label">Category</label> <br>
                    <select class="form-select" name="kategori_id" id="kategori_id">
                        @foreach ($categories as $category)
                            @if (old('kategori_id') == $category->id)
                                <option value={{ $category->id }} selected>{{ $category->nama_kategori }}</option>
                            @else
                                <option value={{ $category->id }}>{{ $category->nama_kategori }}</option>
                            @endif
                        @endforeach
                    </select>
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
                    <label for="jumlah" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required value="{{ old('jumlah') }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Price</label>
                    <input type="number" class="form-control" id="harga" name="harga" required value="{{ old('harga') }}">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Description (Deskripsi)</label>
                    <input class="@error('deskripsi') is-invalid @enderror" id="deskripsi" type="hidden" name="deskripsi" required value="{{ old('deskripsi') }}">
                    <trix-editor input="deskripsi" style="background-color: white"></trix-editor>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create Product</button>
            </form>
        </div>
    </div>

    {{-- <script>
        const nama_produk = document.querySelector('#nama_produk');
        const slug = document.querySelector('#slug');

        nama_produk.addEventListener('change', function() {
            fetch('/dashboard/event/checkSlug?nama_produk='+nama_produk.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script> --}}
@endsection
