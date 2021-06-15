
 @extends('layouts.app')

 @section('title')
 
     Kebijakan Privasi UIVaccine 
         
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
                    <a href="{{ route('kebijakan-privasi') }}" class="nav-link active">Kebijakan Privasi</a>
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
        <section class="section-title section-stats row justify-content-center" id="stats">
            <p>Kebijakan Privasi</p>
        </section>
        <section class="section-sub-totle-1 section-stats row justify-content-center" id="stats">
            <p>
                UIvaccine berkomitmen
            </p>  
        </section>
        <section class="section-sub-totle-2 section-stats row justify-content-center" id="stats">
            <p>
                terhadap privasi dan keamanan data Anda
            </p>  
        </section>
    </div>
</header>

<main>
    <div class="content">
        <div class="container">
            <div class="kebijakan-privasi-1">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="title-kp-1">Cara Kerja Aplikasi</p>
                        <p class="content-1">
                            1. Login menggunakan akun SSO UI, tunggu hingga berhasil.
                            <br />
                            2. Kemudian klik tombol "Login Pasien" pada aplikasi UIVaccine.
                            <br />
                            3. Pada aplikasi UIVaccine, pilih menu registrasi, isi semua data yang dibutuhkan.
                            <br />
                            4. Isi semua kuisioner berdsarkan kondisi Anda.
                            <br />
                            5. Pilih tanggal Vaccine.
                            <br />
                            6. Jika sudah mengikuti langkah diatas, data user akan terekam pada sistem dan tanggal vaksin akan muncul pada menu utama.
                            <br />
                            7. Untuk melihat jenis vaksin yang digunakan, dapat mengakses menu tentang vaksin.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="{{url('frontend/images/gambar-1.png')}}" alt="Banner" height ="359px" class="content">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="kebijakan-privasi-2">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="{{url('frontend/images/gambar-2.png')}}" alt="Banner" height ="359px" class="content">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="title-kp-2">Kebijakan Kerahasiaan Data</p>
                        <p class="content-2">
                            1. Data user hanya digunakan untuk keperluan vaksinasi.
                            <br />
                            2. Data user tidak akan dibagikan kepada pihak ketiga.
                            <br />
                            3. Data user tidak dibagikan ke pihak lain.
                            <br />
                            4. User sepenuhnya mengendalikan data dan dapat sewaktu-waktu dapat mencabut persetujuan perekaman data.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="kebijakan-privasi-3">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="title-kp-3">
                            Pengumpulan Data
                            Untuk Penyempurnaan Layanan
                        </p>
                        <p class="content-3">
                            1. Data hanya diperlukan untuk keperluan layanan.
                            <br />
                            2. Data user hanya akan disimpan pada database sistem.
                            <br />
                            3. Data sensitif tidak akan ditampilkan pada aplikasi.
                            <br />
                            4. Data yang dikumpulkan untuk menentukan jenis vaksin yang dapat digunakan kepada pasien yang bersangkutan.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="{{url('frontend/images/gambar-3.png')}}" alt="Banner" height ="359px" class="content">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="kebijakan-privasi-4">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="{{url('frontend/images/gambar-4.png')}}" alt="Banner" height ="359px" class="content">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="title-kp-4">Pengguna Aplikasi</p>
                        <p class="content-4">
                            1. Aplikasi hanya bisa digunakan oleh Warga Universitas Indonesia.
                            <br />
                            2. Harus Memiliki akun SSO UI.
                            <br />
                            3. Setiap akun SSO UI hanya bisa mendaftar vaksinasi sebanyak 1 kali
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="kebijakan-privasi-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="title-kp-5">
                            Penghapusan Data
                        </p>
                        <p class="content-5">
                            1. User sepenuhnya mengendalikan data dan dapat sewaktu-waktu dapat mencabut persetujuan perekaman data. 
                            <br />
                            2. User dapat meminta penghapusan data.
                            <br />
                            3. Jika data dipergunakan tidak sebagaimana mestinya, maka user dapat menuntut untuk menghapus data tersebut.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="{{url('frontend/images/gambar-5.png')}}" alt="Banner" height ="359px" class="content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

   

@endsection
    
   
    