@extends('layouts.home')

@section('content')

<!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>All</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Semua Artikel</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($artikels as $artikel)
                
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ url($artikel->galleries[0]->photo) }}" alt="" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="{{ route('read', $artikel->slug ) }}"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="{{ route('read', $artikel->slug ) }}">Read this</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{ $artikel->categories->category }}</div>
                            <a href="{{ route('read', $artikel->slug ) }}">
                                <h5>{{ $artikel->title }}</h5>
                            </a>
                            <div class="product-price">
                                {{ Illuminate\Support\Str::limit(strip_tags($artikel->content), 100) }}
                            </div>
                            <div class="catagory-name">{{ \Carbon\Carbon::parse($artikel->created_at)->diffForHumans() }}</div>
                        </div>
                    </div>
                </div> 

                @empty

                <div class="p-0 m-0 mt-4 text-center col-lg-12">
                    <h3><b>Tidak ada data</b></h3>
                </div>
                    
                @endforelse
                             
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->
@endsection