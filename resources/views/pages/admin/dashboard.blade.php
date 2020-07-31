@extends('layouts.admin')

@section('content')

<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-notebook"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $total_artikel }}</span></div>
                                <div class="stat-heading">Artikel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-comment"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $total_comment }}</span></div>
                                <div class="stat-heading">Komentar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Artikel Terbaru </h4>
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
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse ($items as $item)
                                    <tr>
                                      <td>{{ $item->id }}</td>
                                      <td>{{ $item->title }}</td>
                                      <td>{{ Illuminate\Support\Str::limit(strip_tags($item->content), 100) }}</td>
                                      <td>{{ $item->categories->category }}</td>
                                      <td>{{ $item->author }}</td>                                      
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
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->

            
        </div>
    </div>
    <!-- /.orders -->
<!-- /#add-category -->
</div>
<!-- .animated -->
    
@endsection