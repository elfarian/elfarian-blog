<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i> elfarianvirdausa93@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i> +628 2333361013
                </div>
            </div>
            <div class="ht-right">
                <div class="mail-service mt-3 ">
                    <a href="{{ route('dashboard-admin') }}" class="text-warning">
                    <i class="text-warning fa fa-sign-in"></i>Login admin
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/img/logo_website_shayna.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7"></div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            List Kategori &nbsp;
                            <a href="#">
                                <i class="icon_menu-square_alt2"></i>
                                <span>+</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-button">
                                    @foreach ($categories as $category)
                                    <a href="{{ route('category', $category->category) }}" class="primary-btn checkout-btn border">{{ $category->category }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->