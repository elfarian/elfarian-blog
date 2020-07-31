@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Foto Barang</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('admin-gallery.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Judul Artikel</label>
            <select name="artikels_id"
                    class="form-control @error('artikels_id') is-invalid @enderror">
                @foreach ($artikels as $artikel)
                  <option value="{{ $artikel->id }}">{{ $artikel->title }}</option>
                @endforeach
            </select>
            @error('artikels_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="photo" class="form-control-label">Foto Artikel</label>
            <input  type="file"
                    name="photo" 
                    value="{{ old('photo') }}" 
                    accept="image/*"
                    required
                    class="form-control @error('photo') is-invalid @enderror"/>
            @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Foto Artikel
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection