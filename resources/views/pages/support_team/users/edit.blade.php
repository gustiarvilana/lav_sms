@extends('layouts.master')
@section('page_title', 'Edit Pengguna')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Detail Pengguna</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" class="wizard-form steps-validation ajax-update"
                action="{{ route('users.update', Qs::hash($user->id)) }}" data-fouc>
                @csrf @method('PUT')
                <h6>Data Pribadi</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="user_type"> Pilih Pengguna: <span class="text-danger">*</span></label>
                                <select disabled="disabled" class="form-control select" id="user_type">
                                    <option value="">{{ strtoupper($user->user_type) }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Username: <span class="text-danger">*</span></label>
                                <input value="{{ $user->username }}" type="text" name="username" placeholder="Username"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Lengkap: <span class="text-danger">*</span></label>
                                <input value="{{ $user->name }}" required type="text" name="name"
                                    placeholder="Nama Lengkap" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat: <span class="text-danger">*</span></label>
                                <input value="{{ $user->address }}" class="form-control" placeholder="Alamat" name="address"
                                    type="text" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Alamat email: </label>
                                <input value="{{ $user->email }}" type="email" name="email" class="form-control"
                                    placeholder="your@email.com">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telepon:</label>
                                <input value="{{ $user->phone }}" type="text" name="phone" class="form-control"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telepon Genggam:</label>
                                <input value="{{ $user->phone2 }}" type="text" name="phone2" class="form-control"
                                    placeholder="">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        @if (in_array($user->user_type, Qs::getStaff()))
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Mulai Bekerja:</label>
                                    <input autocomplete="off" name="emp_date"
                                        value="{{ $user->staff->first()->emp_date ?? '' }}" type="text"
                                        class="form-control date-pick" placeholder="Pilih Tanggal...">

                                </div>
                            </div>
                        @endif

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="gender" name="gender" required data-fouc
                                    data-placeholder="Pilih..">
                                    <option value=""></option>
                                    <option {{ $user->gender == 'Male' ? 'selected' : '' }} value="Male">Laki-laki
                                    </option>
                                    <option {{ $user->gender == 'Female' ? 'selected' : '' }} value="Female">Perempuan
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nal_id">Kewarganegaraan: <span class="text-danger">*</span></label>
                                <select data-placeholder="Pilih..." required name="nal_id" id="nal_id"
                                    class="select-search form-control">
                                    <option value=""></option>
                                    @foreach ($nationals as $nal)
                                        <option {{ $user->nal_id == $nal->id ? 'selected' : '' }}
                                            value="{{ $nal->id }}">{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="state_id">Negara Bagian: <span class="text-danger">*</span></label>
                            <select onchange="getLGA(this.value)" required data-placeholder="Pilih.."
                                class="select-search form-control" name="state_id" id="state_id">
                                <option value=""></option>
                                @foreach ($states as $st)
                                    <option {{ $user->state_id == $st->id ? 'selected' : '' }}
                                        value="{{ $st->id }}">{{ $st->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="lga_id">LGA: <span class="text-danger">*</span></label>
                            <select required data-placeholder="Pilih Negara Bagian Terlebih Dahulu"
                                class="select-search form-control" name="lga_id" id="lga_id">
                                <option value="{{ $user->lga_id ?? '' }}">{{ $user->lga->name ?? '' }}</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bg_id">Golongan Darah: </label>
                                <select class="select form-control" id="bg_id" name="bg_id" data-fouc
                                    data-placeholder="Pilih..">
                                    <option value=""></option>
                                    @foreach ($blood_groups as $bg)
                                        <option {{ $user->bg_id == $bg->id ? 'selected' : '' }}
                                            value="{{ $bg->id }}">{{ $bg->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    {{-- Paspor --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Unggah Foto Paspor:</label>
                                <input value="{{ old('photo') }}" accept="image/*" type="file" name="photo"
                                    class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Gambar yang Diterima: jpeg, png. Ukuran file maksimal
                                    2Mb</span>
                            </div>
                        </div>
                    </div>

                </fieldset>



            </form>
        </div>

    </div>
@endsection
