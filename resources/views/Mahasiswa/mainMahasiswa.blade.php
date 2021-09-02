
@include('header')

        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                                    <h3 class="menu-title">Aplikasi SPK</h3><!-- /.menu-title -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('home_mahasiswa') }}"> <i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>
                    
                    <h3 class="menu-title">Kelola Soal</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text-o"></i>Soal</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-table"></i><a href="{{url('')}}">Hasil Saya</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Profile</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>My Profile</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-list"></i><a href="{{url('')}}">Profile</a></li>
                            <li><i class="menu-icon fa fa-times"></i><a href="{{url('')}}">LogOut</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">



        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>@yield('breadcrumbs')</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


            {{-- isi --}}
            @yield('isi')
            {{-- isi --}}


    </div> <!-- .content -->
    </div><!-- /#right-panel -->



@include('footer')
