
 @extends('layouts.app')

 @section('title')
 
     FAQ UIVaccine
         
 @endsection       

 @section('content')

 <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/UIvaccine.png') }}" alt="Logo UIvaccine">
        </a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('kebijakan-privasi') }}" class="nav-link">Kebijakan Privasi</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('faq') }}" class="nav-link active">FAQ</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="https://apps.powerapps.com/play/c3e3eae6-0864-446f-900d-810bf0a492c8?tenantId=485d0c2a-b3bc-407c-98fb-825408258656" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>
</div>


 <header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p class="tag-4">
                    FAQ Vaksin COVID-19
                </p>
                <p class="tag-3">
                    Tanya Jawab Seputar Vaksin Covid-19 di UIvaccine
                </p>
            </div>
        </div>
    </div>
</header>

<main>

    <div class="information">
        <div class="container">
            <div class="row  justify-content-md-center">
                <div class="col-sm-12 col-md-6 col-lg-6" >
                    <img src="{{url('frontend/images/Vaksin1.png')}}" alt="Banner" height ="250px" class="about">
                </div>
                <div class=" about col-sm-12 col-md-6 col-lg-6">
                    <p class="title">
                        Apa itu vaksin?
                    </p>
                    <p class="content">
                        Vaksin adalah sebuah unsur yang dimasukkan ke dalam tubuh manusia sebagai stimulasi 
                        untuk memunculkan antibodi sebagai senjata perlindungan untuk menjaga imunitas tubuh dari satu atau beberapa penyakit. 
                        Vaksin bekerja sebagai antigen tanpa terkandung unsur penyakit yang membahayakan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="row justify-content-center">
                <p class="title">
                    Jenis-jenis Vaksin Covid-19
                </p>
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/Sinovacpng.png')}}" alt="Banner" height ="250px" class="about">
                            <h5 class="mt-3">SINOVAC</h5>
                            <p class="content">Dikenal juga sebagai CoronaVac dan dikembangkan oleh Sinovac Biotect Ltd. dari Tiongkok. 
                                Vaksin ini mengandung virus SARS-CoV-2 yang sudah tidak aktif. 
                                Nilai efikasi vaksin setelah uji klinis ke-3 di Indonesia menunjukkan sebesar 65,3%</p>
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/Astrazeneca.png')}}" alt="Banner" height ="250px" class="about">
                            <h5 class="mt-3">OXFORD-ASTRAZENECA</h5>
                            <p class="content">Merupakan hasil kerjasama Oxford University dan AstraZeneca. 
                                Mengandung virus yang merupakan hasil rekayasa genetika (viral vector). 
                                Hasil uji klinis didapat dari negara Inggris, Brazil, dan Afrika Selatan sebesar 63,09%</p>
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/Pfizer.png')}}" alt="Banner" height ="250px" class="about">
                            <h5 class="mt-3">PFIZER</h5>
                            <p class="content">Merupakan hasil kerjasama BioNTech (Jerman) dan juga Pfizer (AS). 
                                Pfizer merupakan vaksin mRNA. 
                                Hasil uji klinis tahap III yang dilakukan di AS, Jerman, Turki, Afrika Selatan, dan Argentina, Pfizer memiliki efikasi sebesar 95%</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="row  justify-content-md-center">
                <p class="title">
                    Kondisi Tubuh Dianjurkan Sebelum Vaksin
                </p>
                <div class="col-sm-12 col-md-6 col-lg-6" >
                    <img src="{{url('frontend/images/Vaksin2.png')}}" alt="Banner" height ="300px" class="about">
                </div>
                <div class=" about col-sm-12 col-md-6 col-lg-6">
                    <p class="content">
                        Vaksin adalah sebuah unsur yang dimasukkan ke dalam tubuh manusia sebagai stimulasi 
                        untuk memunculkan antibodi sebagai senjata perlindungan untuk menjaga imunitas tubuh dari satu atau beberapa penyakit. 
                        Vaksin bekerja sebagai antigen tanpa terkandung unsur penyakit yang membahayakan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="row justify-content-center">
                <p class="title">
                    Hal-Hal yang Perlu Diperhatikan Sebelum dan Setelah Divaksin
                </p>
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/perhatian1.png')}}" alt="Banner" height ="150px" class="about">
                            <h5 class="mt-3">JAM TIDUR</h5>
                            <p class="content">Jam tidur yang sesuai akan berguna bagi imunitas tubuh Anda. 
                                Tidurlah sekurang-kurangnya 6 jam dalam sehari. Usahakan istirahat yang cukup </p>
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/perhatian2.png')}}" alt="Banner" height ="150px" class="about">
                            <h5 class="mt-3">BEPERGIAN</h5>
                            <p class="content">Bepergian sebaiknya tetap dihindari. Tetaplah di rumah apabila tidak terpaksa</p>
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/perhatian3.png')}}" alt="Banner" height ="150px" class="about">
                            <h5 class="mt-3">OLAHRAGA</h5>
                            <p class="content">Berolahraga yang cukup setidaknya 4 jam dalam waktu 1 minggu untuk meningkatkan
                                daya tahan tubuh Anda
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/perhatian4.png')}}" alt="Banner" height ="150px" class="about">
                            <h5 class="mt-3">BERKUMPUL</h5>
                            <p class="content">Berkumpul sebaiknya tetap dihindari. Kerumunan dapat beresiko menularkan meskipun Anda sudah di vaksin.
                                Tetap patuhi protokol kesehatan dan gunakan masker saat bertemu dengan orang lain.
                            </p>
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/perhatian5.png')}}" alt="Banner" height ="150px" class="about">
                            <h5 class="mt-3">MAKANAN</h5>
                            <p class="content">Makanlah makanan yang bergizi. Perhatikan kebutuhan gizi Anda dan perbanyak makan buatan sendiri.
                                Perbanyak konsumsi vitamin D dan vitamin C untuk daya tahan tubuh Anda.
                            </p>
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="{{url('frontend/images/perhatian6.png')}}" alt="Banner" height ="150px" class="about">
                            <h5 class="mt-3">CEK DOKTER</h5>
                            <p class="content">Periksa secara rutin kondisi tubuh Anda seperti antibodi, antigen, dll.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="information">
        <div class="container">
            <div class="row  justify-content-md-center">
                <div class="col-sm-12 col-md-6 col-lg-6" >
                    <img src="{{url('frontend/images/Vaksin3.png')}}" alt="Banner" height ="450px" class="about">
                </div>
                <div class=" about col-sm-12 col-md-6 col-lg-6">
                    <p class="title">
                        Efek Samping Vaksin
                    </p>
                    <p class="content">
                        Setelah disuntik vaksin, ada sejumlah efek samping yang bisa muncul dan hal itu normal terjadi. 
                        Biasanya, efek samping yang sering muncul adalah nyeri dan bengkak di lengan, demam ringan, menggigil, sakit kepala, serta mudah merasa lelah. 
                        Efek samping akan hilang dalam beberapa hari, tapi bisa menimbulkan rasa tidak nyaman bahkan mengganggu aktivitas sehari-hari. <br><br>
                        Biasanya, efek samping akan hilang dalam beberapa hari, tapi sebaiknya waspadai jika gejala malah semakin parah. 
                        Segera pergi ke rumah sakit jika mengalami kejang, demam tinggi, nyeri atau ruam yang tidak kunjung hilang. <br><br>
                        Vaksin corona juga bisa memicu efek samping berupa gejala alergi. 
                        Namun, perlu diwaspadai sebab ada kemungkinan gejala alergi akan muncul belakangan (delayed allergic reaction). 
                        Jika muncul reaksi alergi parah dalam beberapa hari atau beberapa minggu setelah vaksin corona pertama, disarankan untuk segera temui dokter atau pergi ke rumah sakit. 
                        Sebab, ada kemungkinan reaksi alergi akan bertambah parah dan bisa memicu masalah. 
                    </p>
                </div>
            </div>
        </div>
    </div>

</main>

   

@endsection
    
   
    