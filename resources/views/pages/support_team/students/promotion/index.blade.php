@extends('layouts.master')
@section('page_title', 'Kenaikan Kelas Siswa')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title font-weight-bold">Kenaikan Kelas Siswa Dari Sesi <span
                    class="text-danger">{{ $old_year }}</span> KE <span class="text-success">{{ $new_year }}</span>
            </h5>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            @include('pages.support_team.students.promotion.selector')
        </div>
    </div>

    @if ($selected)
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title font-weight-bold">Promosikan Siswa Dari <span
                        class="text-teal">{{ $my_classes->where('id', $fc)->first()->name . ' ' . $sections->where('id', $fs)->first()->name }}</span>
                    KE <span
                        class="text-purple">{{ $my_classes->where('id', $tc)->first()->name . ' ' . $sections->where('id', $ts)->first()->name }}</span>
                </h5>
                {!! Qs::getPanelOptions() !!}
            </div>

            <div class="card-body">
                @include('pages.support_team.students.promotion.promote')
            </div>
        </div>
    @endif


    {{-- Akhir Kenaikan Kelas Siswa --}}

@endsection
