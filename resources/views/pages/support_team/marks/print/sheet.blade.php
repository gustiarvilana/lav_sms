{{-- --}}
<table style="width:100%; border-collapse:collapse; ">
    <tbody>
        <tr>
            <td><strong>NAMA:</strong> {{ strtoupper($sr->user->name) }}</td>
            <td><strong>NO. INDUK:</strong> {{ $sr->adm_no }}</td>
            <td><strong>ASRAMA:</strong> {{ strtoupper($sr->house) }}</td>
            <td><strong>KELAS:</strong> {{ strtoupper($my_class->name) }}</td>
        </tr>
        <tr>
            <td><strong>RAPOR UNTUK</strong> {!! strtoupper(Mk::getSuffix($ex->term)) !!} SEMESTER </td>
            <td><strong>TAHUN AJARAN:</strong> {{ $ex->year }}</td>
            <td><strong>USIA:</strong>
                {{ $sr->age ?: ($sr->user->dob ? date_diff(date_create($sr->user->dob), date_create('now'))->y : '-') }}
            </td>
        </tr>

    </tbody>
</table>

{{-- Tabel Ujian --}}
<table style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
    <thead>
        <tr>
            <th rowspan="2">MATA PELAJARAN</th>
            <th colspan="3">PENILAIAN BERKELANJUTAN</th>
            <th rowspan="2">UJIAN<br>(60)</th>
            <th rowspan="2">NILAI AKHIR <br> (100%)</th>
            <th rowspan="2">NILAI</th>
            <th rowspan="2">PERINGKAT <br> MATA PELAJARAN</th>

            {{--  @if ($ex->term == 3) --}}{{-- Semester 3 --}}{{--
        <th rowspan="2">NILAI AKHIR <br>(100%) SEMESTER 3</th>
        <th rowspan="2">SEMESTER <br> 1</th>
        <th rowspan="2">SEMESTER <br> 2</th>
        <th rowspan="2">KUMULATIF (300%) <br> 1 + 2 + 3</th>
        <th rowspan="2">RATA-RATA KUMULATIF</th>
        <th rowspan="2">NILAI</th>
        @endif --}}

            <th rowspan="2">KETERANGAN</th>
        </tr>
        <tr>
            <th>PB1(20)</th>
            <th>PB2(20)</th>
            <th>TOTAL(40)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $sub)
            <tr>
                <td style="font-weight: bold">{{ $sub->name }}</td>
                @foreach ($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                    <td>{{ $mk->t1 ?: '-' }}</td>
                    <td>{{ $mk->t2 ?: '-' }}</td>
                    <td>{{ $mk->tca ?: '-' }}</td>
                    <td>{{ $mk->exm ?: '-' }}</td>

                    <td>{{ $mk->$tex ?: '-' }}</td>
                    <td>{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                    <td>{!! $mk->grade ? Mk::getSuffix($mk->sub_pos) : '-' !!}</td>
                    <td>{{ $mk->grade ? $mk->grade->remark : '-' }}</td>

                    {{-- @if ($ex->term == 3)
                    <td>{{ $mk->tex3 ?: '-' }}</td>
                    <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 1, $mk->my_class_id, $year) }}</td>
                    <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 2, $mk->my_class_id, $year) }}</td>
                    <td>{{ $mk->cum ?: '-' }}</td>
                    <td>{{ $mk->cum_ave ?: '-' }}</td>
                    <td>{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                    <td>{{ $mk->grade ? $mk->grade->remark : '-' }}</td>
                @endif --}}
                @endforeach
            </tr>
        @endforeach
        <tr>
            <td colspan="3"><strong>TOTAL NILAI DIPEROLEH: </strong> {{ $exr->total }}</td>
            <td colspan="3"><strong>RATA-RATA AKHIR: </strong> {{ $exr->ave }}</td>
            <td colspan="3"><strong>RATA-RATA KELAS: </strong> {{ $exr->class_ave }}</td>
        </tr>
    </tbody>
</table>
