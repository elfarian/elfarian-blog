@extends('layouts.admin')

@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Artikel</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Category</th>
                      <th>Author</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ Illuminate\Support\Str::limit($item->content, 100) }}</td>
                        <td>{{ $item->categories->category }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d, M Y H:i') }}</td>
                        <td>
                            <a href="{{ route('artikels.gallery', $item->id) }}" class="btn btn-info btn-sm">
                         {{-- <ahref="#"class="btnbtn-infobtn-sm"> --}}
                            <i class="fa fa-picture-o"></i>
                          </a>
                          <a href="{{ route('admin-artikels.edit', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <form action="{{ route('admin-artikels.destroy', $item->id) }}" 
                                method="post" 
                                class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center p-5">
                            Data tidak tersedia
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection