<div>
    <table class="td-left" style="border-collapse:collapse;">
        <tbody>
            <tr>
                <td><strong>KOMENTAR GURU KELAS:</strong></td>
                <td> {{ $exr->t_comment ?: str_repeat('__', 40) }}</td>
            </tr>
            <tr>
                <td><strong>KOMENTAR KEPALA SEKOLAH:</strong></td>
                <td> {{ $exr->p_comment ?: str_repeat('__', 40) }}</td>
            </tr>
            <tr>
                <td><strong>SEMESTER BERIKUTNYA DIMULAI:</strong></td>
                <td>{{ date('l\, jS F\, Y', strtotime($s['term_begins'])) }}</td>
            </tr>
            <tr>
                <td><strong>BIAYA SEMESTER BERIKUTNYA:</strong></td>
                {{-- Menggunakan operator '??' untuk menangani kunci yang tidak ada --}}
                <td><del
                        style="text-decoration-style: double">N</del>{{ $s['next_term_fees_' . strtolower($ct)] ?? '0' }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
