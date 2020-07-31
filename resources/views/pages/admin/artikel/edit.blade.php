@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Ubah Barang</strong>
        <small>{{ $item->name }}</small>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('admin-artikels.update', $item->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="title" class="form-control-label">Judul</label>
            <input  type="text"
                    name="title" 
                    value="{{ old('title') ? old('title') : $item->title }}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('title') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="content" class="form-control-label">Isi Artikel</label>
            <textarea name="content" 
                      class="ckeditor form-control @error('content') is-invalid @enderror">{{ old('content') ? old('content') : $item->content }}</textarea>
            @error('content') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="category_id" class="form-control-label">Judul Artikel</label>
            <select name="category_id"
                    class="form-control @error('category_id') is-invalid @enderror">
                  <option value="{{ $item->category_id }}">Jangan Ubah</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
            @error('category_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="author" class="form-control-label">Penulis</label>
            <input  type="text"
                    name="author" 
                    value="{{ old('author') ? old('author') : $item->author }}" 
                    class="form-control @error('author') is-invalid @enderror"/>
            @error('author') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Ubah Artikel
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection