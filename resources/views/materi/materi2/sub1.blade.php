<!DOCTYPE html>
<html lang="en">

@include('partials.title')

<body>
    <!-- Pre-loader start -->
    @include('partials.loading')
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('partials.header')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('partials.sidebar')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Konsep Dasar Coding</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('materi.show', ['materi' => 'materi2', 'sub' => 'sub1']) }}">Konsep Dasar Coding</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>BAB I PENDAHULUAN</h5>
                                                        <span>Mengapa Coding dan AI Penting?</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Dunia saat ini sedang mengalami transformasi digital yang
                                                            sangat pesat. Hampir setiap aspek kehidupan manusia telah
                                                            dipengaruhi oleh teknologi, mulai dari cara kita
                                                            berkomunikasi hingga bagaimana bisnis beroperasi. Coding,
                                                            atau kemampuan untuk menulis dan memahami kode
                                                            komputer, menjadi landasan dari inovasi-inovasi teknologi
                                                            ini. Dengan coding, seseorang dapat menciptakan aplikasi,
                                                            perangkat lunak, hingga sistem otomatis yang mampu
                                                            menyelesaikan berbagai tantangan modern secara efisien.
                                                            Coding sering disebut sebagai "bahasa masa depan" karena
                                                            perannya yang krusial dalam teknologi. Sama seperti bahasa
                                                            Inggris yang menjadi alat komunikasi global, coding menjadi
                                                            sarana universal untuk berkomunikasi dengan mesin.
                                                            Bahasa pemrograman seperti Python, JavaScript, dan C++
                                                            memungkinkan pengembang untuk menginstruksikan
                                                            komputer melakukan tugas-tugas kompleks. Pemahaman
                                                            coding memberikan kemampuan untuk tidak hanya menjadi
                                                            pengguna teknologi tetapi juga pencipta teknologi.

                                                        </p>
                                                        <p>
                                                            Dalam era Revolusi Industri 4.0, Artificial Intelligence
                                                        (AI) menjadi teknologi utama yang mengubah lanskap
                                                        pekerjaan dan industri. AI, yang didukung oleh coding,
                                                        memungkinkan mesin untuk berpikir, belajar, dan
                                                        mengambil keputusan. Dari otomasi pabrik hingga analisis
                                                        data besar, AI membantu menciptakan efisiensi dan inovasi
                                                        yang belum pernah ada sebelumnya. AI kini telah menjadi
                                                        bagian tak terpisahkan dari kehidupan sehari-hari. Asisten
                                                        virtual seperti Siri dan Google Assistant menggunakan AI
                                                        untuk memahami perintah pengguna. Platform streaming
                                                        seperti Netflix dan Spotify menggunakan AI untuk
                                                        merekomendasikan konten yang relevan. Bahkan aplikasi
                                                        navigasi seperti Google Maps memanfaatkan AI untuk
                                                        memberikan estimasi rute terbaik. Semua ini adalah hasil
                                                        dari coding yang menghidupkan algoritma AI. Dalam
                                                        pendidikan, AI membuka peluang pembelajaran yang lebih
                                                        personal. Dengan platform seperti Duolingo atau Khan
                                                        Academy, AI mampu menyesuaikan materi pembelajaran
                                                        dengan kebutuhan individu. Guru dan Pembaca kini dapat
                                                        menggunakan teknologi ini untuk meningkatkan efektivitas
                                                        pembelajaran. Coding memungkinkan pengembang untuk
                                                        menciptakan alat pembelajaran berbasis AI yang inovatif
                                                        dan inklusif.
                                                        </p>
                                                        <p>
                                                            AI telah mengubah cara bisnis beroperasi. Dalam
                                                            industri keuangan, algoritma AI digunakan untuk
                                                            mendeteksi penipuan. Dalam manufaktur, robot yang
                                                            dikendalikan oleh AI meningkatkan produktivitas dan
                                                            presisi. Di sektor ritel, sistem rekomendasi berbasis AI
                                                            meningkatkan pengalaman pelanggan. Semua aplikasi ini
                                                            membutuhkan coding untuk membangun, menguji, dan
                                                            menyempurnakan sistem. Coding dan AI membuka peluang
                                                            karier yang luas di berbagai bidang. Profesi seperti software
                                                        </p>
                                                        <div class="d-flex justify-content-end mt-4">
                                                        <a href="/materi/materi1/sub2" class="btn btn-primary waves-effect waves-light">
                                                            Next →
                                                        </a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('adminpage/assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('adminpage/assets/pages/waves/js/waves.min.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('adminpage/assets/js/script.min.js') }}"></script>
</body>

</html>
