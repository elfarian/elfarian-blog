@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Artikel</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('admin-artikels.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="title" class="form-control-label">Judul</label>
            <input  type="text"
                    name="title" 
                    value="{{ old('title') }}" 
                    class="form-control @error('title') is-invalid @enderror"/>
            @error('title') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="content" class="form-control-label">Isi Artikel</label>
            <textarea name="content" 
                      class="ckeditor form-control @error('content') is-invalid @enderror">{{ old('content')}}</textarea>
            @error('content') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="category_id" class="form-control-label">Judul Artikel</label>
            <select name="category_id"
                    class="form-control @error('category_id') is-invalid @enderror">
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
                    value="{{ old('author') }}" 
                    class="form-control @error('price') is-invalid @enderror"/>
            @error('author') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Artikel
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection