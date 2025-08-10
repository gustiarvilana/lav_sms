{{-- Kelola Pengaturan --}}
<li class="nav-item">
    <a href="{{ route('settings') }}"
        class="nav-link {{ in_array(Route::currentRouteName(), ['settings']) ? 'active' : '' }}"><i class="icon-gear"></i>
        <span>Pengaturan</span></a>
</li>

{{-- Pin --}}
{{-- <li
    class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['pins.create', 'pins.index']) ? 'nav-item-expanded nav-item-open' : '' }} ">
    <a href="#" class="nav-link"><i class="icon-lock2"></i> <span> Pin</span></a>

    <ul class="nav nav-group-sub" data-submenu-title="Kelola Pin">
        <li class="nav-item">
            <a href="{{ route('pins.create') }}" class="nav-link {{ Route::is('pins.create') ? 'active' : '' }}">Buat
                Pin</a>
        </li>

        <li class="nav-item">
            <a href="{{ route('pins.index') }}" class="nav-link {{ Route::is('pins.index') ? 'active' : '' }}">Lihat
                Pin</a>
        </li>
    </ul>
</li> --}}
