@extends('layouts.master')
@section('page_title', 'Lembar Nilai Siswa')
@section('content')

    <div class="card">
        <div class="card-header text-center">
            <h4 class="card-title font-weight-bold">Lembar Nilai Siswa untuk =>
                {{ $sr->user->name . ' (' . $my_class->name . ' ' . $my_class->section->first()->name . ')' }} </h4>
        </div>
    </div>

    @foreach ($exams as $ex)
        @foreach ($exam_records->where('exam_id', $ex->id) as $exr)
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="font-weight-bold">{{ $ex->name . ' - ' . $ex->year }}</h6>
                    {!! Qs::getPanelOptions() !!}
                </div>

                <div class="card-body collapse">

                    {{-- Tabel Lembar Nilai --}}
                    @include('pages.support_team.marks.show.sheet')

                    {{-- Tombol Cetak --}}
                    <div class="text-center mt-3">
                        <a target="_blank" href="{{ route('marks.print', [Qs::hash($student_id), $ex->id, $year]) }}"
                            class="btn btn-secondary btn-lg">Cetak Lembar Nilai <i class="icon-printer ml-2"></i></a>
                    </div>

                </div>

            </div>

            {{--     KOMENTAR UJIAN   --}}
            @include('pages.support_team.marks.show.comments')

            {{-- PENILAIAN KETERAMPILAN --}}
            @include('pages.support_team.marks.show.skills')
        @endforeach
    @endforeach

@endsection
