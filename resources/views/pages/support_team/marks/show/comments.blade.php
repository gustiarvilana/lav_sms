@if (Qs::userIsTeamSAT())
    <div class="card">
        <div class="card-header header-elements-inline bg-dark">
            <h6 class="card-title font-weight-bold">Komentar Ujian</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body collapse">
            <form class="ajax-update" method="post" action="{{ route('marks.comment_update', $exr->id) }}">
                @csrf @method('PUT')

                @if (Qs::userIsTeamSAT())
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">Komentar Guru</label>
                        <div class="col-lg-10">
                            <input name="t_comment" value="{{ $exr->t_comment }}" type="text" class="form-control"
                                placeholder="Komentar Guru">
                        </div>
                    </div>
                @endif

                @if (Qs::userIsTeamSA())
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">Komentar Kepala Sekolah</label>
                        <div class="col-lg-10">
                            <input name="p_comment" value="{{ $exr->p_comment }}" type="text" class="form-control"
                                placeholder="Komentar Kepala Sekolah">
                        </div>
                    </div>
                @endif

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Kirim formulir <i
                            class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endif
