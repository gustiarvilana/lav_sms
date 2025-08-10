<!-- Navbar Utama -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="mt-2 mr-5">
        <a href="{{ route('dashboard') }}" class="d-inline-block">
            <h4 class="text-bold text-white">{{ Qs::getSystemName() }}</h4>
        </a>
    </div>

    {{-- <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{ asset('global_assets/images/logo_light.png') }}" alt="">
        </a>
    </div> --}}

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>


        </ul>

        <span class="navbar-text ml-md-3 mr-md-auto"></span>

        <ul class="navbar-nav">

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img style="width: 38px; height:38px;" src="{{ Auth::user()->photo }}" class="rounded-circle"
                        alt="foto">
                    <span>{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ Qs::userIsStudent() ? route('students.show', Qs::hash(Qs::findStudentRecord(Auth::user()->id)->id)) : route('users.show', Qs::hash(Auth::user()->id)) }}"
                        class="dropdown-item"><i class="icon-user-plus"></i> Profil Saya</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('my_account') }}" class="dropdown-item"><i class="icon-cog5"></i> Pengaturan
                        Akun</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
                        class="dropdown-item"><i class="icon-switch2"></i> Keluar</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
<div id="page-header" class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-plus-circle2 mr-2"></i> <span class="font-weight-semibold">@yield('page_title')</span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
                {{--              <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistik</span></a> --}}
                {{--              <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Faktur</span></a> --}}
                {{--              <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Jadwal</span></a> --}}
                <a href="{{ Qs::userIsSuperAdmin() ? route('settings') : '' }}"
                    class="btn btn-link btn-float text-default"><i class="icon-arrow-down7 text-primary"></i> <span
                        class="font-weight-semibold">Sesi Saat Ini: {{ Qs::getSetting('current_session') }}</span></a>
            </div>
        </div>
    </div>

    {{--  Breadcrumbs --}}
    {{--  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline"> --}}
    {{--      <div class="d-flex"> --}}
    {{--          <div class="breadcrumb"> --}}
    {{--              <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Beranda</a> --}}
    {{--              <a href="form_select2.html" class="breadcrumb-item">Formulir</a> --}}
    {{--              <span class="breadcrumb-item active">Pilihan Select2</span> --}}
    {{--          </div> --}}

    {{--          <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a> --}}
    {{--      </div> --}}

    {{--      <div class="header-elements d-none"> --}}
    {{--          <div class="breadcrumb justify-content-center"> --}}
    {{--              <a href="#" class="breadcrumb-elements-item"> --}}
    {{--                  <i class="icon-comment-discussion mr-2"></i> --}}
    {{--                  Dukungan --}}
    {{--              </a> --}}

    {{--              <div class="breadcrumb-elements-item dropdown p-0"> --}}
    {{--                  <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown"> --}}
    {{--                      <i class="icon-gear mr-2"></i> --}}
    {{--                      Pengaturan --}}
    {{--                  </a> --}}

    {{--                  <div class="dropdown-menu dropdown-menu-right"> --}}
    {{--                      <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Keamanan Akun</a> --}}
    {{--                      <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analitik</a> --}}
    {{--                      <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Aksesibilitas</a> --}}
    {{--                      <div class="dropdown-divider"></div> --}}
    {{--                      <a href="#" class="dropdown-item"><i class="icon-gear"></i> Semua pengaturan</a> --}}
    {{--                  </div> --}}
    {{--              </div> --}}
    {{--          </div> --}}
    {{--      </div> --}}
    {{--  </div> --}}
</div>
