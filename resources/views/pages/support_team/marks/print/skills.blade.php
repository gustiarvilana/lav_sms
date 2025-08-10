<div>
    {{-- KUNCI PENILAIAN --}}
    <div style="float: left">
        <br>
        <strong style="text-decoration: underline;">KUNCI</strong> <br>
        <span>5 - Sangat Baik</span> <br>
        <span>4 - Baik Sekali</span> <br>
        <span>3 - Baik</span> <br>
        <span>2 - Cukup</span> <br>
        <span>1 - Kurang</span> <br>
    </div>

    <table align="left" style="width:40%; border-collapse:collapse; border: 1px solid #000; margin:10px 20px;"
        border="1">
        <thead>
            <tr>
                <td><strong>SIFAT AFEKTIF</strong></td>
                <td><strong>PENILAIAN</strong></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills->where('skill_type', 'AF') as $af)
                <tr>
                    <td>{{ $af->name }}</td>
                    <td>{{ $exr->af ? explode(',', $exr->af)[$loop->index] : '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table align="left" style="width:35%; border-collapse:collapse;border: 1px solid #000;  margin: 10px 20px;"
        border="1">
        <thead>
            <tr>
                <td><strong>PSIKOMOTOR</strong></td>
                <td><strong>PENILAIAN</strong></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills->where('skill_type', 'PS') as $ps)
                <tr>
                    <td>{{ $ps->name }}</td>
                    <td>{{ $exr->ps ? explode(',', $exr->ps)[$loop->index] : '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
