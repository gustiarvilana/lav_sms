<table class="table table-bordered table-responsive text-center">
    <thead>
        <tr>
            <th rowspan="2">S/N</th>
            <th rowspan="2">MATA PELAJARAN</th>
            <th rowspan="2">PB1<br>(20)</th>
            <th rowspan="2">PB2<br>(20)</th>
            <th rowspan="2">UJIAN<br>(60)</th>
            <th rowspan="2">TOTAL<br>(100)</th>

            {{-- @if ($ex->term == 3) --}}{{-- Semester 3 --}}{{--
        <th rowspan="2">TOTAL <br>(100%) SEMESTER 3</th>
        <th rowspan="2">1<sup>ST</sup> <br> SEMESTER</th>
        <th rowspan="2">2<sup>ND</sup> <br> SEMESTER</th>
        <th rowspan="2">KUMULATIF (300%) <br> 1<sup>ST</sup> + 2<sup>ND</sup> + 3<sup>RD</sup></th>
        <th rowspan="2">RATA-RATA KUMULATIF</th>
        @endif --}}

            <th rowspan="2">NILAI</th>
            <th rowspan="2">PERINGKAT <br> MATA PELAJARAN</th>
            <th rowspan="2">KETERANGAN</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($subjects as $sub)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sub->name }}</td>
                @foreach ($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                    <td>{{ $mk->t1 ?: '-' }}</td>
                    <td>{{ $mk->t2 ?: '-' }}</td>
                    <td>{{ $mk->exm ?: '-' }}</td>
                    <td>
                        @if ($ex->term === 1)
                            {{ $mk->tex1 }}
                        @elseif ($ex->term === 2)
                            {{ $mk->tex2 }}
                        @elseif ($ex->term === 3)
                            {{ $mk->tex3 }}
                        @else
                            {{ '-' }}
                        @endif
                    </td>

                    {{-- Semester 3 --}}
                    {{-- @if ($ex->term == 3)
                     <td>{{ $mk->tex3 ?: '-' }}</td>
                     <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 1, $mk->my_class_id, $year) }}</td>
                     <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 2, $mk->my_class_id, $year) }}</td>
                     <td>{{ $mk->cum ?: '-' }}</td>
                     <td>{{ $mk->cum_ave ?: '-' }}</td>
                 @endif --}}

                    {{-- Nilai, Peringkat Mata Pelajaran & Keterangan --}}
                    <td>{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                    <td>{!! $mk->grade ? Mk::getSuffix($mk->sub_pos) : '-' !!}</td>
                    <td>{{ $mk->grade ? $mk->grade->remark : '-' }}</td>
                @endforeach
            </tr>
        @endforeach
        <tr>
            <td colspan="4"><strong>TOTAL NILAI DIPEROLEH: </strong> {{ $exr->total }}</td>
            <td colspan="3"><strong>RATA-RATA AKHIR: </strong> {{ $exr->ave }}</td>
            <td colspan="2"><strong>RATA-RATA KELAS: </strong> {{ $exr->class_ave }}</td>
        </tr>
    </tbody>
</table>
