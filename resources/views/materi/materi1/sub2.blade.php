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
                                            <h5 class="m-b-10">Pengenalan Coding dan AI</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('materi.show', ['materi' => 'materi1', 'sub' => 'sub1']) }}">Pengenalan Coding dan AI</a>
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
                                                        <h5>BAB II DASAR DASAR CODING</h5>
                                                        <span>Memahami Coding</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Coding, atau sering disebut sebagai pemrograman, adalah
                                                        proses memberikan instruksi kepada komputer
                                                        menggunakan bahasa pemrograman agar dapat
                                                        menjalankan tugas tertentu. Dalam kehidupan sehari-hari,
                                                        coding berperan sebagai "otak" di balik aplikasi yang kita
                                                        gunakan, mulai dari media sosial hingga perangkat lunak
                                                        pengolah data. Pemahaman tentang coding adalah langkah
                                                        pertama untuk menciptakan solusi digital yang inovatif dan
                                                        relevan dengan kebutuhan masa kini. Coding dapat dianggap
                                                        sebagai bahasa universal yang digunakan untuk
                                                        berkomunikasi dengan mesin. Sama seperti bahasa manusia,
                                                        setiap bahasa pemrograman memiliki tata bahasa (syntax)
                                                        dan kosakata (keywords) yang unik. Contohnya, Python
                                                        dikenal dengan sintaks yang sederhana dan mudah
                                                        dipahami, menjadikannya pilihan utama bagi pemula. Dalam
                                                        konteks globalisasi digital, coding memungkinkan
                                                        kolaborasi lintas negara, karena logika pemrograman
                                                        bersifat universal dan tidak dibatasi oleh perbedaan bahasa
                                                        manusia.
                                                        </p>
                                                        <p>
                                                            Tujuan utama coding adalah memecahkan masalah
                                                        melalui teknologi. Misalnya, coding dapat digunakan untuk
                                                        mengotomatisasi tugas manual, menciptakan aplikasi
                                                        berbasis web atau mobile, atau bahkan membangun sistem
                                                        berbasis Artificial Intelligence (AI). Bagi Pembaca, belajar
                                                        coding tidak hanya tentang menulis kode, tetapi juga
                                                        mengasah kemampuan berpikir logis dan problem-solving
                                                        yang sangat penting di berbagai bidang. Coding melibatkan
                                                        tiga komponen utama: input, proses, dan output. Input
                                                        adalah data yang dimasukkan ke dalam sistem, proses
                                                        adalah logika atau algoritma yang diterapkan pada data
                                                        tersebut, dan output adalah hasil akhir yang dihasilkan.
                                                        Sebagai contoh, ketika kita membuat program kalkulator
                                                        sederhana, angka yang dimasukkan adalah input,
                                                        perhitungan adalah proses, dan hasilnya adalah output.
                                                        Pemahaman tentang komponen ini akan membantu
                                                        Pembaca mengembangkan program yang efisien dan
                                                        fungsional. Coding telah menjadi fondasi di balik banyak
                                                        inovasi teknologi modern. Dari aplikasi media sosial seperti
                                                        Instagram hingga algoritma pencarian Google, semua
                                                        berawal dari kode yang ditulis oleh pengembang. Dalam
                                                        bidang pendidikan, coding memungkinkan pengembangan
                                                        platform pembelajaran online yang adaptif. Dengan
                                                        memahami coding, Pembaca dapat berkontribusi pada
                                                        pengembangan teknologi yang mempermudah kehidupan
                                                        masyarakat.
                                                        </p>
                                                        <p>
                                                            Belajar coding dimulai dengan memahami logika dasar
                                                            pemrograman, seperti struktur if-else, loop, dan fungsi.
                                                            Pemula biasanya memulai dengan proyek sederhana,
                                                            seperti membuat kalkulator atau permainan berbasis teks.
                                                            Setelah memahami dasar-dasarnya, Pembaca dapat beralih 
                                                        </p>
                                                        <div class="d-flex justify-content-between mt-4">
                                                        <a href="/materi/materi1/sub1" class="btn btn-secondary waves-effect waves-light">
                                                            ← Previous
                                                        </a>
                                                        <a href="/materi/materi1/sub3" class="btn btn-primary waves-effect waves-light">
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
