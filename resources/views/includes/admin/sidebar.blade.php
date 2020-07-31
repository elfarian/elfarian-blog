<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard-admin') }}"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Artikel</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('admin-artikels.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Artikel</a>
                </li>
                <li class="">
                    <a href="{{ route('admin-artikels.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Artikel</a>
                </li>

                <li class="menu-title">Foto Artikel</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('admin-gallery.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto Artikel</a>
                </li>
                <li class="">
                    <a href="{{ route('admin-gallery.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Foto Artikel</a>
                </li>

                <li class="menu-title">Kategori</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('admin-category.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Kategori</a>
                </li>
                <li class="">
                    <a href="{{ route('admin-category.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Kategori</a>
                </li>

                <li class="menu-title">Komentar</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('admin-comment.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Komentar</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->