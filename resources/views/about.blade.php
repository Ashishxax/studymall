@include('header')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.html">Home</a></li>
        <li>About Us</li>
      </ol>
      <h2>About Us</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <img src="{{asset('assets/img/team/chandan.jpeg')}}"
            style="max-width: 62%;margin-left: 79px;margin-top: -13px;border-radius: 18px;" class="img-fluid" alt="">
          <div class="member" style="margin-left:139px;">
            <h4>Chandan Kumar</h4>
            <span>Director & Management</span>
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>हमारा लक्ष्य</h3><br>

          <p class="animate__animated animate__fadeInUp">STUDY MALL एक ऑनलाइन प्लेटफार्म के साथ साथ एक शिक्षा का
            संस्थान भी है । जिसका संचालन पटना से होता है । यहां पर आपको सभी सरकारी परीक्षाओं के साथ साथ Academic और

            Defence की  भी संपूर्ण तैयारी एक उचित और कारगर तरीके से कराई जाती है और अध्ययन सामग्री के साथ
            online/offline परीक्षा भी ली जाती है। सभी विद्यार्थियों के लिए doubt को हल भी कराई जाती है और यह
            परीक्षा स्तर के अनुसार ही पढ़ाया जाता है ।<br><br>
            इस संस्थान से हजारों विद्यार्थियों ने सरकारी नौकरी पाने की सपने को साकार किया है ।
            हमारे यहां भारत के कुशल शिक्षकों द्वारा पढ़ाया जाता है । सभी शिक्षक अपने विद्यार्थियों का सपना पूरा करने
            के लिए हमेशा तत्पर रहते हैं ।</p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  {{-- <section id="clients" class="clients">
    <div class="container">

      <div class="section-title">
        <h2>Teachers from Every Department</h2>
      </div>

    </div>
  </section> 


  <section id="team" class="team">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch about_us">
          <div class="member">
            <img src="assets/img/team/chandan.jpeg" alt="">
            <h4>Chandan Kumar</h4>
            <span>Director & Management</span>
            <p>
              नौकरी ADDA<br>
              Vidya Education Group<br>
              Exam पुर (Bihar)<br>
              Study Mall (Online)<br>
            </p>
          </div>
        </div>
      </div>
  </section> --}}

  </div>
  </section>

</main><!-- End #main -->

@include('footer')