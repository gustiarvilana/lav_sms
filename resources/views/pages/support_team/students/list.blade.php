@extends('layouts.master')
@section('page_title', 'Informasi Siswa - ' . $my_class->name)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Daftar Siswa</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-students" class="nav-link active" data-toggle="tab">Semua Siswa
                        {{ $my_class->name }}</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bagian</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach ($sections as $s)
                            <a href="#s{{ $s->id }}" class="dropdown-item"
                                data-toggle="tab">{{ $my_class->name . ' ' . $s->name }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-students">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>No. Induk</th>
                                <th>Bagian</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img class="rounded-circle" style="height: 40px; width: 40px;"
                                            src="{{ $s->user->photo }}" alt="foto"></td>
                                    <td>{{ $s->user->name }}</td>
                                    <td>{{ $s->adm_no }}</td>
                                    <td>{{ $my_class->name . ' ' . $s->section->name }}</td>
                                    <td>{{ $s->user->email }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    <a href="{{ route('students.show', Qs::hash($s->id)) }}"
                                                        class="dropdown-item"><i class="icon-eye"></i> Lihat Profil</a>
                                                    @if (Qs::userIsTeamSA())
                                                        <a href="{{ route('students.edit', Qs::hash($s->id)) }}"
                                                            class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                        <a href="{{ route('st.reset_pass', Qs::hash($s->user->id)) }}"
                                                            class="dropdown-item"><i class="icon-lock"></i> Reset kata
                                                            sandi</a>
                                                    @endif
                                                    <a target="_blank"
                                                        href="{{ route('marks.year_selector', Qs::hash($s->user->id)) }}"
                                                        class="dropdown-item"><i class="icon-check"></i> Daftar Nilai</a>

                                                    {{-- Hapus --}}
                                                    @if (Qs::userIsSuperAdmin())
                                                        <a id="{{ Qs::hash($s->user->id) }}"
                                                            onclick="confirmDelete(this.id)" href="#"
                                                            class="dropdown-item"><i class="icon-trash"></i> Hapus</a>
                                                        <form method="post" id="item-delete-{{ Qs::hash($s->user->id) }}"
                                                            action="{{ route('students.destroy', Qs::hash($s->user->id)) }}"
                                                            class="hidden">@csrf @method('delete')</form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @foreach ($sections as $se)
                    <div class="tab-pane fade" id="s{{ $se->id }}">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>No. Induk</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students->where('section_id', $se->id) as $sr)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img class="rounded-circle" style="height: 40px; width: 40px;"
                                                src="{{ $sr->user->photo }}" alt="foto"></td>
                                        <td>{{ $sr->user->name }}</td>
                                        <td>{{ $sr->adm_no }}</td>
                                        <td>{{ $sr->user->email }}</td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('students.show', Qs::hash($sr->id)) }}"
                                                            class="dropdown-item"><i class="icon-eye"></i> Lihat Info</a>
                                                        @if (Qs::userIsTeamSA())
                                                            <a href="{{ route('students.edit', Qs::hash($sr->id)) }}"
                                                                class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                            <a href="{{ route('st.reset_pass', Qs::hash($sr->user->id)) }}"
                                                                class="dropdown-item"><i class="icon-lock"></i> Reset kata
                                                                sandi</a>
                                                        @endif
                                                        <a href="#" class="dropdown-item"><i class="icon-check"></i>
                                                            Daftar Nilai</a>

                                                        {{-- Hapus --}}
                                                        @if (Qs::userIsSuperAdmin())
                                                            <a id="{{ Qs::hash($sr->user->id) }}"
                                                                onclick="confirmDelete(this.id)" href="#"
                                                                class="dropdown-item"><i class="icon-trash"></i> Hapus</a>
                                                            <form method="post"
                                                                id="item-delete-{{ Qs::hash($sr->user->id) }}"
                                                                action="{{ route('students.destroy', Qs::hash($sr->user->id)) }}"
                                                                class="hidden">@csrf @method('delete')</form>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- Daftar Siswa Selesai --}}

@endsection
