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
                                            <h5 class="m-b-10">AI (Kecerdasan Buatan)</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('materi.show', ['materi' => 'materi3', 'sub' => 'sub1']) }}">AI (Kecerdasan Buatan)</a>
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
                                                        <h5>BAB I SEJARAH AI</h5>
                                                        <span>Sejarah Perkembangan AI</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Sejarah Artificial Intelligence (AI) merupakan catatan panjang mengenai upaya manusia dalam menciptakan mesin yang mampu 
                                                            meniru kecerdasan manusia. Konsep ini tidak muncul secara tiba-tiba, melainkan berkembang dari pemikiran filsafat, matematika,
                                                             dan logika sejak zaman kuno. Aristoteles melalui logika silogistiknya telah meletakkan dasar pemikiran algoritmis, sementara
                                                              pada abad pertengahan dan renaisans manusia mulai menciptakan automaton, yaitu mesin mekanik yang meniru gerakan makhluk 
                                                              hidup. Meskipun masih bersifat sederhana dan mekanistik, 
                                                            perkembangan ini menunjukkan ketertarikan manusia terhadap gagasan kecerdasan buatan jauh sebelum hadirnya komputer modern.
                                                        </p>
                                                        <p>
                                                            Perkembangan AI memasuki fase modern pada abad ke-20 seiring kemajuan matematika, logika simbolik, dan teknologi komputasi. 
                                                            Alan Turing menjadi tokoh penting dengan tulisannya pada tahun 1950 yang mempertanyakan kemampuan mesin untuk berpikir serta
                                                             memperkenalkan Tes Turing sebagai ukuran kecerdasan mesin. Istilah Artificial Intelligence kemudian diperkenalkan secara 
                                                             resmi oleh John McCarthy pada Konferensi Dartmouth tahun 1956, yang menandai kelahiran AI sebagai disiplin ilmu. Setelah itu, 
                                                             berbagai program awal seperti Logic Theorist dan General Problem Solver berhasil dikembangkan, meskipun optimisme berlebihan 
                                                             pada masa 
                                                            tersebut akhirnya memicu stagnasi akibat keterbatasan teknologi, yang dikenal sebagai periode AI Winter.
                                                        </p>
                                                        <p>
                                                            Kebangkitan AI terjadi kembali sejak 1990-an hingga saat ini, didorong oleh peningkatan kapasitas komputasi, 
                                                            ketersediaan data dalam jumlah besar, serta kemajuan algoritma machine learning dan deep learning. Pencapaian 
                                                            penting seperti kemenangan Deep Blue atas juara catur dunia, AlphaGo dalam permainan Go, hingga berkembangnya 
                                                            generative AI menunjukkan kemampuan AI yang semakin kompleks dan adaptif. Saat ini, AI telah menjadi bagian 
                                                            penting dalam kehidupan sehari-hari, dimanfaatkan dalam berbagai bidang seperti pendidikan, kesehatan, industri, hiburan, dan 
                                                            pengembangan konten digital, serta terus berkembang sebagai teknologi strategis di era modern.
                                                        </p>
                                                        <div class="d-flex justify-content-end mt-4">                                      
                                                        <a href="/materi/materi3/sub2" class="btn btn-primary waves-effect waves-light">
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
