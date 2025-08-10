@extends('layouts.login_master')

@section('content')
    <div class="page-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold text-center">KETENTUAN PENGGUNAAN</h1>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                                <p>Terakhir diubah: 4 November 2019</p>

                                <h4 class="font-weight-semibold">Penerimaan Ketentuan Penggunaan</h4>

                                <p>Ketentuan penggunaan ini dibuat antara Anda dan {{ $app_name }} ("kami"). Syarat dan
                                    ketentuan berikut serta semua dokumen yang dimasukkan sebagai referensi (secara
                                    kolektif, "Ketentuan Penggunaan"), mengatur akses Anda ke dan penggunaan <a
                                        target="_blank" href="{{ $app_url }}">{{ $app_url }}</a>, termasuk konten,
                                    fungsionalitas, dan layanan apa pun yang ditawarkan di atau melalui <a target="_blank"
                                        href="{{ $app_url }}">{{ $app_url }}</a> ("Situs Web").</p>

                                <p>Harap baca Ketentuan Penggunaan dengan saksama sebelum Anda mulai menggunakan Situs Web.
                                    Dengan menggunakan Situs Web, Anda menerima dan menyetujui untuk terikat dan mematuhi
                                    Ketentuan Penggunaan ini dan Kebijakan Privasi kami, yang dapat ditemukan di <a
                                        target="_blank"
                                        href="{{ route('privacy_policy') }}">{{ route('privacy_policy') }}</a>, yang
                                    dimasukkan di sini sebagai referensi. Jika Anda tidak ingin menyetujui Ketentuan
                                    Penggunaan ini atau Kebijakan Privasi, Anda tidak boleh mengakses atau menggunakan Situs
                                    Web.</p>

                                <h4 class="font-weight-semibold">Perubahan pada Ketentuan Penggunaan</h4>

                                <p>Kami dapat merevisi dan memperbarui Ketentuan Penggunaan ini dari waktu ke waktu atas
                                    kebijakan kami sendiri. Semua perubahan berlaku segera setelah kami mempostingnya.
                                    Namun, setiap perubahan pada ketentuan penyelesaian sengketa yang ditetapkan dalam Hukum
                                    yang Mengatur dan Yurisdiksi tidak akan berlaku untuk sengketa apa pun yang telah
                                    diketahui oleh para pihak sebelum tanggal perubahan diposting di Situs Web.</p>

                                <p>Penggunaan terus-menerus Anda terhadap Situs Web setelah posting Ketentuan Penggunaan
                                    yang direvisi berarti bahwa Anda menerima dan menyetujui perubahan tersebut. Anda
                                    diharapkan untuk memeriksa halaman ini dari waktu ke waktu agar Anda mengetahui setiap
                                    perubahan, karena perubahan tersebut mengikat Anda.</p>

                                <h4 class="font-weight-semibold">Akses ke Situs Web dan Keamanan Akun</h4>
                                <p>Kami berhak untuk menarik atau mengubah Situs Web ini, serta layanan atau materi apa pun
                                    yang kami sediakan di Situs Web, atas kebijakan kami sendiri tanpa pemberitahuan. Kami
                                    tidak akan bertanggung jawab jika karena alasan apa pun seluruh atau sebagian Situs Web
                                    tidak tersedia kapan saja atau untuk periode apa pun. Dari waktu ke waktu, kami dapat
                                    membatasi akses ke beberapa bagian Situs Web, atau seluruh Situs Web, kepada pengguna.
                                </p>

                                <h3>Pasal I</h3>
                                <p>Anda bertanggung jawab untuk:</p>

                                <ul>
                                    <li>Membuat semua pengaturan yang diperlukan bagi Anda untuk memiliki akses ke Situs
                                        Web.</li>
                                    <li>Memastikan bahwa semua orang yang mengakses Situs Web melalui koneksi internet Anda
                                        mengetahui Ketentuan Penggunaan ini dan mematuhinya.</li>
                                </ul>

                                <p>Untuk mengakses Situs Web atau beberapa sumber daya yang ditawarkannya, Anda mungkin
                                    diminta untuk memberikan detail pendaftaran tertentu atau informasi lainnya. Merupakan
                                    syarat penggunaan Situs Web Anda bahwa semua informasi yang Anda berikan di Situs Web
                                    adalah benar, terkini, dan lengkap. Anda setuju bahwa semua informasi yang Anda berikan
                                    untuk mendaftar dengan Situs Web ini atau sebaliknya, termasuk tetapi tidak terbatas
                                    pada melalui penggunaan fitur interaktif apa pun di Situs Web, diatur oleh Kebijakan
                                    Privasi kami, dan Anda menyetujui semua tindakan yang kami ambil sehubungan dengan
                                    informasi Anda yang konsisten dengan Kebijakan Privasi kami.</p>

                                <p>Jika Anda memilih, atau diberikan, nama pengguna, kata sandi, atau bagian informasi
                                    lainnya sebagai bagian dari prosedur keamanan kami, Anda harus memperlakukan informasi
                                    tersebut sebagai rahasia, dan Anda tidak boleh mengungkapkannya kepada orang atau
                                    entitas lain mana pun. Anda juga mengakui bahwa akun Anda bersifat pribadi bagi Anda dan
                                    setuju untuk tidak memberikan akses kepada orang lain ke Situs Web ini atau
                                    bagian-bagiannya menggunakan nama pengguna, kata sandi, atau informasi keamanan Anda
                                    lainnya. Anda setuju untuk segera memberi tahu kami tentang setiap akses atau penggunaan
                                    nama pengguna atau kata sandi Anda yang tidak sah atau pelanggaran keamanan lainnya.
                                    Anda juga setuju untuk memastikan bahwa Anda keluar dari akun Anda di akhir setiap sesi.
                                    Anda harus berhati-hati saat mengakses akun Anda dari komputer publik atau bersama agar
                                    orang lain tidak dapat melihat atau merekam kata sandi atau informasi pribadi Anda
                                    lainnya.</p>

                                <p>Kami berhak untuk menonaktifkan nama pengguna, kata sandi, atau pengidentifikasi lainnya,
                                    baik yang dipilih oleh Anda atau yang kami berikan, kapan saja atas kebijakan kami
                                    sendiri karena alasan apa pun, termasuk jika, menurut pendapat kami, Anda telah
                                    melanggar ketentuan apa pun dari Ketentuan Penggunaan ini.</p>

                                <h4 class="font-weight-semibold">Hak Kekayaan Intelektual</h4>

                                <p> Situs Web dan seluruh isinya, fitur dan fungsionalitasnya (termasuk tetapi tidak
                                    terbatas pada semua informasi, perangkat lunak, teks, tampilan, gambar, video dan audio,
                                    serta desain, pemilihan, dan pengaturannya), dimiliki oleh kami, pemberi lisensi kami,
                                    atau penyedia lain dari materi tersebut dan dilindungi oleh undang-undang hak cipta,
                                    merek dagang, paten, rahasia dagang, dan hak kekayaan intelektual atau kepemilikan
                                    lainnya di Amerika Serikat dan internasional.</p>

                                <p>Ketentuan Penggunaan ini mengizinkan Anda untuk menggunakan Situs Web hanya untuk
                                    penggunaan pribadi dan non-komersial Anda. Anda tidak boleh mereproduksi,
                                    mendistribusikan, memodifikasi, membuat karya turunan, menampilkan secara publik,
                                    melakukan secara publik, menerbitkan ulang, mengunduh, menyimpan, atau mentransmisikan
                                    materi apa pun dari Situs Web kami yang melanggar hukum apa pun.</p>

                                <p>Anda tidak boleh mengakses atau menggunakan untuk tujuan komersial apa pun bagian mana
                                    pun dari Situs Web atau layanan atau materi apa pun yang tersedia melalui Situs Web.</p>

                                <h4 class="font-weight-semibold">Merek Dagang</h4>

                                <p>Nama {{ $app_name }} dan semua nama, logo, slogan, moto, dan desain terkait adalah
                                    merek dagang kami atau afiliasi atau pemberi lisensi kami. Anda tidak boleh menggunakan
                                    merek tersebut tanpa izin tertulis kami sebelumnya. Semua nama, logo, nama produk dan
                                    layanan, desain, dan slogan lain di Situs Web ini adalah merek dagang dari pemiliknya
                                    masing-masing.</p>

                                <h4 class="font-weight-semibold">Penggunaan yang Dilarang</h4>

                                <ul>
                                    <li>Anda dapat menggunakan Situs Web hanya untuk tujuan yang sah dan sesuai dengan
                                        Ketentuan Penggunaan ini. Anda setuju untuk tidak menggunakan Situs Web:</li>
                                    <li>Dengan cara apa pun yang melanggar hukum atau peraturan federal, negara bagian,
                                        lokal, atau internasional yang berlaku (termasuk, tanpa batasan, undang-undang apa
                                        pun mengenai ekspor data atau perangkat lunak ke dan dari AS atau negara lain).</li>
                                    <li>Untuk tujuan mengeksploitasi, membahayakan atau mencoba mengeksploitasi atau
                                        membahayakan anak di bawah umur dengan cara apa pun dengan memaparkan mereka pada
                                        konten yang tidak pantas, meminta informasi yang dapat diidentifikasi secara
                                        pribadi, atau sebaliknya.</li>
                                    <li>Untuk mengirim, secara sadar menerima, mengunggah, mengunduh, menggunakan, atau
                                        menggunakan kembali materi apa pun yang tidak mematuhi Standar Konten yang
                                        ditetapkan dalam Ketentuan Penggunaan ini.</li>
                                    <li>Untuk mengirimkan, atau mendapatkan pengiriman, materi iklan atau promosi apa pun
                                        tanpa persetujuan tertulis kami sebelumnya, termasuk "surat sampah", "surat
                                        berantai" atau "spam" atau permintaan serupa lainnya.</li>
                                    <li>Untuk meniru atau mencoba meniru kami, salah satu karyawan kami, pengguna lain atau
                                        orang atau entitas lain (termasuk, tanpa batasan, dengan menggunakan alamat email
                                        atau nama layar yang terkait dengan salah satu hal di atas.)</li>
                                    <li>Untuk terlibat dalam perilaku lain apa pun yang membatasi atau menghambat penggunaan
                                        atau kenikmatan Situs Web oleh siapa pun, atau yang, sebagaimana ditentukan oleh
                                        kami, dapat membahayakan kami atau pengguna Situs Web atau membuat mereka
                                        bertanggung jawab.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Selain Itu, Anda Setuju untuk Tidak:</h4>
                                <ul>
                                    <li>Menggunakan Situs Web dengan cara apa pun yang dapat menonaktifkan, membebani,
                                        merusak, atau mengganggu situs atau mengganggu penggunaan Situs Web oleh pihak lain
                                        mana pun, termasuk kemampuan mereka untuk terlibat dalam aktivitas waktu nyata
                                        melalui Situs Web.</li>
                                    <li>Menggunakan robot, spider, atau perangkat otomatis lainnya, proses atau sarana untuk
                                        mengakses Situs Web untuk tujuan apa pun, termasuk memantau atau menyalin materi apa
                                        pun di Situs Web.</li>
                                    <li>Menggunakan proses manual apa pun untuk memantau atau menyalin materi apa pun di
                                        Situs Web atau untuk tujuan tidak sah lainnya tanpa persetujuan tertulis kami
                                        sebelumnya.</li>
                                    <li>Menggunakan perangkat, perangkat lunak, atau rutinitas apa pun yang mengganggu kerja
                                        Situs Web yang semestinya.</li>
                                    <li>Memperkenalkan virus, trojan, worm, bom logika, atau materi lain apa pun yang
                                        berbahaya atau merusak secara teknologi.</li>
                                    <li>Mencoba mendapatkan akses tidak sah ke, mengganggu, merusak, atau mengganggu bagian
                                        mana pun dari Situs Web, server tempat Situs Web disimpan, atau server, komputer,
                                        atau basis data apa pun yang terhubung ke Situs Web.</li>
                                    <li>Menyerang Situs Web melalui serangan denial-of-service atau serangan
                                        denial-of-service terdistribusi.</li>
                                    <li>Menggunakan Situs Web dengan cara apa pun yang melanggar kebijakan, aturan, atau
                                        prosedur {{ $app_name }} yang berlaku.</li>
                                    <li>Menggunakan Situs Web dengan cara apa pun yang bertentangan dengan tradisi, iman,
                                        dan moral Katolik Mercy atau warisan pendidikan Katolik Mercy.</li>
                                    <li>Atau mencoba mengganggu kerja Situs Web yang semestinya.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Kontribusi Pengguna</h4>

                                <p>Situs Web mungkin berisi papan pesan, ruang obrolan, halaman web pribadi atau profil,
                                    forum, papan buletin, dan fitur interaktif lainnya (secara kolektif, "Layanan
                                    Interaktif") yang memungkinkan pengguna untuk memposting, mengirimkan, menerbitkan,
                                    menampilkan, atau mentransmisikan kepada pengguna lain atau orang lain (selanjutnya,
                                    "memposting") konten atau materi (secara kolektif, "Kontribusi Pengguna") di atau
                                    melalui Situs Web.</p>

                                <p>Semua Kontribusi Pengguna harus sepenuhnya mematuhi Standar Konten yang ditetapkan dalam
                                    Ketentuan Penggunaan ini.</p>

                                <p>Kontribusi Pengguna apa pun yang Anda posting ke situs akan dianggap tidak rahasia dan
                                    non-proprietary. Dengan menyediakan Kontribusi Pengguna apa pun di Situs Web, Anda
                                    memberikan hak kepada kami dan pemberi lisensi, penerus, dan penerima kami untuk
                                    menggunakan, mereproduksi, memodifikasi, melakukan, menampilkan, mendistribusikan, dan
                                    mengungkapkan materi tersebut kepada pihak ketiga.</p>

                                <p>Anda menyatakan dan menjamin bahwa:</p>

                                <ul>
                                    <li>Anda memiliki atau mengontrol semua hak atas dan pada Kontribusi Pengguna dan
                                        memiliki hak untuk memberikan lisensi yang diberikan di atas kepada kami dan pemberi
                                        lisensi, penerus, dan penerima kami.</li>
                                    <li> Semua Kontribusi Pengguna Anda mematuhi dan akan mematuhi Ketentuan Penggunaan ini.
                                    </li>
                                </ul>

                                <p>Anda memahami dan mengakui bahwa Anda bertanggung jawab atas Kontribusi Pengguna apa pun
                                    yang Anda kirimkan atau kontribusikan, dan Anda, bukan kami, memiliki tanggung jawab
                                    penuh atas konten tersebut, termasuk legalitas, keandalan, keakuratan, dan
                                    kesesuaiannya.</p>

                                <p>Kami tidak bertanggung jawab, atau berkewajiban kepada pihak ketiga mana pun, atas konten
                                    atau keakuratan Kontribusi Pengguna apa pun yang diposting oleh Anda atau pengguna lain
                                    dari Situs Web.</p>

                                <h4 class="font-weight-semibold">Pemantauan dan Penegakan; Penghentian</h4>
                                <p>Kami berhak untuk:</p>

                                <ul>
                                    <li>Menghapus atau menolak untuk memposting Kontribusi Pengguna apa pun karena alasan
                                        apa pun atau tanpa alasan atas kebijakan kami sendiri.</li>
                                    <li>Mengambil tindakan apa pun sehubungan dengan Kontribusi Pengguna apa pun yang kami
                                        anggap perlu atau sesuai atas kebijakan kami sendiri, termasuk jika kami yakin bahwa
                                        Kontribusi Pengguna tersebut melanggar Ketentuan Penggunaan, termasuk Standar
                                        Konten, melanggar hak kekayaan intelektual atau hak lain dari orang atau entitas
                                        mana pun, mengancam keselamatan pribadi pengguna Situs Web atau publik atau dapat
                                        menimbulkan tanggung jawab bagi kami.</li>
                                    <li>Mengungkapkan identitas Anda atau informasi lain tentang Anda kepada pihak ketiga
                                        mana pun yang mengklaim bahwa materi yang diposting oleh Anda melanggar hak mereka,
                                        termasuk hak kekayaan intelektual atau hak privasi mereka.</li>
                                    <li>Mengambil tindakan hukum yang sesuai, termasuk tanpa batasan, rujukan ke penegak
                                        hukum, untuk setiap penggunaan Situs Web yang ilegal atau tidak sah.</li>
                                    <li> Menghentikan atau menangguhkan akses Anda ke semua atau sebagian Situs Web karena
                                        alasan apa pun atau tanpa alasan, termasuk tanpa batasan, setiap pelanggaran
                                        Ketentuan Penggunaan ini.</li>
                                </ul>

                                <p> Tanpa membatasi hal tersebut di atas, kami berhak untuk sepenuhnya bekerja sama dengan
                                    otoritas penegak hukum atau perintah pengadilan apa pun yang meminta atau mengarahkan
                                    kami untuk mengungkapkan identitas atau informasi lain dari siapa pun yang memposting
                                    materi apa pun di atau melalui Situs Web.</p>

                                <p>ANDA MELEPAS DAN MEMBEBASKAN {{ strtoupper($app_name) }} DARI KLAIM APA PUN YANG TIMBUL
                                    DARI TINDAKAN APA PUN YANG DIAMBIL OLEH {{ strtoupper($app_name) }} SELAMA ATAU SEBAGAI
                                    AKIBAT DARI INVESTIGASINYA DAN DARI TINDAKAN APA PUN YANG DIAMBIL SEBAGAI KONSEKUENSI
                                    DARI INVESTIGASI OLEH {{ strtoupper($app_name) }} ATAU OTORITAS PENEGAK HUKUM.</p>

                                <p>Namun, kami tidak berjanji untuk meninjau semua materi sebelum diposting di Situs Web,
                                    dan tidak dapat memastikan penghapusan materi yang tidak pantas secara cepat setelah
                                    diposting. Oleh karena itu, kami tidak bertanggung jawab atas tindakan atau kelambanan
                                    apa pun mengenai transmisi, komunikasi, atau konten yang disediakan oleh pengguna atau
                                    pihak ketiga mana pun. Kami tidak memiliki kewajiban atau tanggung jawab kepada siapa
                                    pun atas kinerja atau non-kinerja aktivitas yang dijelaskan dalam bagian ini.</p>

                                <h4 class="font-weight-semibold">Standar Konten</h4>

                                <p>Standar konten ini berlaku untuk setiap dan semua Kontribusi Pengguna dan penggunaan
                                    Layanan Interaktif. Kontribusi Pengguna harus sepenuhnya mematuhi semua hukum dan
                                    peraturan federal, negara bagian, lokal, dan internasional yang berlaku. Tanpa membatasi
                                    hal tersebut di atas, Kontribusi Pengguna tidak boleh:</p>

                                <ul>
                                    <li> Berisi materi apa pun yang memfitnah, cabul, tidak senonoh, kasar, menyinggung,
                                        melecehkan, kejam, penuh kebencian, menghasut atau tidak menyenangkan lainnya.</li>
                                    <li> Mempromosikan materi seksual eksplisit atau pornografi, kekerasan, atau
                                        diskriminasi berdasarkan ras, jenis kelamin, agama, kebangsaan, disabilitas,
                                        orientasi seksual, atau usia.</li>
                                    <li> Melanggar paten, merek dagang, rahasia dagang, hak cipta, atau kekayaan intelektual
                                        lainnya atau hak lain dari orang lain mana pun.</li>
                                    <li>Melanggar hak hukum (termasuk hak publisitas dan privasi) orang lain atau berisi
                                        materi apa pun yang dapat menimbulkan tanggung jawab perdata atau pidana berdasarkan
                                        hukum atau peraturan yang berlaku atau yang dapat bertentangan dengan Ketentuan
                                        Penggunaan ini dan <a target="_blank"
                                            href="{{ route('privacy_policy') }}">Kebijakan Privasi</a> kami.</li>
                                    <li>Cenderung menipu siapa pun.</li>
                                    <li>Mempromosikan aktivitas ilegal apa pun, atau menganjurkan, mempromosikan, atau
                                        membantu tindakan melanggar hukum apa pun.</li>
                                    <li>Menyebabkan gangguan, ketidaknyamanan, atau kecemasan yang tidak perlu atau
                                        cenderung membuat orang lain kesal, malu, khawatir, atau jengkel.</li>
                                    <li>Meniru orang lain, atau salah menggambarkan identitas atau afiliasi Anda dengan
                                        orang atau organisasi mana pun.</li>
                                    <li>Melibatkan aktivitas atau penjualan komersial, seperti kontes, undian, dan promosi
                                        penjualan lainnya, barter, atau iklan.</li>
                                    <li>Memberikan kesan bahwa mereka berasal dari atau didukung oleh kami atau orang atau
                                        entitas lain mana pun, jika ini tidak benar.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Pelanggaran Hak Cipta</h4>
                                <p>Jika Anda yakin bahwa Kontribusi Pengguna apa pun melanggar hak cipta Anda, silakan
                                    hubungi kami</p>

                                <h5 class="font-weight-semibold">Ketergantungan pada Informasi yang Diposting</h5>

                                <p>Informasi yang disajikan di atau melalui Situs Web disediakan semata-mata untuk tujuan
                                    informasi umum. Kami tidak menjamin keakuratan, kelengkapan, atau kegunaan informasi
                                    ini. Setiap ketergantungan yang Anda tempatkan pada informasi tersebut sepenuhnya atas
                                    risiko Anda sendiri. Kami menolak semua tanggung jawab dan kewajiban yang timbul dari
                                    ketergantungan apa pun pada materi tersebut oleh Anda atau pengunjung lain ke Situs Web,
                                    atau oleh siapa pun yang mungkin diberi tahu tentang isinya.</p>

                                <p>Situs Web ini mungkin menyertakan konten yang disediakan oleh pihak ketiga, termasuk
                                    materi yang disediakan oleh pengguna lain, blogger, dan pemberi lisensi pihak ketiga,
                                    sindikator, agregator, dan/atau layanan pelaporan. Semua pernyataan dan/atau pendapat
                                    yang diungkapkan dalam materi ini, dan semua artikel dan tanggapan terhadap pertanyaan
                                    dan konten lainnya, selain konten yang disediakan oleh kami, semata-mata merupakan
                                    pendapat dan tanggung jawab orang atau entitas yang menyediakan materi tersebut. Materi
                                    ini tidak selalu mencerminkan pendapat kami. Kami tidak bertanggung jawab, atau
                                    berkewajiban kepada Anda atau pihak ketiga mana pun, atas konten atau keakuratan materi
                                    apa pun yang disediakan oleh pihak ketiga mana pun.</p>

                                <h4 class="font-weight-semibold">Perubahan pada Situs Web</h4>
                                <p>Kami dapat memperbarui konten di Situs Web ini dari waktu ke waktu, tetapi isinya tidak
                                    selalu lengkap atau terkini. Materi apa pun di Situs Web mungkin sudah usang pada waktu
                                    tertentu, dan kami tidak memiliki kewajiban untuk memperbarui materi tersebut.</p>

                                <p>Informasi Tentang Anda dan Kunjungan Anda ke Situs Web</p>

                                <p>Semua informasi yang kami kumpulkan di Situs Web ini tunduk pada Kebijakan Privasi kami.
                                    Dengan menggunakan Situs Web, Anda menyetujui semua tindakan yang kami ambil sehubungan
                                    dengan informasi Anda sesuai dengan <a target="_blank"
                                        href="{{ route('privacy_policy') }}">Kebijakan Privasi</a>.</p>

                                <h3>Pasal II</h3>

                                <h4 class="font-weight-semibold">Menautkan ke Situs Web dan Fitur Media Sosial</h4>

                                <p>Anda dapat menautkan ke beranda kami, asalkan Anda melakukannya dengan cara yang adil dan
                                    legal dan tidak merusak reputasi kami atau memanfaatkannya, tetapi Anda tidak boleh
                                    membuat tautan dengan cara yang menyarankan bentuk asosiasi, persetujuan, atau dukungan
                                    apa pun di pihak kami tanpa persetujuan tertulis kami. </p>

                                <p>Anda setuju untuk bekerja sama dengan kami dalam menghapus tautan apa pun yang kami minta
                                    untuk Anda hapus. Kami berhak untuk menarik izin penautan tanpa pemberitahuan.</p>

                                <p>Kami dapat menonaktifkan semua atau fitur media sosial apa pun dan tautan apa pun kapan
                                    saja tanpa pemberitahuan atas kebijakan kami.</p>

                                <h4 class="font-weight-semibold">Tautan dari Situs Web</h4>

                                <p>Jika Situs Web berisi tautan ke situs lain dan sumber daya yang disediakan oleh pihak
                                    ketiga, tautan ini disediakan hanya untuk kenyamanan Anda. Ini termasuk tautan yang
                                    terkandung dalam iklan, termasuk iklan spanduk dan tautan sponsor. Kami tidak memiliki
                                    kendali atas isi situs atau sumber daya tersebut, dan tidak bertanggung jawab atasnya
                                    atau atas kehilangan atau kerusakan apa pun yang mungkin timbul dari penggunaan Anda
                                    atasnya. Jika Anda memutuskan untuk mengakses situs web pihak ketiga mana pun yang
                                    terhubung ke Situs Web ini, Anda melakukannya sepenuhnya atas risiko Anda sendiri dan
                                    tunduk pada syarat dan ketentuan penggunaan untuk situs web tersebut.</p>

                                <h4 class="font-weight-semibold">Penolakan Jaminan</h4>

                                <p>Anda memahami bahwa kami tidak dapat dan tidak menjamin bahwa file yang tersedia untuk
                                    diunduh dari internet atau Situs Web akan bebas dari virus atau kode destruktif lainnya.
                                    Anda bertanggung jawab untuk menerapkan prosedur dan pos pemeriksaan yang memadai untuk
                                    memenuhi persyaratan khusus Anda untuk perlindungan anti-virus dan keakuratan input dan
                                    output data, dan untuk memelihara sarana eksternal ke situs kami untuk rekonstruksi data
                                    yang hilang. KAMI TIDAK AKAN BERTANGGUNG JAWAB ATAS KEHILANGAN ATAU KERUSAKAN APA PUN
                                    YANG DISEBABKAN OLEH SERANGAN DENIAL-OF-SERVICE TERDISTRIBUSI, VIRUS, ATAU MATERI
                                    BERBAHAYA SECARA TEKNOLOGI LAINNYA YANG DAPAT MENGINFEKSI PERALATAN KOMPUTER, PROGRAM
                                    KOMPUTER, DATA, ATAU MATERI KEPEMILIKAN LAINNYA KARENA PENGGUNAAN SITUS WEB ATAU LAYANAN
                                    ATAU ITEM APA PUN YANG DIPEROLEH MELALUI SITUS WEB ATAU PENGUNDUHAN MATERI APA PUN YANG
                                    DIPOSTING DI ATASNYA, ATAU DI SITUS WEB APA PUN YANG TERKAIT DENGANNYA.</p>

                                <p>PENGGUNAAN SITUS WEB, KONTENNYA, DAN LAYANAN ATAU ITEM APA PUN YANG DIPEROLEH MELALUI
                                    SITUS WEB ADALAH ATAS RISIKO ANDA SENDIRI. SITUS WEB, KONTENNYA, DAN LAYANAN ATAU ITEM
                                    APA PUN YANG DIPEROLEH MELALUI SITUS WEB DISEDIAKAN DALAM DASAR "SEBAGAIMANA ADANYA" DAN
                                    "SEBAGAIMANA TERSEDIA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN TERSIRAT. BAIK
                                    {{ strtoupper($app_name) }} MAUPUN ORANG LAIN YANG TERKAIT DENGAN
                                    {{ strtoupper($app_name) }} TIDAK MEMBUAT JAMINAN ATAU PERNYATAAN APA PUN SEHUBUNGAN
                                    DENGAN KELENGKAPAN, KEAMANAN, KEANDALAN, KUALITAS, KEAKURATAN ATAU KETERSEDIAAN SITUS
                                    WEB. TANPA MEMBATASI HAL TERSEBUT DI ATAS, BAIK {{ strtoupper($app_name) }} MAUPUN
                                    SIAPA PUN YANG TERKAIT DENGAN {{ strtoupper($app_name) }} TIDAK MENYATAKAN ATAU
                                    MENJAMIN BAHWA SITUS WEB, KONTENNYA, ATAU LAYANAN ATAU ITEM APA PUN YANG DIPEROLEH
                                    MELALUI SITUS WEB AKAN AKURAT, DAPAT DIANDALKAN, BEBAS KESALAHAN ATAU TIDAK TERGANGGU,
                                    BAHWA CACAT AKAN DIPERBAIKI, BAHWA SITUS KAMI ATAU SERVER YANG MEMBUATNYA TERSEDIA BEBAS
                                    DARI VIRUS ATAU KOMPONEN BERBAHAYA LAINNYA ATAU BAHWA SITUS WEB ATAU LAYANAN ATAU ITEM
                                    APA PUN YANG DIPEROLEH MELALUI SITUS WEB AKAN MEMENUHI KEBUTUHAN ATAU HARAPAN ANDA.</p>

                                <p>{{ strtoupper($app_name) }} DENGAN INI MENOLAK SEMUA JAMINAN DALAM BENTUK APA PUN, BAIK
                                    TERSURAT MAUPUN TERSIRAT, BERDASARKAN UNDANG-UNDANG ATAU SEBALIKNYA, TERMASUK TETAPI
                                    TIDAK TERBATAS PADA JAMINAN NON-PELANGGARAN APA PUN.</p>

                                <p>HAL-HAL DI ATAS TIDAK MEMPENGARUHI JAMINAN APA PUN YANG TIDAK DAPAT DIKECUALIKAN ATAU
                                    DIBATASI BERDASARKAN HUKUM YANG BERLAKU.</p>

                                <h4 class="font-weight-semibold">Batasan Tanggung Jawab</h4>

                                <p>DALAM KEADAAN APA PUN {{ strtoupper($app_name) }}, AFILIASINYA ATAU PEMBERI LISENSINYA,
                                    PENYEDIA LAYANAN, KARYAWAN, AGEN, PEJABAT ATAU DIREKTURNYA TIDAK AKAN BERTANGGUNG JAWAB
                                    ATAS KERUSAKAN DALAM BENTUK APA PUN, BERDASARKAN TEORI HUKUM APA PUN, YANG TIMBUL DARI
                                    ATAU SEHUBUNGAN DENGAN PENGGUNAAN ANDA, ATAU KETIDAKMAMPUAN ANDA UNTUK MENGGUNAKAN,
                                    SITUS WEB, SITUS WEB APA PUN YANG TERKAIT DENGANNYA, KONTEN APA PUN DI SITUS WEB ATAU
                                    SITUS WEB TERSEBUT ATAU LAYANAN ATAU ITEM APA PUN YANG DIPEROLEH MELALUI SITUS WEB ATAU
                                    SITUS WEB TERSEBUT, TERMASUK KERUSAKAN LANGSUNG, TIDAK LANGSUNG, KHUSUS, INSIDENTAL,
                                    KONSEKUENSIAL ATAU HUKUMAN, TERMASUK TETAPI TIDAK TERBATAS PADA, CEDERA PRIBADI, RASA
                                    SAKIT DAN PENDERITAAN, STRES EMOSIONAL, KEHILANGAN PENDAPATAN, KEHILANGAN KEUNTUNGAN,
                                    KEHILANGAN BISNIS ATAU TABUNGAN YANG DIHARAPKAN, KEHILANGAN PENGGUNAAN, KEHILANGAN NAMA
                                    BAIK, KEHILANGAN DATA, DAN BAIK DISEBABKAN OLEH PELANGGARAN HUKUM (TERMASUK KELALAIAN),
                                    PELANGGARAN KONTRAK ATAU SEBALIKNYA, MESKIPUN DAPAT DIPERKIRAKAN.</p>

                                <p>HAL-HAL DI ATAS TIDAK MEMPENGARUHI TANGGUNG JAWAB APA PUN YANG TIDAK DAPAT DIKECUALIKAN
                                    ATAU DIBATASI BERDASARKAN HUKUM YANG BERLAKU.</p>

                                <h4 class="font-weight-semibold">Ganti Rugi</h4>

                                <p>Anda setuju untuk membela, mengganti rugi, dan membebaskan {{ $app_name }},
                                    afiliasi, pemberi lisensi, dan penyedia layanannya, serta pejabat, direktur, karyawan,
                                    kontraktor, agen, pemberi lisensi, pemasok, penerus, dan penerima haknya dari dan
                                    terhadap setiap klaim, kewajiban, kerugian, putusan, penghargaan, kerugian, biaya,
                                    pengeluaran, atau biaya (termasuk biaya pengacara yang wajar) yang timbul dari atau
                                    terkait dengan pelanggaran Anda terhadap Ketentuan Penggunaan ini atau penggunaan Anda
                                    atas Situs Web, termasuk, tetapi tidak terbatas pada, Kontribusi Pengguna Anda, setiap
                                    penggunaan konten, layanan, dan produk Situs Web selain yang secara tegas diizinkan
                                    dalam Ketentuan Penggunaan ini atau penggunaan Anda atas informasi apa pun yang
                                    diperoleh dari Situs Web.</p>

                                <h4 class="font-weight-semibold">Hukum yang Mengatur dan Yurisdiksi</h4>

                                <p>Semua hal yang berkaitan dengan Situs Web dan Ketentuan Penggunaan ini dan setiap
                                    sengketa atau klaim yang timbul darinya atau terkait dengannya (dalam setiap kasus,
                                    termasuk sengketa atau klaim non-kontraktual), akan diatur oleh dan ditafsirkan sesuai
                                    dengan hukum Nigeria tanpa memberikan efek pada pilihan atau konflik ketentuan atau
                                    aturan hukum apa pun.</p>

                                <p>Setiap gugatan hukum, tindakan, atau proses yang timbul dari, atau terkait dengan,
                                    Ketentuan Penggunaan ini atau Situs Web akan diajukan secara eksklusif di pengadilan
                                    federal Nigeria, meskipun kami berhak untuk mengajukan gugatan, tindakan, atau proses
                                    apa pun terhadap Anda atas pelanggaran Ketentuan Penggunaan ini di negara tempat tinggal
                                    Anda atau negara lain yang relevan. Anda melepaskan setiap dan semua keberatan terhadap
                                    pelaksanaan yurisdiksi atas Anda oleh pengadilan tersebut dan terhadap tempat di
                                    pengadilan tersebut.</p>

                                <h4 class="font-weight-semibold">Arbitrase</h4>

                                <p>Atas kebijakan tunggal {{ $app_name }}, ia dapat meminta Anda untuk menyerahkan
                                    sengketa apa pun yang timbul dari penggunaan Ketentuan Penggunaan ini atau Situs Web,
                                    termasuk sengketa yang timbul dari atau menyangkut interpretasi, pelanggaran,
                                    ketidakabsahan, non-kinerja, atau pengakhirannya, ke arbitrase final dan mengikat
                                    berdasarkan Undang-Undang Arbitrase dan Konsiliasi Nigeria.</p>

                                <h4 class="font-weight-semibold">Batasan Waktu untuk Mengajukan Klaim</h4>

                                <p>SETIAP PENYEBAB TINDAKAN ATAU KLAIM YANG MUNGKIN ANDA MILIKI YANG TIMBUL DARI ATAU
                                    TERKAIT DENGAN KETENTUAN PENGGUNAAN INI ATAU SITUS WEB HARUS DIMULAI DALAM WAKTU SATU
                                    (1) TAHUN SETELAH PENYEBAB TINDAKAN TERSEBUT TIMBUL, JIKA TIDAK, PENYEBAB TINDAKAN ATAU
                                    KLAIM TERSEBUT DILARANG SECARA PERMANEN.</p>

                                <h4 class="font-weight-semibold">Pengabaian dan Keterpisahan</h4>

                                <p>Tidak ada pengabaian oleh {{ $app_name }} atas syarat atau ketentuan apa pun yang
                                    ditetapkan dalam Ketentuan Penggunaan ini yang akan dianggap sebagai pengabaian lebih
                                    lanjut atau berkelanjutan atas syarat atau ketentuan tersebut atau pengabaian atas
                                    syarat atau ketentuan lainnya, dan setiap kegagalan {{ $app_name }} untuk
                                    menegaskan hak atau ketentuan berdasarkan Ketentuan Penggunaan ini tidak akan merupakan
                                    pengabaian hak atau ketentuan tersebut.</p>

                                <p>Jika ada ketentuan dari Ketentuan Penggunaan ini yang dianggap oleh pengadilan atau
                                    tribunal lain dari yurisdiksi yang kompeten tidak sah, ilegal, atau tidak dapat
                                    ditegakkan karena alasan apa pun, ketentuan tersebut akan dihilangkan atau dibatasi
                                    seminimal mungkin sehingga ketentuan yang tersisa dari Ketentuan Penggunaan akan terus
                                    berlaku sepenuhnya.</p>

                                <h4 class="font-weight-semibold">Seluruh Perjanjian</h4>

                                <p>Ketentuan Penggunaan ini dan <a target="_blank"
                                        href="{{ route('privacy_policy') }}">Kebijakan Privasi</a> kami merupakan
                                    satu-satunya dan seluruh perjanjian antara Anda dan {{ $app_name }} sehubungan
                                    dengan Situs Web dan menggantikan semua pemahaman, perjanjian, representasi, dan jaminan
                                    sebelumnya dan pada saat yang sama, baik tertulis maupun lisan, sehubungan dengan Situs
                                    Web.</p>

                                <h5 class="font-weight-semibold">Komentar dan Kekhawatiran Anda</h5>
                                <p>Jika Anda memiliki komentar atau kekhawatiran mengenai tetapi tidak terbatas pada
                                    Ketentuan Penggunaan ini. Silakan hubungi kami.</p>

                                <p>Situs web ini dioperasikan oleh {{ $app_name }}.</p>

                                <p>Semua umpan balik, komentar, permintaan untuk dukungan teknis, dan komunikasi lain yang
                                    berkaitan dengan Situs Web harus diarahkan ke Administrator Sekolah. Silakan hubungi
                                    {{ $contact_phone }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
