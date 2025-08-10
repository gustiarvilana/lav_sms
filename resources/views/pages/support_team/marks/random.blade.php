<form class="ajax-update" action="{{ route('marks.update', [$exam_id, $my_class_id, $section_id, $subject_id]) }}"
    method="post">
    @csrf @method('put')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Nama</th>
                <th>No. Induk</th>
                @if ($class_type->code == 'J')
                    <th>TUGAS 1 (10)</th>
                    <th>TUGAS TENGAH SEMESTER (20)</th>
                    <th>TUGAS 2 (10)</th>
                    <th>UJIAN (60)</th>
                @endif
                @if ($class_type->code == 'S')
                    <th>TUGAS 1 (15)</th>
                    <th>TUGAS 2 (15)</th>
                    <th>UJIAN (70)</th>
                @endif
                @if ($class_type->code == 'P')
                    <th>TUGAS 1 </th>
                    <th>TUGAS 2 </th>
                    <th>TUGAS TENGAH SEMESTER </th>
                    <th>UJIAN</th>
                @endif
                @if ($class_type->code == 'N')
                    <th>TES </th>
                    <th>UJIAN</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($marks->sortBy('user.name') as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->user->name }} </td>
                    <td>{{ $mk->user->student_record->adm_no }}</td>

                    @if ($class_type->code == 'J')
                        <td><input min="1" max="10" class="w-50 text-center" name="t1_{{ $mk->id }}"
                                value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" max="20" class="w-50 text-center" name="t2_{{ $mk->id }}"
                                value="{{ rand(1, 20) }}" type="number"></td>
                        <td><input min="1" max="10" class="w-50 text-center" name="t3_{{ $mk->id }}"
                                value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" max="60" class="w-50 text-center"
                                name="exm_{{ $mk->id }}" value="{{ rand(1, 60) }}" type="number"></td>
                    @endif

                    @if ($class_type->code == 'S')
                        <td><input min="1" max="15" class="w-50 text-center" name="t1_{{ $mk->id }}"
                                value="{{ rand(1, 15) }}" type="number"></td>
                        <td><input min="1" max="15" class="w-50 text-center" name="t2_{{ $mk->id }}"
                                value="{{ rand(1, 15) }}" type="number"></td>
                        <td><input min="1" max="70" class="w-50 text-center"
                                name="exm_{{ $mk->id }}" value="{{ rand(1, 70) }}" type="number"></td>
                    @endif

                    @if ($class_type->code == 'P')
                        <td><input min="1" class="w-50 text-center" name="t1_{{ $mk->id }}"
                                value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" class="w-50 text-center" name="t2_{{ $mk->id }}"
                                value="{{ rand(1, 20) }}" type="number"></td>
                        <td><input min="1" class="w-50 text-center" name="t3_{{ $mk->id }}"
                                value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" class="w-50 text-center" name="exm_{{ $mk->id }}"
                                value="{{ rand(1, 60) }}" type="number"></td>
                    @endif

                    @if ($class_type->code == 'N')
                        <td><input min="1" max="40" class="w-50 text-center" name="t1_{{ $mk->id }}"
                                value="{{ rand(1, 40) }}" type="number"></td>
                        <td><input min="1" max="60" class="w-50 text-center"
                                name="exm_{{ $mk->id }}" value="{{ rand(1, 60) }}" type="number"></td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-2">
        <button type="submit" class="btn btn-primary">Perbarui Nilai <i class="icon-paperplane ml-2"></i></button>
    </div>
</form>
