@extends('layouts.master')
@section('page_title', 'Kelola Pengaturan Sistem')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Perbarui Pengaturan Sistem</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="{{ route('settings.update') }}">
                @csrf @method('PUT')
                <div class="row">
                    <div class="col-md-6 border-right-2 border-right-blue-400">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Nama Sekolah <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="system_name" value="{{ $s['system_name'] ?? '' }}" required type="text"
                                    class="form-control" placeholder="Nama Sekolah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="current_session" class="col-lg-3 col-form-label font-weight-semibold">Sesi Saat Ini
                                <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select data-placeholder="Pilih..." required name="current_session" id="current_session"
                                    class="select-search form-control">
                                    <option value=""></option>
                                    @for ($y = date('Y', strtotime('- 3 years')); $y <= date('Y', strtotime('+ 1 years')); $y++)
                                        <option
                                            {{ ($s['current_session'] ?? '') == ($y -= 1) . '-' . ($y += 1) ? 'selected' : '' }}>
                                            {{ ($y -= 1) . '-' . ($y += 1) }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Singkatan Sekolah</label>
                            <div class="col-lg-9">
                                <input name="system_title" value="{{ $s['system_title'] ?? '' }}" type="text"
                                    class="form-control" placeholder="Singkatan Sekolah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Telepon</label>
                            <div class="col-lg-9">
                                <input name="phone" value="{{ $s['phone'] ?? '' }}" type="text" class="form-control"
                                    placeholder="Telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Email Sekolah</label>
                            <div class="col-lg-9">
                                <input name="system_email" value="{{ $s['system_email'] ?? '' }}" type="email"
                                    class="form-control" placeholder="Email Sekolah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Alamat Sekolah <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input required name="address" value="{{ $s['address'] ?? '' }}" type="text"
                                    class="form-control" placeholder="Alamat Sekolah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Akhir Semester Ini</label>
                            <div class="col-lg-6">
                                <input name="term_ends" value="{{ $s['term_ends'] ?? '' }}" type="text"
                                    class="form-control date-pick" placeholder="Tanggal Akhir Semester">
                            </div>
                            <div class="col-lg-3 mt-2">
                                <span class="font-weight-bold font-italic">Bulan-Hari-Tahun atau Bulan/Hari/Tahun</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Awal Semester Berikutnya</label>
                            <div class="col-lg-6">
                                <input name="term_begins" value="{{ $s['term_begins'] ?? '' }}" type="text"
                                    class="form-control date-pick" placeholder="Tanggal Awal Semester">
                            </div>
                            <div class="col-lg-3 mt-2">
                                <span class="font-weight-bold font-italic">Bulan-Hari-Tahun atau Bulan/Hari/Tahun</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lock_exam" class="col-lg-3 col-form-label font-weight-semibold">Kunci Ujian</label>
                            <div class="col-lg-3">
                                <select class="form-control select" name="lock_exam" id="lock_exam">
                                    <option {{ $s['lock_exam'] ?? '' ? 'selected' : '' }} value="1">Ya</option>
                                    <option {{ $s['lock_exam'] ?? '' ?: 'selected' }} value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <span class="font-weight-bold font-italic text-info-800">{{ __('msg.lock_exam') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- Biaya --}}
                        <fieldset>
                            <legend><strong>Biaya Semester Berikutnya</strong></legend>
                            @foreach ($class_types as $ct)
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">{{ $ct->name }}</label>
                                    <div class="col-lg-9">
                                        <input class="form-control"
                                            value="{{ $s['next_term_fees_' . strtolower($ct->code)] ?? 0 }}"
                                            name="next_term_fees_{{ strtolower($ct->code) }}"
                                            placeholder="{{ $ct->name }}" type="text">
                                    </div>
                                </div>
                            @endforeach
                        </fieldset>
                        <hr class="divider">

                        {{-- Logo --}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Ganti Logo:</label>
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <img style="width: 100px" height="100px" src="{{ $s['logo'] ?? '' }}"
                                        alt="">
                                </div>
                                <input name="logo" accept="image/*" type="file" class="file-input"
                                    data-show-caption="false" data-show-upload="false" data-fouc>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="divider">

                <div class="text-right">
                    <button type="submit" class="btn btn-danger">Kirim Formulir <i
                            class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>

    {{-- Pengeditan Pengaturan Berakhir --}}

@endsection
