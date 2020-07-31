@extends('layouts.home')

@section('content')

<!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('category', $artikels->categories->category) }}">{{ $artikels->categories->category }}</a>
                        <span>{{ $artikels->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details pt-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="{{ url($items[0]->photo) }}" alt="" />
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                
                                @foreach ($items as $item)
                                <div class="pt" data-imgbigurl="{{ url($item->photo) }}">
                                    <img src="{{ url($item->photo) }}" alt="" />
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{ $artikels->categories->category }}</span>
                                <span>{{ \Carbon\Carbon::parse($artikels->created_at)->format('d, M Y') }}</span>
                                <h3>{{ $artikels->title }}</h3>
                            </div>
                            <div class="pd-desc">
                                <p>
                                  {!! $artikels->content !!}
                                </p>
                                
                                <h4>By: {{ $artikels->author }}</h4>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-4 mb-4 border-top">
                <!-- Content Row -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="user-checkout ">
                     <form action="{{ route('addcomment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="artikels_id" value="{{ $artikels->id }}">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Nama</label>
                                <input  type="text"
                                        name="name" 
                                        value="{{ old('name') }}"
                                        placeholder="Masukan Nama" 
                                        class="form-control @error('name') is-invalid @enderror"/>
                                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>
                          <div class="form-group">
                            <label for="email" class="form-control-label">Email</label>
                            <input  type="text"
                                    name="email" 
                                    value="{{ old('email') }}"
                                    placeholder="Masukan Email" 
                                    class="form-control @error('email') is-invalid @enderror"/>
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                          </div>
                          <div class="form-group">
                            <label for="comment" class="form-control-label">Komentar</label>
                            <textarea name="comment" 
                                      class="form-control @error('comment') is-invalid @enderror">{{ old('comment')}}</textarea>
                            @error('comment') <div class="text-muted">{{ $message }}</div> @enderror
                          </div>
                        <div class="form-group proceed-checkout">
                            <button class=" btn-block proceed-btn" type="submit">
                              Tambah Komentar
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-8 ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="proceed-checkout">
                            <ul>
                                <h4 class="mb-2">
                                    Komentar Netizen:
                                </h4>
                                @forelse ($artikels->comments as $comment)
                                <li class="subtotal py-2 px-0 m-0">{{ $comment->name }} <br>
                                    <p class="p-0 m-0">{{ $comment->comment }} </p>
                                     <span><p class="p-0 m-0" style="font-size: 10px;">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p></span>
                                 </li>
                                @empty
                                <li class="subtotal py-2 px-0 m-0">Belum terdapat komentar
                                 </li>
                                    
                                @endforelse
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->
    
@endsection