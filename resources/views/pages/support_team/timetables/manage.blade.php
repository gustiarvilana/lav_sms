@extends('layouts.master')
@section('page_title', 'Kelola Catatan Jadwal')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-bold">{{ $ttr->name . ' (' . $my_class->name . ')' . ' ' . $ttr->year }}</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#manage-ts" class="nav-link active" data-toggle="tab">Kelola Slot Waktu</a></li>
                <li class="nav-item"><a href="#add-sub" class="nav-link" data-toggle="tab">Tambah Mata Pelajaran</a></li>
                <li class="nav-item"><a href="#edit-subs" class="nav-link " data-toggle="tab">Edit Mata Pelajaran</a></li>
                <li class="nav-item"><a target="_blank" href="{{ route('ttr.show', $ttr->id) }}" class="nav-link">Lihat
                        Jadwal</a></li>
            </ul>

            <div class="tab-content">
                {{-- Tambah Slot Waktu --}}
                @include('pages.support_team.timetables.time_slots.index')
                {{-- Tambah Mata Pelajaran --}}
                @include('pages.support_team.timetables.subjects.add')
                {{-- Edit Mata Pelajaran --}}
                @include('pages.support_team.timetables.subjects.edit')
            </div>
        </div>
    </div>

    {{-- Manajemen Jadwal Selesai --}}

@endsection
