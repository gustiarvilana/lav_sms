<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info text-center">
            <span>Anda dapat Menambahkan Slot Waktu Baru atau Memilih untuk Menggunakan Slot Waktu yang Sudah Ada dari
                Jadwal Lain. <strong>CATATAN:</strong> Menggunakan Slot Waktu yang Sudah Ada akan Mereset Jadwal Saat
                Ini</span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header header-elements-inline bg-danger">
                <h6 class="font-weight-bold card-title">Tambah Slot Waktu</h6>
                {!! Qs::getPanelOptions() !!}
            </div>

            <div class="card-body collapse">
                <div class="col-md-12">
                    <form data-reload="#time_slots_table" class="ajax-store" method="post"
                        action="{{ route('ts.store') }}">
                        @csrf
                        <input name="ttr_id" value="{{ $ttr->id }}" type="hidden">

                        {{-- WAKTU MULAI --}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Waktu Mulai <span
                                    class="text-danger">*</span></label>

                            <div class="col-lg-3">
                                <select data-placeholder="Jam" required class="select-search form-control"
                                    name="hour_from" id="hour_from">

                                    <option value=""></option>
                                    @for ($t = 1; $t <= 12; $t++)
                                        <option {{ old('hour_from') == $t ? 'selected' : '' }}
                                            value="{{ $t }}">{{ $t }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-lg-3">
                                <select data-placeholder="Menit" required class="select-search form-control"
                                    name="min_from" id="min_from">

                                    <option value=""></option>
                                    <option value="00">00</option>
                                    <option value="05">05</option>
                                    @for ($t = 10; $t <= 55; $t += 5)
                                        <option {{ old('min_from') == $t ? 'selected' : '' }}
                                            value="{{ $t }}">{{ $t }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-lg-3">
                                <select data-placeholder="Meridian" required class="select form-control"
                                    name="meridian_from" id="meridian_from">

                                    <option value=""></option>
                                    <option {{ old('meridian_from') == 'AM' ? 'selected' : '' }} value="AM">AM
                                    </option>
                                    <option {{ old('meridian_from') == 'PM' ? 'selected' : '' }} value="PM">PM
                                    </option>
                                </select>
                            </div>
                        </div>

                        {{-- WAKTU SELESAI --}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Waktu Selesai <span
                                    class="text-danger">*</span></label>

                            <div class="col-lg-3">
                                <select data-placeholder="Jam" required class="select-search form-control"
                                    name="hour_to" id="hour_to">

                                    <option value=""></option>
                                    @for ($t = 1; $t <= 12; $t++)
                                        <option {{ old('hour_to') == $t ? 'selected' : '' }}
                                            value="{{ $t }}">{{ $t }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-lg-3">
                                <select data-placeholder="Menit" required class="select-search form-control"
                                    name="min_to" id="min_to">

                                    <option value=""></option>
                                    <option value="00">00</option>
                                    <option value="05">05</option>
                                    @for ($t = 10; $t <= 55; $t += 5)
                                        <option {{ old('min_to') == $t ? 'selected' : '' }}
                                            value="{{ $t }}">{{ $t }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-lg-3">
                                <select data-placeholder="Meridian" required class="select form-control"
                                    name="meridian_to" id="meridian_to">

                                    <option value=""></option>
                                    <option {{ old('meridian_to') == 'AM' ? 'selected' : '' }} value="AM">AM
                                    </option>
                                    <option {{ old('meridian_to') == 'PM' ? 'selected' : '' }} value="PM">PM
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Kirim formulir <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header header-elements-inline bg-dark">
                <h6 class="font-weight-bold card-title">Gunakan Slot Waktu yang Sudah Ada</h6>
                {!! Qs::getPanelOptions() !!}
            </div>

            <div class="card-body collapse">
                <div class="col-md-12">
                    <form method="post" action="{{ route('ts.use', $ttr->id) }}">
                        @csrf

                        {{-- PILIH SLOT WAKTU YANG ADA --}}
                        <div class="form-group">
                            <label for="ttr_id" class="col-form-label-lg font-weight-semibold mb-lg-2">Pilih Slot
                                Waktu yang Sudah Ada <span class="text-danger">*</span></label>

                            <div class="col-lg-8">
                                <select id="ttr_id" data-placeholder="Pilih..." required
                                    class="select-search form-control-lg" name="ttr_id">

                                    <option value=""></option>
                                    @foreach ($ts_existing as $ttr_ts)
                                        <option value="{{ $ttr_ts->id }}">{{ $ttr_ts->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-lg btn-success">Kirim formulir <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="tab-pane fade" id="add-sub">
    <div class="col-md-8">
        <form class="ajax-store" method="post" action="{{ route('tt.store') }}">
            @csrf <input name="ttr_id" value="{{ $ttr->id }}" type="hidden">

            @if ($ttr->exam_id)
                {{-- TANGGAL UJIAN --}}
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label font-weight-semibold">Tanggal Ujian <span
                            class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input autocomplete="off" name="exam_date" value="{{ old('exam_date') }}" required
                            type="text" class="form-control date-pick" placeholder="Pilih Tanggal...">
                    </div>
                </div>
            @else
                {{-- HARI --}}
                <div class="form-group row">
                    <label for="day" class="col-lg-3 col-form-label font-weight-semibold">Hari <span
                            class="text-danger">*</span></label>

                    <div class="col-lg-9">
                        <select id="day" name="day" required type="text" class="form-control select"
                            data-placeholder="Pilih Hari...">
                            <option value=""></option>
                            @foreach (Qs::getDaysOfTheWeek() as $dw)
                                <option {{ old('day') == $dw ? 'selected' : '' }} value="{{ $dw }}">
                                    {{ $dw }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

            @endif

            {{-- MATA PELAJARAN --}}
            <div class="form-group row">
                <label for="subject_id" class="col-lg-3 col-form-label font-weight-semibold">Mata Pelajaran
                    <span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <select required data-placeholder="Pilih Mata Pelajaran" class="form-control select-search"
                        name="subject_id" id="subject_id">
                        <option value=""></option>
                        @foreach ($subjects as $sub)
                            <option {{ old('subject_id') == $sub->id ? 'selected' : '' }}
                                value="{{ $sub->id }}">{{ $sub->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- SLOT WAKTU --}}
            <div class="form-group row">

                <label for="ts_id" class="col-lg-3 col-form-label font-weight-semibold">Slot Waktu <span
                        class="text-danger">*</span></label>

                <div class="col-lg-9">
                    <select data-placeholder="Pilih Waktu..." required class="select form-control" name="ts_id"
                        id="ts_id">

                        <option value=""></option>
                        @foreach ($time_slots as $tms)
                            <option {{ old('ts_id') == $tms->full ? 'selected' : '' }} value="{{ $tms->id }}">
                                {{ $tms->full }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="text-right">
                <button type="submit" class="btn btn-primary">Kirim formulir <i
                        class="icon-paperplane ml-2"></i></button>
            </div>
        </form>
    </div>

</div>

<div class="tab-pane fade" id="edit-subs">
    {{-- Jika Ada Jadwal Waktu --}}
    @if ($tts->count())
        @foreach ($tts->chunk(2) as $chunk)
            <div class="row">
                @foreach ($chunk as $tt)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title font-weight-bold">
                                    {{ $tt->exam_date ? 'Ujian (' . date('D\, d/m/Y', strtotime($tt->exam_date)) . ')' : $tt->day }}
                                    {{ '(' . $tt->time_slot->full . ')' . ' - ' . $tt->subject->name }}</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a onclick="confirmDelete(this.id)" href="#" id="{{ $tt->id }}"
                                            title="HAPUS" class="list-icons-item text-danger"><i
                                                class="icon-trash"></i></a>
                                        <form method="post" id="item-delete-{{ $tt->id }}"
                                            action="{{ route('tt.delete', $tt->id) }}" class="hidden">@csrf
                                            @method('delete')
                                        </form>
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body collapse">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('tt.update', $tt->id) }}">
                                        @csrf @method('PUT')

                                        <input name="ttr_id" value="{{ $ttr->id }}" type="hidden">

                                        @if ($ttr->exam_id)
                                            {{-- TANGGAL UJIAN --}}
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label font-weight-semibold">Tanggal
                                                    Ujian <span class="text-danger">*</span></label>
                                                <div class="col-lg-9">
                                                    <input autocomplete="off" name="exam_date"
                                                        value="{{ $tt->exam_date }}" required type="text"
                                                        class="form-control date-pick" placeholder="Pilih Tanggal...">
                                                </div>
                                            </div>
                                        @else
                                            {{-- HARI --}}
                                            <div class="form-group row">
                                                <label for="day"
                                                    class="col-lg-3 col-form-label font-weight-semibold">Hari
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-lg-9">
                                                    <select id="day" name="day" required type="text"
                                                        class="form-control select" data-placeholder="Pilih Hari...">
                                                        @foreach (Qs::getDaysOfTheWeek() as $dw)
                                                            <option {{ $tt->day == $dw ? 'selected' : '' }}
                                                                value="{{ $dw }}">{{ $dw }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- MATA PELAJARAN --}}
                                        <div class="form-group row">
                                            <label for="subject_id"
                                                class="col-lg-3 col-form-label font-weight-semibold">Mata Pelajaran
                                                <span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <select required data-placeholder="Pilih Mata Pelajaran"
                                                    class="form-control select-search" name="subject_id"
                                                    id="subject_id">
                                                    @foreach ($subjects as $sub)
                                                        <option {{ $tt->subject_id == $sub->id ? 'selected' : '' }}
                                                            value="{{ $sub->id }}">{{ $sub->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        {{-- SLOT WAKTU --}}
                                        <div class="form-group row">

                                            <label for="ts_id"
                                                class="col-lg-3 col-form-label font-weight-semibold">Slot Waktu <span
                                                    class="text-danger">*</span></label>

                                            <div class="col-lg-9">
                                                <select data-placeholder="Pilih Waktu..." required
                                                    class="select form-control" name="ts_id" id="ts_id">

                                                    <option value=""></option>
                                                    @foreach ($time_slots as $tms)
                                                        <option {{ $tt->ts_id == $tms->id ? 'selected' : '' }}
                                                            value="{{ $tms->id }}">{{ $tms->full }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        {{-- KIRIM --}}
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Kirim Formulir <i
                                                    class="icon-paperplane ml-2"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @else
        <div class="alert alert-info text-center">Tidak Ada Catatan untuk Ditampilkan. Tambahkan Mata Pelajaran ke
            Jadwal & Muat ulang halaman
        </div>
    @endif
</div>
