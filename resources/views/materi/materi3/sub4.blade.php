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
                                                        <h5>SOAL AI (Kecerdasan Buatan)</h5>
                                                        <span>Kerjakan dengan cermat dan hati-hati</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- SOAL 1 -->
                                                        <form id="quizForm">

                                                        <!-- ================= SOAL ================= -->

                                                        <script>
                                                        const questions = [
                                                        {q:"Istilah Artificial Intelligence pertama kali diperkenalkan oleh …", a:["Alan Turing","John McCarthy","Bill Gates","Marvin Minsky"], k:1},
                                                        {q:"Konferensi yang menandai lahirnya AI adalah …", a:["MIT Conference","Stanford Conference","Dartmouth Conference","Oxford Conference"], k:2},
                                                        {q:"Tahun lahirnya konsep Artificial Intelligence adalah …", a:["1945","1950","1956","1965"], k:2},
                                                        {q:"Tokoh yang mencetuskan Turing Test adalah …", a:["John McCarthy","Alan Turing","Herbert Simon","Newell"], k:1},
                                                        {q:"Tujuan utama Turing Test adalah …", a:["Mengukur kecepatan komputer","Menilai kecerdasan mesin","Menghitung data","Mengukur memori"], k:1},
                                                        {q:"Pendekatan AI pada masa awal adalah …", a:["Deep Learning","Machine Learning","Rule-Based System","Neural Network"], k:2},
                                                        {q:"Masa kemunduran perkembangan AI disebut …", a:["AI Boom","AI Winter","AI Fall","AI Error"], k:1},
                                                        {q:"Salah satu penyebab AI Winter adalah …", a:["Kurangnya ilmuwan","Harapan terlalu tinggi","Kurangnya data","Komputer terlalu cepat"], k:1},
                                                        {q:"Kebangkitan AI modern didukung oleh …", a:["Media sosial","Cloud saja","Machine Learning & Big Data","Internet cepat"], k:2},
                                                        {q:"Perkembangan GPU berperan penting dalam …", a:["Mengetik","Pencetakan","Komputasi AI","Jaringan internet"], k:2},

                                                        {q:"Klasifikasi AI berdasarkan fungsionalitas berarti …", a:["Berdasarkan harga","Berdasarkan bentuk","Berdasarkan cara kerja AI","Berdasarkan bahasa"], k:2},
                                                        {q:"AI yang hanya bereaksi pada kondisi saat ini disebut …", a:["Limited Memory","Reactive Machine","Theory of Mind","Self-Aware"], k:1},
                                                        {q:"Ciri utama Reactive Machine adalah …", a:["Memiliki emosi","Tidak memiliki memori","Dapat belajar","Menyimpan pengalaman"], k:1},
                                                        {q:"Contoh AI Reactive Machine adalah …", a:["ChatGPT","Mobil otonom","Deep Blue","Siri"], k:2},
                                                        {q:"AI yang dapat menggunakan data masa lalu disebut …", a:["Reactive Machine","Limited Memory","Theory of Mind","Self-Aware"], k:1},
                                                        {q:"Contoh Limited Memory AI adalah …", a:["Kalkulator","Mesin ketik","Mobil self-driving","Jam digital"], k:2},
                                                        {q:"Limited Memory AI digunakan pada mobil otonom untuk …", a:["Hiburan","Menyimpan lagu","Mengambil keputusan","Menampilkan iklan"], k:2},
                                                        {q:"AI yang mampu memahami emosi manusia disebut …", a:["Reactive Machine","Limited Memory","Theory of Mind","ANI"], k:2},
                                                        {q:"Theory of Mind AI saat ini masih …", a:["Digunakan luas","Tahap penelitian","Sudah sempurna","Tidak mungkin"], k:1},
                                                        {q:"AI yang memiliki kesadaran diri disebut …", a:["Reactive Machine","Limited Memory","Self-Aware AI","ANI"], k:2},
                                                        {q:"Self-Aware AI hingga kini bersifat …", a:["Sudah ada","Digunakan industri","Teoritis","Digunakan di sekolah"], k:2},
                                                        {q:"Urutan AI berdasarkan fungsionalitas yang benar adalah …", a:["Limited → Reactive → Self-Aware","Reactive → Limited → Theory of Mind → Self-Aware","Self-Aware → Theory → Limited","Reactive → Self-Aware → Limited"], k:1},
                                                        {q:"Sebagian besar AI saat ini berada pada kategori …", a:["Self-Aware","Theory of Mind","Limited Memory","Super AI"], k:2},
                                                        {q:"Perbedaan utama Reactive dan Limited Memory adalah …", a:["Harga","Kecepatan","Penggunaan data masa lalu","Bahasa"], k:2},
                                                        {q:"AI modern yang digunakan saat ini umumnya masih …", a:["Self-Aware","Theory of Mind","Terbatas","Tidak berguna"], k:2}
                                                        ];

                                                        document.write(
                                                        questions.map((x,i)=>`
                                                        <div class="mb-3">
                                                        <p><b>${i+1}. ${x.q}</b></p>
                                                        ${x.a.map((o,j)=>`
                                                            <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q${i}" value="${j}">
                                                            <label class="form-check-label">${String.fromCharCode(65+j)}. ${o}</label>
                                                            </div>`).join("")}
                                                        </div>`).join("")
                                                        );
                                                        </script>

                                                        <!-- ================= TOMBOL ================= -->

                                                        <button type="submit" class="btn btn-primary mt-3">
                                                        Simpan & Lihat Nilai
                                                        </button>

                                                        <h4 id="hasil" class="mt-4 font-weight-bold"></h4>

                                                        </form>

                                                        <!-- ================= SCRIPT NILAI ================= -->

                                                        <script>
                                                        document.getElementById("quizForm").addEventListener("submit", function(e){
                                                        e.preventDefault();
                                                        let score = 0;
                                                        questions.forEach((q,i)=>{
                                                            let ans = document.querySelector(`input[name=q${i}]:checked`);
                                                            if(ans && parseInt(ans.value) === q.k) score++;
                                                        });
                                                        document.getElementById("hasil").innerHTML =
                                                            `Jawaban Benar: ${score} dari 25<br>Nilai: ${score * 4}`;
                                                        });
                                                        </script>
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
