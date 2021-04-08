@include('header')

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container ">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active ">
          <div class="carousel-container">
            <div class="carousel-content">
              <img class="imgdiv" src="{{asset('assets/img/slide/slide-1st.png')}}"
                style="height:80vh; width:39%;margin-top: px;">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <div class="carousel-content">
              <img class="imgdiv" src="{{asset('assets/img/slide/slide-02.png')}}"
                style="height: 70vh; width: 39%;margin-top:;">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <div class="carousel-content">
              <img class="imgdiv" src="{{asset('assets/img/slide/slide-03.png')}}" style="height: 70vh; width:39%;">
            </div>
          </div>
        </div>

      </div>

      <a class=" carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->

{{-- Div only for mobile view --}}
<div id="content-mobile">
  <div id="mycarousel" class="carousel slide" data-ride="carousel" data-bs-interval="5000"
    class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner">

      <div class="carousel-item active">
        <a href="/" class="mycaro">
          <img src="{{asset('assets/img/slide/slide-1st.png')}}" alt="banner">
        </a>
      </div>

      <div class="carousel-item">
        <a href="/" target="_blank" class="mycaro">
          <img src="{{asset('assets/img/slide/slide-02.png')}}" alt="banner">
        </a>
      </div>

      <div class="carousel-item">
        <a href="/" target="_blank" class="mycaro">
          <img src="{{asset('assets/img/slide/slide-03.png')}}" alt="banner">
        </a>
      </div>

    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev mycaro-control mycaro-prev" href="#mycarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next mycaro-control mycaro-next" href="#mycarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>

<main id="main">

  <!-- ======= Featured Section ======= -->
  <section id="featured" class="featured">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-lg-4 mt-12 mt-lg-0">
          <a href="/courses">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3>Courses</h3>
            </div>
          </a>
        </div>
        <div class="col-lg-4 mt-12 mt-lg-0">
          <br class="mobile" />
          <a href="https://www.youtube.com/results?search_query=studymall">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3>Youtube</h3>
              </p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 mt-12 mt-lg-0">
          <br class="mobile" />
          <br class="mobile" />
          <a href="/team">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3>Faculty</h3>
              </p>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section><!-- End Featured Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p><strong>Happy Environment</strong> </p>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
              class="purecounter"></span>
            <p><strong>Teachers</strong> </p>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
              class="purecounter"></span>
            <p><strong>Students & counting</strong> </p>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
              class="purecounter"></span>
            <p><strong>Support Team</strong> </p>

          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Services Section ======= -->
  {{-- <section id="services" class="services">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-6 ">
          <a href="https://www.youtube.com/results?search_query=studymall">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <strong>Videos</strong>
              <p>Find Our Videos on Youtube Platform</p>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <strong>Exams</strong>
              <p>Exams</p>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="team">
            <div class=" icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <strong> Faculty</strong>
              <p>Faculties at Study Mall</p>
            </div>
          </a>
        </div>

      </div>

    </div>
  </section><!-- End Services Section --> --}}

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

      {{-- <div class="section-title">
        <h2>Students all over from India</h2>
      </div> --}}

    </div>
  </section><!-- End Clients Section -->

</main><!-- End #main -->

@include('footer')