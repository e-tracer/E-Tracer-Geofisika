 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Branda E-Tracer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700')}}"  rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="fas fa-bars js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">          
          <img src="images/logo.png" alt="Image" class="img-fluid" width="100" height="100">
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="{{ url('beranda')}}">BERANDA</a></li>
                <li><a href="{{ url('berita')}}">BERITA</a></li>
                <li><a href="{{ url('buatBerita')}}">BUAT BERITA</a></li>                
                <li><a href="{{ url('KuisionerPendahuluan')}}">KUISIONER</a></li>
                <li><a href="">KONTAK</a></li>
                <li><a href="">TENTANG</a></li>
              </ul>
            </nav>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/tangan.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">E-TRACER</h1>
            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">TEKNIK GEOFISIKA</h1>
            <h3 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">INSTITUT TEKNOLOGI SUMATERA</h3>

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row row-centered no-gutters align-items-stretch overlap-section">

        <div class="col-md-8 col-centered">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">SIGN IN</h2>
            <form method="post">
              <div class="form-group">
                <label for="fq_name">EMAIL</label>
                <input type="text" class="form-control btn-block" id="fq_name" name="fq_name" placeholder="Masukkan Email">
              </div>
              <div class="form-group mb-4">
                <label for="fq_email">NIM</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Masukkan NIM">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="LOGIN">  
              </div>
            </form>
          </div>
        </div>

       	
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="fas fa-phone"></span>
            </div>
            <h2 class="my-4 heading">Servis</h2>
            <p>(021) 123456 Teknik Geofisika</p>
          </div>
        </div>
      </div>
    <div class="site-section">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">QUOTES</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
             Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by Kelompok kame                        
         	</p>
          </div>
          
        </div>
      </div>
  </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>
    
  </body>
</html>