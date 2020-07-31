@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Artikel</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('admin-category.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="category" class="form-control-label">Nama Kategori</label>
            <input  type="text"
                    name="category" 
                    value="{{ old('category') }}" 
                    class="form-control @error('category') is-invalid @enderror"/>
            @error('category') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Category
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection