<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CultureID</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<!-- tes -->
  <!-- =======================================================
  * Template Name: Reveal - v4.1.0
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:infokom@umm.ac.id">infokom@umm.ac.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0341)464318</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/ummcampus/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <button onclick="myFunction()" class="btn btn-light btn-sm">LightMode</button>
        </div>
        <script>
        (function() {
            let onpageLoad = localStorage.getItem("theme") || "";
            let element = document.body;
            element.classList.add(onpageLoad);
            document.getElementById("theme").textContent =
                localStorage.getItem("theme") || "light";
        })();

        function myFunction() {
            let element = document.body;
            element.classList.toggle("dark-mode");
            let theme = localStorage.getItem("theme");

            var button = document.querySelector('button')

            if (theme && theme === "dark-mode") {
              document.documentElement.setAttribute('dark-mode', 'dark');
                localStorage.setItem("theme", "");
            } else {
              document.documentElement.setAttribute('dark-mode', 'light');
                localStorage.setItem("theme", "dark-mode");
            }

            document.getElementById("theme").textContent = localStorage.getItem("theme");
        }
    </script> 
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.php">Culture<span>ID</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Company Values</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto bg-info" id="admin" href="#admin">Login Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
    <h2>Explore <span>Your True</span><br>Style!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Product</a>
      </div>
    </div>

    <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('https://serpongupdate.com/wp-content/uploads/2019/10/baju.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('https://www.justdalal.com/wp-content/uploads/2017/12/madrid-thrift-guide-justdalal-21.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('https://www.dir.web.id/wp-content/uploads/2017/01/banner-roughneck.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('https://donbosco.org.au/templates/g5_helium/custom/images/header/op-shopbw.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/culturedID.gif" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>about us</h2>
            <h3>CultureID dimulai sejak tahun 2003, sebagai bisnis keluarga kecil di Malang. Dua dekade kemudian, cultureID terlahir kembali dengan sentuhan kontemporer yang segar, sambil tetap mempertahankan sejarahnya; perpaduan yang solid antara desain vintage klasik dan pendekatan pop modern. Disini cultureID ingin memberikan kesan “The Perfect cultured ” yaitu dengan memadukan kultur local yang diangkat secara modern yang dapat dikenakan setiap orang mulai dari anak usiaa satu tahun hingga dewasa.</h3>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
        </div>

        <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Results</a></h4>
              <p class="description">Kami bergerak cepat <b>(Run)</b> untuk memberikan kinerja terbaik <b>(Performance)</b> dan hasil yang optimal <b>(Result)</b> dengan tetap mengedepankan Kepuasan Pelanggan</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Organization</a></h4>
              <p class="description">Kami memiliki nilai <b>(Values)</b> dan budaya <b>(Culture)</b> untuk bekerja dengan hati <b>(Passion)</b> dan mempunyai semangat tinggi untuk senantiasa memberikan yang terbaik <b>(Spirit of Excellence)</b></p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Teamwork</a></h4>
              <p class="description">Kinerja dan pencapaian kami sebagai salah satu keluarga besar merupakan hasil kerja sama <b>(Cooperation)</b> dan koordinasi <b>(Coordination)</b> yang unggul dari semua bagian perusahaan</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Implementation</a></h4>
              <p class="description">Kami memastikan setiap strategi dapat terlaksana dengan baik <b>(Follow through to completion)</b> melalui eksekusi yang sempurna <b>(Execution)</b></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Colaborations</h2>
          <p>brand kami telah banyak melakukan kolaborasi dengan brand-brand ternama di indonesia. itulah yang memebuat brand kami semakin besar, terimakasih kepada mereka semua : </p>
        </div>

        <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"> 
              <a href="https://www.instagram.com/epidemicstore/?hl=en">
                <img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-original-577x577/s3/102010/untitled-1_162.png?itok=A48JcZtx" class="img-fluid" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/roughneck1991/?hl=en">
                <img src="https://mark.trademarkia.com/logo-images/superior-metal-products/roughneck-78699735.jpg" alt="">
                </a>  
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/erigostore/?hl=en">
                <img src="https://scontent.fsub8-1.fna.fbcdn.net/v/t1.6435-0/s526x395/46956265_2001218633300581_4629496345860767744_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeGenk1RVPBVB72UVdNosfF0AmYD1tdInekCZgPW10id6adQWCatV00IXWNv6IDR5aAZiYjmIoit8wJ4e7xeWGHy&_nc_ohc=nR8xkhBQJLEAX_24Ok4&_nc_ht=scontent.fsub8-1.fna&tp=7&oh=d0a929af77ecaaa3e040f3345969ad99&oe=60AD9ECE" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/cosmonautspacewear/?hl=en"> 
                <img src="https://scontent.fsub8-1.fna.fbcdn.net/v/t1.6435-9/93385560_101394511546701_6783973910015639552_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeEw8qTpMQ1q9wZXifmlJNitNkYyeJ6RsGs2RjJ4npGwa3EQCFWH2rS2_SBQA6dh5XgRceQ-Cb7UGC8svRiUXbdM&_nc_ohc=tXS_92n_xncAX8ra9lU&_nc_ht=scontent.fsub8-1.fna&oh=a635dae4597e0b0966eed8cfbd6dc2d4&oe=60AB2A19" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/awesamstore/?hl=en">
                <img src="https://scontent.fsub8-1.fna.fbcdn.net/v/t1.6435-9/43417515_984706771733375_4843377582533509120_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeEnyNu8MRbN1OH0TWHJIPtTkSkS8ufTu22RKRLy59O7bQqForcoge3yCJcRfcpyy_T2Y0q9ULNM_1MLhsuFPoJV&_nc_ohc=EwQot3wHDTYAX_1VPWc&_nc_ht=scontent.fsub8-1.fna&oh=da4b69971d92d417407da8e24f8ad847&oe=60AC8FFA" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/inspired27/?hl=en">
                <img src="https://lh3.googleusercontent.com/proxy/-fMxr3sRYf4qBJdx3FpHkawey6Rq2gwfEIp-cmIJdIgLKe6_CopMoKcTcjyz9VC0rBCnD4s6AlH5zhGikS1JaYPqc6HqBvg2PNQ_eg-Xe7K_bJciwzsrQyaFpNscp9nBADB-H9U3eh_Idy7sr3xStrHFcEDjuLeC9Q" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/thanksinsomnia/?hl=en">
                <img src="https://pbs.twimg.com/profile_images/789374301082267648/NNFNcUwc_400x400.jpg" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/livehaf/?hl=en ">
                <img src="https://cdn.snapppt.com/graph-api/1547405572.jpg" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.instagram.com/kevas_store/?hl=en">
                <img src="https://ecs7-p.tokopedia.net/img/cache/215-square/shops-1/2018/12/11/4621419/4621419_fb1a9d11-3fcf-460c-a668-cebcb1c932de.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Product</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-coach">Coach</li>
              <li data-filter=".filter-shirt">T-Shirt</li>
              <li data-filter=".filter-sweater">Sweater</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-coach">
            <img src="https://cf.shopee.co.id/file/78e89b394d684937351c8155881b2f82" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Erigo Coach Jacket Idaina Kaeru </h4>
              <a href="assets/img/portfolio/Erigo Coach Jacket Idaina Kaeru Black.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Erigo Coach Jacket Idaina Kaeru Black"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/Erigo-Coach-Jacket-Idaina-Kaeru-Black-i.30203584.8513919836" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp.450.000 </h6>
              <p>Coach</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-coach">
            <img src="assets/img/portfolio/13.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Deus Ex Machina - Canggu Coach</h4>
              <a href="assets/img/portfolio/14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Deus Ex Machina - Canggu Coach"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/Deus-Ex-Machina-Canggu-Coach-i.251973526.4931815163" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 1.150.000 </h6>
              <p>Coach</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-coach">
            <img src="assets/img/portfolio/15.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Roughneck B535 Social Hazards Coach</h4>
              <a href="assets/img/portfolio/16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Roughneck B535 Social Hazards Coach Maroon"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/Roughneck-B535-Social-Hazards-Coach-Maroon-i.32427818.2722676467" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 195.000 </h6>
              <p>Coach</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-shirt">
            <img src="assets/img/portfolio/3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>LIVEHAF - No Work Tee </h4>
              <a href="assets/img/portfolio/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="LIVEHAF - No Work Tee Black"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/LIVEHAF-Nowork-Tee-Black-i.82611378.3917649552" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 155.000 </h6>
              <p>T-Shirt</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-shirt">
            <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>COSMONAUTS X MEDY POTATO ATTACK</h4>
              <a href="assets/img/portfolio/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="COSMONAUTS X MEDY POTATO ATTACK"><i class="bx bx-plus"></i></a>
              <a href="https://wearecosmonauts.com/products/cosmonauts-x-medy-potato-attack-t-shirt-black?variant=36990114922654" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 869.820 </h6>
              <p>T-Shirt</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-shirt">
            <img src="assets/img/portfolio/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Inspired27 Tshirt - Alexeyn</h4>
             
              <a href="assets/img/portfolio/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Inspired27 Tshirt - Alexeyn"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/Inspired27-Tshirt-Alexeyn-i.101487673.5647208771" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 175.000 </h6>
              <p>T-Shirt</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweater">
            <img src="assets/img/portfolio/7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>OG College Black Gold Crewneck</h4>
              <a href="assets/img/portfolio/8.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="OG College Black Gold Crewneck - Sweater Bordir Pria Guteninc"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/OG-College-Black-Gold-Crewneck-Sweater-Bordir-Pria-Guteninc-i.17443755.7361575231" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 420.000 </h6>
              <p>Sweater</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweater">
            <img src="assets/img/portfolio/9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Russ Sweater Crewneck Autocracy</h4>
              <a href="assets/img/portfolio/10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Russ Sweater Crewneck Autocracy Cream"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/Russ-Sweater-Crewneck-Autocracy-Cream-i.106751288.7058398192" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 400.000 </h6>
              <p>Sweater</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sweater">
            <img src="assets/img/portfolio/11.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>HOOLIGANS Sweater Crewneck Oculus</h4>
              <a href="assets/img/portfolio/12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="HOOLIGANS Sweater Crewneck Oculus Black"><i class="bx bx-plus"></i></a>
              <a href="https://shopee.co.id/HOOLIGANS-Sweater-Crewneck-Oculus-Black-i.28717111.4376047130" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              <h6>Rp. 340.000 </h6>
              <p>Sweater</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Produk disini sangat berkualitas, dengan tetap mempertahankan culturenya sebagai sepatu lokal. saya sangat mendukung adanya CulturedID yang mengangkat culture lokal ke dalam sebuah project fashion di Indonesia.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="https://assets.beepdo.com/wp-content/uploads/2020/06/03120843/dr.Tirta-instagram-.jpg" class="testimonial-img" alt="">
                <h3>dr. Tirta</h3>
                <h4>Doctor &amp; Influencer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  CulturedID mengangkat sesuatu hal yang baru di kalang brand fashion lain, yang dimana mereka mengenalkan sebuah brand dengan tema klasik. berbeda dengan itu CulturedID menampilkan budaya lokal Indonesia yang kemudian diangkat kedalam sebuah fashion.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Produk yang dibuat menggunakan bahan dengan kualitas terbaik dan juga menjaga kepuasan dari pembeli. itulah yang membuat saya memilih produk dari cultureID.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Bang Jago</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Brand cultureID mempunyai produk yang ramah dikantong mahasiswa tapi tidak mengurangi kualitas dari produk itu, selain itu pengiriman juga cepat sampai cuma 1 jam dari jakarta ke malang.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Wisa Wirman</h3>
                <h4>content creator</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Desain yang dimiliki produk-produk dari CultureID memliki ciri khas tersendiri dengan mengangkat kultur lokal Indonesia. 
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/Farli.jpg" alt=""></div>
              <div class="details">
                <h4>Farli Nahrul Javier</h4>
                <span>Leader</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/farlinahrul"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/putrijuli.png" alt=""></div>
              <div class="details">
                <h4>Putri Juli Amelia</h4>
                <span>Anggota</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/putrijulii/"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/lino.jpg" alt=""></div>
              <div class="details">
                <h4>Brilino Pradika Putra</h4>
                <span>Anggota</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="assets/img/team/lino.jpg"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p><a href="https://www.google.com/maps/place/Universitas+Muhammadiyah+Malang,+Kampus+III/@-7.9215169,112.5973649,15z/data=!4m2!3m1!1s0x0:0xb39e4847109109e4?sa=X&ved=2ahUKEwivn9mQjZ7wAhUnILcAHYEYCy0Q_BIwHHoECEMQBQ">Jalan Raya Tlogomas No. 246 Tlogomas, Babatan, Tegalgondo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:0341464318">(0341) 464318</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:infokom@umm.ac.id">infokom@umm.ac.id</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; 2021 <strong>CultureID</strong>.All Right Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
