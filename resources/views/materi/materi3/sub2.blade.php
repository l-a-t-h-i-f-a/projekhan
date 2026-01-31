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
                                                        <h5>BAB II DEFINISI AI</h5>
                                                        <span>Definisi AI Menurut Para Ahli</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Artificial Intelligence (AI) atau kecerdasan buatan
                                                            merupakan istilah yang sudah mengalami berbagai
                                                            perkembangan definisi sejak pertama kali diperkenalkan pada
                                                            pertengahan abad ke-20. Perbedaan definisi ini tidak hanya
                                                            disebabkan oleh perkembangan teknologi itu sendiri, tetapi juga
                                                            oleh keragaman pendekatan keilmuan yang digunakan dalam
                                                            memahami dan mengembangkan AI—baik dari sudut pandang
                                                            ilmu komputer, matematika, psikologi kognitif, hingga filsafat.
                                                            Dalam subbagian ini, akan diuraikan beberapa definisi AI dari
                                                            para ahli terkemuka sebagai upaya membangun pemahaman
                                                            konseptual yang menyeluruh.
                                                        </p>
                                                        <strong>1. John McCarthy (1956)</strong>
                                                        <p>
                                                        Sebagai salah satu pelopor utama dalam bidang AI, John
                                                        McCarthy mendefinisikan Artificial Intelligence sebagai “the
                                                        science and engineering of making intelligent machines, especially
                                                        intelligent computer programs” (McCarthy, 2007).
                                                        Dalam pandangannya, AI merupakan suatu disiplin ilmu
                                                        yang berusaha menciptakan mesin yang dapat berperilaku secara
                                                        cerdas seperti manusia, meskipun tidak harus meniru proses
                                                        berpikir manusia secara biologis. Definisi McCarthy menekankan
                                                        dua hal penting: pertama, bahwa AI adalah gabungan antara ilmu
                                                        pengetahuan (science) dan rekayasa (engineering); dan kedua,
                                                        bahwa AI lebih berfokus pada hasil dari perilaku cerdas, bukan
                                                        pada proses mental internal.
                                                        </p>
                                                        <strong>2. Elaine Rich dan Kevin Knight (1991)</strong>
                                                        <p>                                                           
                                                        Rich dan Knight memberikan definisi yang lebih deskriptif, yakni:
                                                        “Artificial Intelligence is the study of how to make computers do
                                                        things at which, at the moment, people are better” (Rich & Knight,
                                                        1991).
                                                        Dalam arti ini, AI dikaji sebagai upaya untuk menjembatani
                                                        kesenjangan antara kapabilitas mesin dan manusia dalam
                                                        menyelesaikan tugas-tugas tertentu, seperti bermain catur,
                                                        menerjemahkan bahasa, atau mengenali wajah. Definisi ini
                                                        mencerminkan pendekatan pragmatis terhadap AI, di mana
                                                        pencapaian kecerdasan buatan diukur berdasarkan sejauh mana
                                                        mesin dapat mendekati atau melampaui kinerja manusia dalam
                                                        bidang tertentu. 
                                                        </p>
                                                        <strong>3. Andreas Kaplan dan Michael Haenlein (2019)</strong>
                                                        <p>                                                       
                                                        Dalam kajian yang lebih kontemporer dan bersifat
                                                        multidisipliner, Kaplan dan Haenlein menyatakan bahwa AI
                                                        adalah “a system’s ability to correctly interpret external data, to
                                                        learn from such data, and to use those learnings to achieve specific
                                                        goals and tasks through flexible adaptation” (Kaplan & Haenlein,
                                                        2019).
                                                        Definisi ini menekankan tiga elemen utama dari AI, yaitu:
                                                        persepsi, pembelajaran, dan adaptasi. Definisi ini sangat relevan
                                                        dengan perkembangan AI berbasis pembelajaran mesin (machine
                                                        learning) dan pembelajaran mendalam (deep learning) yang
                                                        menuntut sistem untuk terus beradaptasi terhadap data dan
                                                        konteks yang dinamis. 
                                                        </p>
                                                        <strong>4. IBM Cloud (2023)</strong>
                                                        <p>                                                                                                              
                                                            IBM, sebagai salah satu perusahaan teknologi global yang
                                                            aktif dalam pengembangan AI, menjelaskan AI sebagai “a field
                                                            which combines computer science and robust datasets to enable
                                                            problem-solving. It also encompasses sub-fields of machine
                                                            learning and deep learning, which are frequently mentioned in
                                                            conjunction with AI” (IBM, 2023). Dalam penjelasan ini, AI
                                                            dipahami sebagai payung besar yang mencakup berbagai
                                                            pendekatan teknis untuk memungkinkan mesin menyelesaikan
                                                            masalah secara otonom. Pendekatan industri ini mencerminkan
                                                            pandangan praktis bahwa AI merupakan teknologi integratif yang
                                                            mendukung otomatisasi berbasis data dalam skala besar. 
                                                        </p>
                                                        <div class="d-flex justify-content-between mt-4">
                                                        <a href="/materi/materi3/sub" class="btn btn-secondary waves-effect waves-light">
                                                            ← Previous
                                                        </a>
                                                        <a href="/materi/materi3/sub3" class="btn btn-primary waves-effect waves-light">
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
