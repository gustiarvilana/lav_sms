@extends('layouts.login_master')

@section('content')
    <div class="page-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold text-center">KEBIJAKAN PRIVASI</h1>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                                <p>Terakhir diubah: 4 November 2019</p>

                                <h4 class="font-weight-semibold">Pendahuluan</h4>

                                <p>{{ $app_name }} ("Kami") menghormati privasi Anda dan berkomitmen untuk melindunginya
                                    melalui kepatuhan kami terhadap kebijakan ini.</p>

                                <p>Kebijakan ini menjelaskan jenis informasi yang mungkin kami kumpulkan dari Anda atau yang
                                    mungkin Anda berikan saat Anda mengunjungi situs web
                                    <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a> ("Situs Web" kami)
                                    dan praktik kami untuk mengumpulkan, menggunakan, memelihara, melindungi, dan
                                    mengungkapkan informasi tersebut.
                                </p>

                                <p>Kebijakan ini berlaku untuk informasi yang kami kumpulkan:</p>

                                <ul>
                                    <li>Di Situs Web ini.</li>
                                    <li>Dalam email, teks, dan pesan elektronik lainnya antara Anda dan Situs Web ini.</li>
                                </ul>

                                <p> Mohon baca kebijakan ini dengan saksama untuk memahami kebijakan dan praktik kami
                                    mengenai informasi Anda dan cara kami akan memperlakukannya. Jika Anda tidak setuju
                                    dengan kebijakan dan praktik kami, pilihan Anda adalah tidak menggunakan Situs Web kami.
                                    Dengan mengakses atau menggunakan Situs Web ini, Anda menyetujui kebijakan privasi ini.
                                    Kebijakan ini dapat berubah dari waktu ke waktu (lihat Perubahan pada Kebijakan Privasi
                                    Kami). Penggunaan terus-menerus Anda terhadap Situs Web ini setelah kami melakukan
                                    perubahan dianggap sebagai penerimaan atas perubahan tersebut, jadi silakan periksa
                                    kebijakan ini secara berkala untuk pembaruan.</p>

                                <h4 class="font-weight-semibold">Anak-anak di Bawah Usia 13 Tahun</h4>

                                <p> Kami tidak secara sadar mengumpulkan informasi pribadi dari anak-anak di bawah 13 tahun.
                                    Jika Anda berusia di bawah 13 tahun, jangan berikan informasi apa pun di Situs Web ini
                                    atau melalui fitur-fiturnya tanpa terlebih dahulu mendapatkan persetujuan orang tua.
                                    Jika kami mengetahui bahwa kami telah mengumpulkan atau menerima informasi pribadi dari
                                    anak di bawah 13 tahun tanpa verifikasi persetujuan orang tua, kami akan menghapus
                                    informasi tersebut. Jika Anda yakin kami mungkin memiliki informasi dari atau tentang
                                    anak di bawah 13 tahun, silakan hubungi {{ $contact_phone }}</p>

                                <h4 class="font-weight-semibold">Informasi yang Kami Kumpulkan Tentang Anda dan Cara Kami
                                    Mengumpulkannya</h4>

                                <p>Kami mengumpulkan beberapa jenis informasi dari dan tentang pengguna Situs Web kami,
                                    termasuk informasi:</p>

                                <ul>
                                    <li>yang dapat mengidentifikasi Anda secara pribadi ("informasi pribadi");</li>
                                    <li>tentang Anda tetapi secara individu tidak mengidentifikasi Anda; dan/atau</li>
                                    <li>tentang koneksi internet Anda, peralatan yang Anda gunakan untuk mengakses Situs Web
                                        kami, dan detail penggunaan.</li>
                                </ul>

                                <p>Kami mengumpulkan informasi ini:</p>

                                <ul>
                                    <li>Langsung dari Anda saat Anda memberikannya kepada kami.</li>
                                    <li>Secara otomatis saat Anda menavigasi situs. Informasi yang dikumpulkan secara
                                        otomatis dapat mencakup detail penggunaan, alamat IP, dan informasi yang dikumpulkan
                                        melalui cookies atau teknologi pelacakan lainnya.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Informasi yang Anda Berikan kepada Kami. Informasi yang
                                    kami kumpulkan di atau melalui Situs Web kami mungkin termasuk:</h4>

                                <ul>
                                    <li>Informasi yang Anda berikan dengan mengisi formulir atau survei di Situs Web kami.
                                        Informasi pribadi yang dikirimkan tidak akan dialihkan ke pihak ketiga yang tidak
                                        terafiliasi kecuali dinyatakan lain pada saat pengumpulan. Saat Anda mengirimkan
                                        informasi pribadi, informasi tersebut hanya digunakan untuk tujuan yang dinyatakan
                                        pada saat pengumpulan.</li>
                                    <li>Catatan dan salinan korespondensi Anda (termasuk alamat email), jika Anda
                                        menghubungi kami.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Informasi yang Kami Kumpulkan Melalui Teknologi Pengumpulan
                                    Data Otomatis:</h4>

                                <p>Saat Anda menavigasi dan berinteraksi dengan Situs Web kami, kami dapat menggunakan
                                    teknologi pengumpulan data otomatis untuk mengumpulkan informasi tertentu tentang
                                    peralatan Anda, tindakan penelusuran, dan pola, termasuk:</p>

                                <ul>
                                    <li>Detail kunjungan Anda ke Situs Web kami, termasuk data lalu lintas, data lokasi,
                                        log, dan data komunikasi lainnya serta sumber daya yang Anda akses dan gunakan di
                                        Situs Web.</li>
                                    <li>Informasi tentang komputer dan koneksi internet Anda, termasuk alamat IP, sistem
                                        operasi, dan jenis peramban Anda.</li>
                                </ul>

                                <p>Informasi yang kami kumpulkan secara otomatis adalah data statistik dan mungkin termasuk
                                    informasi pribadi, dan kami dapat memeliharanya atau mengaitkannya dengan informasi
                                    pribadi yang kami kumpulkan dengan cara lain atau terima dari pihak ketiga. Ini membantu
                                    kami untuk meningkatkan Situs Web kami dan untuk memberikan layanan yang lebih baik dan
                                    lebih personal, termasuk dengan memungkinkan kami untuk:</p>

                                <ul>
                                    <li>Memperkirakan ukuran audiens dan pola penggunaan kami.</li>
                                    <li>Mempercepat pencarian Anda.</li>
                                    <li>Mengenali Anda saat Anda kembali ke Situs Web kami.</li>
                                </ul>

                                <p>Teknologi yang kami gunakan untuk pengumpulan data otomatis ini mungkin termasuk:</p>

                                <ul>
                                    <li><strong>Cookies</strong> (atau cookies peramban). Cookie adalah file kecil yang
                                        ditempatkan di hard drive komputer Anda. Anda dapat menolak untuk menerima cookies
                                        peramban dengan mengaktifkan pengaturan yang sesuai pada peramban Anda. Namun, jika
                                        Anda memilih pengaturan ini, Anda mungkin tidak dapat mengakses bagian-bagian
                                        tertentu dari Situs Web kami. Kecuali Anda telah menyesuaikan pengaturan peramban
                                        Anda sehingga akan menolak cookies, sistem kami akan mengeluarkan cookies saat Anda
                                        mengarahkan peramban Anda ke Situs Web kami.</li>
                                    <li><strong>Flash Cookies.</strong> Fitur-fitur tertentu dari Situs Web kami dapat
                                        menggunakan objek yang disimpan secara lokal (atau Flash cookies) untuk mengumpulkan
                                        dan menyimpan informasi tentang preferensi dan navigasi Anda ke, dari, dan di Situs
                                        Web kami. Flash cookies tidak dikelola oleh pengaturan peramban yang sama dengan
                                        yang digunakan untuk cookies peramban. Untuk informasi tentang mengelola pengaturan
                                        privasi dan keamanan Anda untuk Flash cookies, lihat Pilihan Mengenai Cara Kami
                                        Menggunakan dan Mengungkapkan Informasi Anda.</li>
                                    <li><strong>Web Beacons.</strong> Halaman-halaman Situs Web kami mungkin berisi file
                                        elektronik kecil yang dikenal sebagai web beacons (juga disebut sebagai clear gifs,
                                        pixel tags, dan single-pixel gifs) yang memungkinkan kami, misalnya, untuk
                                        menghitung pengguna yang telah mengunjungi halaman-halaman tersebut dan untuk
                                        statistik situs web terkait lainnya (misalnya, merekam popularitas konten situs web
                                        tertentu dan memverifikasi integritas sistem dan server).</li>
                                </ul>

                                <h4 class="font-weight-semibold">Bagaimana Kami Menggunakan Informasi Anda</h4>

                                <p>Kami menggunakan informasi yang kami kumpulkan tentang Anda atau yang Anda berikan kepada
                                    kami, termasuk informasi pribadi apa pun:</p>

                                <ul>
                                    <li>Untuk menyajikan Situs Web dan isinya kepada Anda.</li>
                                    <li>Untuk memungkinkan Anda berpartisipasi dalam fitur interaktif di Situs Web kami.
                                    </li>
                                    <li>Dengan cara lain apa pun yang mungkin kami jelaskan saat Anda memberikan informasi
                                        tersebut.</li>
                                    <li>Untuk tujuan lain apa pun dengan persetujuan Anda.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Pengungkapan Informasi Anda</h4>

                                <p>Kami dapat mengungkapkan informasi agregat tentang pengguna kami, dan informasi yang
                                    tidak mengidentifikasi individu mana pun, tanpa batasan.</p>

                                <p>Kami dapat mengungkapkan informasi pribadi yang kami kumpulkan atau Anda berikan seperti
                                    yang dijelaskan dalam kebijakan privasi ini:</p>

                                <ul>
                                    <li>Untuk memenuhi tujuan Anda memberikannya.</li>
                                    <li>Untuk tujuan lain apa pun yang kami ungkapkan saat Anda memberikan informasi
                                        tersebut.</li>
                                    <li>Dengan persetujuan Anda.</li>
                                </ul>

                                <p>Kami juga dapat mengungkapkan informasi pribadi Anda:</p>

                                <ul>
                                    <li>Untuk mematuhi perintah pengadilan, undang-undang, atau proses hukum apa pun,
                                        termasuk untuk menanggapi permintaan pemerintah atau peraturan.</li>
                                    <li>Untuk menegakkan atau menerapkan <a target="_blank"
                                            href="{{ route('terms_of_use') }}">Ketentuan Penggunaan</a> kami.</li>
                                    <li>Jika kami yakin pengungkapan diperlukan atau sesuai untuk melindungi hak, properti,
                                        atau keselamatan siswa atau orang lain.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Pilihan Mengenai Cara Kami Menggunakan dan Mengungkapkan
                                    Informasi Anda</h4>
                                <p>Kami berusaha untuk memberi Anda pilihan mengenai informasi pribadi yang Anda berikan
                                    kepada kami. Kami telah membuat mekanisme untuk memberi Anda kontrol berikut atas
                                    informasi Anda:</p>

                                <ul>
                                    <li><strong>Teknologi Pelacakan dan Iklan</strong>. Anda dapat mengatur peramban Anda
                                        untuk menolak semua atau sebagian cookies peramban, atau untuk memberi tahu Anda
                                        saat cookies dikirim. Untuk mempelajari cara Anda dapat mengelola pengaturan Flash
                                        cookie Anda, kunjungi halaman pengaturan pemutar Flash di situs web Adobe. Jika Anda
                                        menonaktifkan atau menolak cookies, harap dicatat bahwa beberapa bagian dari situs
                                        ini mungkin tidak dapat diakses atau tidak berfungsi dengan baik.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Keamanan Data</h4>

                                <p>Kami telah menerapkan langkah-langkah yang dirancang untuk mengamankan informasi pribadi
                                    Anda dari kehilangan yang tidak disengaja dan dari akses, penggunaan, perubahan, dan
                                    pengungkapan yang tidak sah.</p>

                                <h4 class="font-weight-semibold">Perubahan pada Kebijakan Privasi Kami</h4>

                                <p> Merupakan kebijakan kami untuk memposting setiap perubahan yang kami buat pada kebijakan
                                    privasi kami di halaman ini. Jika kami membuat perubahan material pada cara kami
                                    memperlakukan informasi pribadi pengguna kami, kami akan memberi tahu Anda melalui
                                    pemberitahuan di halaman beranda Situs Web. Tanggal terakhir kebijakan privasi direvisi
                                    diidentifikasi di bagian atas halaman. Anda bertanggung jawab untuk secara berkala
                                    mengunjungi Situs Web kami dan kebijakan privasi ini untuk memeriksa setiap perubahan.
                                </p>

                                <h4 class="font-weight-semibold">Informasi Kontak</h4>

                                <p>Untuk mengajukan pertanyaan atau memberikan komentar tentang kebijakan privasi ini dan
                                    praktik privasi kami, silakan hubungi {{ $contact_phone }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
