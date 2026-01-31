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
                                                        <h5>SOAL PEMAHAMAN PENGENALAN CODING DAN AI</h5>
                                                        <span>Kerjakan dengan cermat dan hati-hati</span>
                                                    </div>
                                                    <div class="card-block">

<!-- SOAL 1 -->
<form id="quizForm">

<!-- ================= SOAL ================= -->

<script>
const questions = [
  {q:"Transformasi digital ditandai dengan …", a:["Berkurangnya teknologi","Perubahan besar berbagai aspek kehidupan","Hilangnya aktivitas manusia","Menurunnya inovasi"], k:1},
  {q:"Coding adalah kemampuan untuk …", a:["Mengoperasikan komputer","Menulis dan memahami kode","Menggunakan aplikasi","Mengakses internet"], k:1},
  {q:"Coding disebut bahasa masa depan karena …", a:["Bahasa internasional","Tanpa aturan","Komunikasi dengan mesin","Digunakan semua orang"], k:2},
  {q:"Bahasa pemrograman yang disebutkan dalam buku adalah …", a:["HTML & CSS","Python, JavaScript, C++","PHP & SQL","Kotlin & Swift"], k:1},
  {q:"Dengan coding seseorang menjadi …", a:["Penikmat","Operator","Pencipta teknologi","Pengawas"], k:2},
  {q:"Peran AI di era digital adalah …", a:["Menghambat kerja","Menghilangkan teknologi","Meningkatkan efisiensi","Membatasi kreativitas"], k:2},
  {q:"Contoh penerapan AI sehari-hari …", a:["Paint","Google Assistant","Notepad","Word"], k:1},
  {q:"Netflix menggunakan AI untuk …", a:["Menyimpan data","Iklan","Rekomendasi","Menghapus histori"], k:2},
  {q:"Coding disebut juga …", a:["Browsing","Programming","Editing","Debugging"], k:1},
  {q:"Coding bersifat universal karena …", a:["Bahasa Inggris","Tanpa aturan","Logika global","Satu negara"], k:2},
  {q:"Tujuan utama coding adalah …", a:["Menghias","Memecahkan masalah","Menghapus data","Mengurangi kerja"], k:1},
  {q:"Bahasa pemrograman yang mudah dipelajari …", a:["Assembly","Python","C++","Fortran"], k:1},
  {q:"Komponen dasar sistem adalah …", a:["Variabel","Input-Proses-Output","Server","Database"], k:1},
  {q:"Data yang dimasukkan user disebut …", a:["Output","Proses","Input","Algoritma"], k:2},
  {q:"Manfaat belajar coding …", a:["Menghafal","Berpikir logis","Menggambar","Mengetik"], k:1},
  {q:"Struktur logika pemrograman …", a:["HTML","If-else & loop","Server","Input saja"], k:1},
  {q:"AI adalah …", a:["Mesin data","Ilmu meniru kecerdasan manusia","Jaringan","Hardware"], k:1},
  {q:"Kemampuan AI meliputi …", a:["Penyimpanan","Bahasa alami","Manual","Mengetik"], k:1},
  {q:"Tokoh Turing Test adalah …", a:["Bill Gates","Alan Turing","Jobs","McCarthy"], k:1},
  {q:"Istilah AI pertama muncul di …", a:["Harvard","Oxford","Dartmouth","MIT"], k:2},
  {q:"AI awal berbasis …", a:["Deep learning","Rule-based","Big data","Cloud"], k:1},
  {q:"Masa kemunduran AI disebut …", a:["AI Boom","AI Winter","Digital","Smart"], k:1},
  {q:"Kebangkitan AI karena …", a:["Sosmed","Machine learning","Game","Office"], k:1},
  {q:"AI generatif contohnya …", a:["Excel","ChatGPT","Maps","Photoshop"], k:1},
  {q:"AI belum diterapkan pada …", a:["Pendidikan","Kesehatan","Bisnis","Tanpa teknologi"], k:3}
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
    `Jawaban Benar: ${score} dari 25<br>Nilai: ${score*4}`;
});
</script>

<hr>
<h4 id="hasil" class="mt-4 text-primary"></h4>

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
