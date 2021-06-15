
 @extends('layouts.app')

 @section('title')
 
     UIVaccine
         
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
                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('kebijakan-privasi') }}" class="nav-link">Kebijakan Privasi</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
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
                    <p class="tag-1">Save Yourself, Save The World</p>
                    <p class="tag-2">
                        Bersama Kita 
                        <br />
                        Lawan Covid-19
                    </p>
                    <p class="tag-3">
                        Covid-19 (Coronavirus) telah menginfeksi
                        <br />
                        lebih dari 200 Negara di dunia
                    </p>
                    <a href="https://apps.powerapps.com/play/c3e3eae6-0864-446f-900d-810bf0a492c8?tenantId=485d0c2a-b3bc-407c-98fb-825408258656" class="btn btn-get-started px-4 mt-4">
                        Mulai Vaksinasi
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ url('frontend/images/Banner.png') }}" alt="Banner" height ="388px" class="banner">
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="information">
            <div class="container">
                <section class="section-1 section-stats row justify-content-center" id="stats">
                    <p>Kasus di Indonesia</p>
                </section>
                <section class="section-2 section-stats row justify-content-center" id="stats">
                    <p>Data Live dari Kawal Corona Indonesia</p>
                </section>
                <section class="section-jumlah">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-4 col-xl-4">
                                <div class="card card-positif img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <p class="text-white mb-0">TOTAL POSITIF</p>
                                                <h2 class="mb-0 number-font">{{ $positif }}</h2>
                                                <p class="text-white mb-0">ORANG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-lg-4 col-xl-4">
                                <div class="card card-sembuh img-card box-secondary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <p class="text-white mb-0">TOTAL SEMBUH</p>
                                                <h2 class="mb-0 number-font">{{ $sembuh }}</h2>
                                                <p class="text-white mb-0">ORANG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-lg-4 col-xl-4">
                                <div class="card  card-meninggal img-card box-success-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <p class="text-white mb-0">TOTAL MENINGGAL</p>
                                                <h2 class="mb-0 number-font">{{ $meninggal }}</h2>
                                                <p class="text-white mb-0">ORANG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6" >
                        <img src="{{ url('frontend/images/section-about.png') }}" alt="Banner" height ="347px" class="about">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <button class="btn btn-login my-2 my-sm-0 px-4">
                            Tentang <c>UIVaccine</c>
                        </button>
                        <p class="title">
                            Apa itu <c>UI</c>Vaccine ?
                        </p>
                        <p class="content">
                            UIvaksin adalah aplikasi yang dikembangkan untuk membantu 
                            proses vaksinasi  di Rumah Sakit Universitas Indonesia.
                            Aplikasi ini juga memberikan edukasi dan informasi mengani Covid-19. Fitur utama dari apliaksi ini adalah pembuatan janji vaksin menggunakan platform low code.
                            Platform tersebut dibuat oleh Microsoft dan memiliki nama PowerApps.
                            Namun, pembuatan janji melalui aplikasi ini hanya bisa digunakan oleh warga Universitas Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

   

@endsection
    
   
    