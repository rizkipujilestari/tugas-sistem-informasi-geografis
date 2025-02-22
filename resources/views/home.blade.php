@extends('layouts.main') 

@section('content') 
<!-- Hero Section -->
<section id="hero" class="hero section">

  <img src="{{ asset('onepage/assets/img/hero-bg-abstract.jpg') }}" alt="" data-aos="fade-in" class="">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-out">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Pray My Way</h1>
        <p>One Stop Prayer Place Finder</p>
      </div>
    </div>
    <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us<br></h2>
    <p>Pray My Way adalah sebuah aplikasi sistem informasi geografis (SIG) berbasis web yang dapat membantu anda 
      menemukan tempat ibadah sesuai dengan preferensi anda. 
    </p>
  </div><!-- End Section Title -->
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>
          Pada website kami, anda dapat :
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Melakukan pencarian tempat ibadah yang diinginkan</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Melihat persebaran tempat ibadah</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Melihat lokasi juga detail tempat ibadah</span></li>
        </ul>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p>Sistem ini dikelola oleh seorang admin yang bertugas memperbaharui data tempat ibadah di Kota Bandung.</p>
        <a href="#" class="read-more"><span>Cari Tempat Ibadah</span><i class="bi bi-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section><!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>The people behind this applications.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <i class="bi bi-person-fill"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Neni</h3>
          </a>
          <p>NPM</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
            </svg>
            <i class="bi bi-person-fill"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Anissa</h3>
          </a>
          <p>NPM</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
            </svg>
            <i class="bi bi-person-fill"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Rizki</h3>
          </a>
          <p>NPM</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
            </svg>
            <i class="bi bi-person-fill"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Adhika</h3>
          </a>
          <p>NPM</p>
          <a href="service-details.html" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->

    </div>
  </div>

</section><!-- /Services Section -->
@endsection