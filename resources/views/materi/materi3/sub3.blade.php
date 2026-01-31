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
                                                        <h5>BAB III JENIS AI</h5>
                                                        <span>Jenis-Jenis AI</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Dalam upaya memahami Artificial Intelligence (AI) secara
                                                            lebih mendalam, penting untuk mengenali klasifikasi atau jenisjenis AI berdasarkan tingkat kecerdasan, fungsionalitas, dan
                                                            kapabilitasnya. Klasifikasi ini membantu para akademisi,
                                                            pengembang teknologi, dan pengguna memahami cakupan serta
                                                            batasan masing-masing jenis AI yang ada saat ini maupun yang
                                                            masih bersifat hipotetik. Para pakar umumnya mengelompokkan
                                                            AI ke dalam dua kerangka besar klasifikasi, yaitu berdasarkan
                                                            fungsi atau kemampuan sistem (functionality) dan berdasarkan
                                                            kemampuan kognitif atau kecerdasan (capability).
                                                        </p>
                                                        <strong>1.  Klasifikasi Berdasarkan Kemampuan (Based onCapability)</strong>
                                                        <p>
                                                            Menurut Arend Hintze (2016), peneliti dari Michigan State
                                                            University, AI dapat dibagi ke dalam tiga kategori besar
                                                            berdasarkan kemampuannya meniru kecerdasan manusia, yaitu:
                                                            <p>
                                                            a. Artificial Narrow Intelligence (ANI)
                                                            Disebut juga sebagai Weak AI, ANI merupakan bentuk AI yang
                                                            paling umum dan saat ini sudah banyak digunakan. ANI dirancang
                                                            untuk melakukan satu tugas spesifik dengan sangat baik, tetapi
                                                            tidak memiliki kecerdasan umum atau pemahaman konteks di
                                                            luar tugas tersebut. Contoh dari ANI adalah sistem rekomendasi
                                                            pada platform e-commerce, pengenalan wajah (facial recognition),
                                                            asisten virtual seperti Siri atau Alexa, dan aplikasi penerjemah
                                                            bahasa otomatis. Ciri khas ANI adalah fokus sempit, performa
                                                            tinggi dalam satu domain, tidak bisa beradaptasi di luar fungsi
                                                            yang diprogram.
                                                            </p>
                                                            <p>
                                                            b. Artificial General Intelligence (AGI)
                                                            AGI, atau Strong AI, adalah sistem AI yang memiliki
                                                            kemampuan kognitif layaknya manusia: mampu belajar,
                                                            memahami, dan menyelesaikan berbagai macam tugas intelektual
                                                            yang berbeda tanpa pemrograman ulang. AGI belum sepenuhnya
                                                            tercapai dalam pengembangan teknologi saat ini, tetapi
                                                            merupakan visi jangka panjang para peneliti AI. Ciri khas AGI
                                                            adalah fleksibel, memiliki kemampuan belajar lintas domain,
                                                            adaptif terhadap konteks baru tanpa instruksi spesifik.
                                                            </p>
                                                            <p>
                                                            c. Artificial Super Intelligence (ASI)
                                                            ASI merujuk pada AI yang tidak hanya setara tetapi
                                                            melampaui kecerdasan manusia dalam segala aspek, baik kognitif
                                                            maupun emosional. ASI masih bersifat teoritis dan menjadi subjek
                                                            perdebatan dalam etika dan filosofi AI. Beberapa ilmuwan, seperti
                                                            Nick Bostrom, mengaitkan potensi ASI dengan perubahan besar
                                                            dalam tatanan sosial dan ekonomi, baik dalam bentuk kemajuan
                                                            pesat maupun risiko eksistensial. Ciri khas ASI adalah kecerdasan
                                                            melampaui rata-rata manusia (hal tertentu), memiliki
                                                            kemampuan analisis, kreativitas, dan pengambilan keputusan
                                                            30 BUKU AJAR ARTIFICIAL INTELLIGENCE
                                                            superlatif.
                                                            </p>
                                                        </p>
                                                        <strong>2. Klasifikasi Berdasarkan Fungsionalitas (Based onFunctionality)</strong>
                                                        <p>                                                           
                                                            Selain dari segi kapabilitas, AI juga dapat diklasifikasikan
                                                            berdasarkan fungsionalitasnya dalam menjalankan tugas-tugas
                                                            tertentu, sebagaimana dijelaskan oleh Sharma & Sharma (2021)
                                                            dalam riset tentang pengembangan sistem berbasis AI.
                                                            <p>
                                                            a. Reactive Machines
                                                            AI jenis ini tidak memiliki kemampuan untuk menyimpan
                                                            atau mengingat informasi masa lalu. Ia hanya merespons situasi
                                                            berdasarkan kondisi saat ini. Contohnya adalah sistem Deep Blue,
                                                            BUKU AJAR ARTIFICIAL INTELLIGENCE 31
                                                            komputer catur buatan IBM yang mampu mengalahkan juara
                                                            dunia Garry Kasparov pada 1997. Karakteristik Reactive Machines
                                                            tidak memiliki memori, hanya bereaksi terhadap input saat ini,
                                                            tidak belajar dari pengalaman.
                                                            </p>
                                                            <p>
                                                            b. Limited Memory
                                                            Jenis AI ini memiliki kemampuan terbatas untuk menyimpan
                                                            data dan pengalaman masa lalu untuk dijadikan dasar dalam
                                                            membuat keputusan di masa depan. Sebagian besar sistem AI
                                                            modern, seperti mobil otonom dan chatbot berbasis NLP,
                                                            termasuk dalam kategori ini. Karakteristiknya adalah memiliki
                                                            memori jangka pendek, dapat belajar dari data masa lalu, tetapi
                                                            tidak menyimpan data jangka panjang secara kompleks.
                                                            </p>
                                                            <p>
                                                            c. Theory of Mind
                                                            Kategori ini bersifat hipotetik dan belum terwujud
                                                            sepenuhnya. AI jenis ini diharapkan dapat memahami emosi,
                                                            kebutuhan, keyakinan, dan pikiran manusia. Ini merupakan
                                                            tonggak menuju AGI karena membutuhkan kemampuan tinggi
                                                            dalam interaksi sosial dan kecerdasan emosional (emotional
                                                            intelligence). Karakteristiknya adalah mampu mengenali intensi
                                                            manusia, mampu berinteraksi sosial, memahami emosi dan
                                                            persepsi orang lain.
                                                            </p>
                                                            <p>
                                                            d. Self-Awareness
                                                            Merupakan jenis AI tertinggi dan paling futuristik, yang
                                                            memiliki kesadaran diri, intuisi, dan bahkan sense of self. AI ini
                                                            mampu memahami dirinya sendiri, kondisi internal, serta dapat
                                                            merencanakan dan bertindak berdasarkan pemikiran otonom.
                                                            Karakteristiknya adalah memiliki kesadaran akan eksistensinya,
                                                            mampu membentuk keputusan berdasarkan pemahaman diri dan
                                                            lingkungan.
                                                            Klasifikasi jenis-jenis AI di atas memberikan landasan penting
                                                            dalam memahami kompleksitas perkembangan kecerdasan
                                                            buatan. AI tidak lagi dipahami sebagai satu sistem tunggal, tetapi
                                                            sebagai spektrum kemampuan yang terus berkembang, mulai dari
                                                            sistem yang sangat terbatas hingga yang bersifat hipotetik dengan
                                                            32 BUKU AJAR ARTIFICIAL INTELLIGENCE
                                                            potensi luar biasa. Bagi dunia pendidikan, pemahaman terhadap
                                                            klasifikasi ini menjadi kunci untuk merancang strategi
                                                            penggunaan AI yang tepat guna, aman, dan berkelanjutan.
                                                            </p>
                                                        </p>
                                                        <div class="d-flex justify-content-between mt-4">
                                                        <a href="/materi/materi3/sub2" class="btn btn-secondary waves-effect waves-light">
                                                            ← Previous
                                                        </a>
                                                        <a href="/materi/materi3/sub4" class="btn btn-primary waves-effect waves-light">
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
