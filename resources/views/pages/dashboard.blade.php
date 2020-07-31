@extends('layouts.home')

@section('content')
<!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{ asset('frontend/img/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>elfarian-blog</span>
                            <h1>Wellcome</h1>
                            <p>
                                Selamat datang di blogku, disini tempat saya ingin bercerita 
                                tentang pengalaman saya pada dunia yang fana ini. Enjoy it.
                            </p>
                            <a href="{{ route('all') }}" class="primary-btn">Read Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{ asset('frontend/img/hero-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>kun anta</span>
                            <h1>Assalamualaikum</h1>
                            <p>
                                Nama saya elfarian dela virdausa, biasanya orang memanggil saya yosa. lahir pada 13 April 1999 di kota Pamekasan. Sekarang lagi menempuh pendidikan di PENS jurusan Teknik Telekomunikasi.
                            </p>
                            <a href="{{ route('all') }}" class="primary-btn">Read Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

<!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
            	<div class="p-0 m-0 mt-4 text-center col-lg-12">
            		<h3><b>Latest Artikel</b></h3>
            	</div>
                <div class="col-lg-12 mt-4">
                    <div class="product-slider owl-carousel">
                        
                        @foreach ($artikels as $artikel)
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
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->
    
@endsection