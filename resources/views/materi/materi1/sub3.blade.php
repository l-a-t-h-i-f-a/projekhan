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
                                                        <h5>BAB III PENGANTAR ARTIFICIAL INTELLIGENCE</h5>
                                                        <span>Pengantar AI</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Artificial Intelligence (AI), atau kecerdasan buatan, adalah
                                                            cabang ilmu komputer yang berfokus pada pengembangan
                                                            sistem yang dapat menjalankan tugas-tugas yang biasanya
                                                            membutuhkan kecerdasan manusia. Tugas-tugas tersebut
                                                            mencakup pengenalan pola, pengambilan keputusan,
                                                            pemahaman bahasa alami, dan pembelajaran dari data.
                                                            Dalam praktiknya, AI memungkinkan mesin untuk
                                                            "berpikir" dan "belajar" layaknya manusia, meskipun
                                                            melalui pendekatan berbasis algoritma dan data. Definisi ini
                                                            terus berkembang seiring dengan kemajuan teknologi,
                                                            namun esensinya tetap pada upaya menciptakan mesin yang
                                                            dapat memproses informasi secara cerdas untuk
                                                            menyelesaikan masalah yang kompleks. Sejarah AI dimulai
                                                            dari diskusi filosofis di abad ke-20, saat para ilmuwan dan
                                                            filsuf seperti Alan Turing memunculkan gagasan tentang
                                                            mesin yang dapat meniru pemikiran manusia. Pada tahun
                                                            1950, Turing memperkenalkan "Turing Test" sebagai
                                                            metode untuk menilai apakah sebuah mesin dapat
                                                            menunjukkan perilaku cerdas yang tidak dapat dibedakan
                                                            dari manusia. Pada tahun 1956, istilah "Artificial
                                                            Intelligence" pertama kali digunakan dalam konferensi di
                                                            Dartmouth College, yang dianggap sebagai titik awal dari
                                                            bidang ini secara formal. Konferensi ini memicu antusiasme
                                                            besar terhadap AI, meskipun kemampuan teknologi pada
                                                            saat itu masih sangat terbatas.
                                                        </p>
                                                        <p>
                                                            Pada dekade-dekade berikutnya, perkembangan AI
                                                            berjalan dengan pasang surut. Tahun 1960-an hingga 1970-
                                                            an dikenal sebagai era awal eksplorasi, dengan fokus pada
                                                            pengembangan sistem berbasis aturan (rule-based systems).
                                                            Namun, terbatasnya kemampuan komputasi dan kurangnya
                                                            data menyebabkan optimisme awal terhadap AI menurun,
                                                            sebuah periode yang dikenal sebagai "AI Winter". Terobosan
                                                            besar mulai muncul kembali pada akhir abad ke-20, dengan
                                                            munculnya algoritma pembelajaran mesin (machine
                                                            learning) dan jaringan saraf tiruan (neural networks), yang
                                                            menjadi landasan dari AI modern. Saat ini, AI telah
                                                            berkembang pesat dengan kemunculan deep learning,
                                                            pemrosesan bahasa alami (NLP), dan AI generatif seperti
                                                            ChatGPT dan DALL-E. Sejarahnya mencerminkan perjalanan
                                                            dari eksperimen teoretis menjadi teknologi yang telah
                                                            mengubah berbagai aspek kehidupan manusia, mulai dari
                                                            kesehatan, pendidikan, hingga hiburan. Dengan kombinasi
                                                            antara kemajuan perangkat keras, data besar, dan algoritma
                                                            canggih, AI kini menjadi salah satu bidang teknologi paling
                                                            inovatif di era digital.
                                                        </p>
                                                        <div class="d-flex justify-content-between mt-4">
                                                        <a href="/materi/materi1/sub2" class="btn btn-secondary waves-effect waves-light">
                                                            ← Previous
                                                        </a>
                                                        <a href="/materi/materi1/sub4" class="btn btn-primary waves-effect waves-light">
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
