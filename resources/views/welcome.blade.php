<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Housing Society</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/inner-page.css') }}">
    @livewireStyles
</head>

<body>
    <div class="wrap">

        <!-- ======= Hero Section ======= -->
        <section id="hero">
          <div class="hero-container" data-aos="fade-up">
            <h1>Smart Society with smart management </h1>
            <h2>One stop for innovative housing solutions.</h2>
            <a href="{{ route('dashboard') }}" class="btn-get-started scrollto">Get Started</a>
          </div>
        </section><!-- End Hero -->

        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center">
          <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
              <h1 class="text-light"><a href="{{ route('home') }}"><span></span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
              <ul>
                <li class="active"><a href="#hero">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li ><a href="#team">About us</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
            </nav><!-- .nav-menu -->

          </div>
        </header><!-- End Header -->

        <main id="main">




          <!-- ======= Features Section ======= -->
          <section id="features" class="features">
            <div class="container">

              <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="card" data-aos="fade-up">
                    <img src="assets/img/Mission.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <i class="bx bx-tachometer"></i>
                      <h5 class="card-title"><a href="">Our Mission</a></h5>
                      <p class="card-text">Mission is to avoid human interactions during pendamic. Work from home, Manage from home! A one stop All-in-one software platform for Society Management.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0 d-flex align-items-stretch">
                  <div class="card" data-aos="fade-up" data-aos-delay="150">
                    <img src="assets/img/Plan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <i class="bx bx-file"></i>
                      <h5 class="card-title"><a href="">Our Plan</a></h5>
                      <p class="card-text"> To redefine management and to meet unique housing demands with extraordinary solutions.</p>
                    </div>
                  </div>
                </div>
               <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                  <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/Vision.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <i class="bx bx-show"></i>
                      <h5 class="card-title"><a href="">Our Vision</a></h5>
                      <p class="card-text">Vision is to create a digital society which allows us to manage all activities in just one click.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section><!-- End Features Section -->

          <!-- ======= Cta Section ======= -->
          <section id="cta" class="cta">
            <div class="container">

              <div class="text-center" data-aos="zoom-in">
                <h3>Not using our Application? Would you like to sign up?</h3>

                <a class="cta-btn" href="signin.html">Sign up</a>
              </div>

            </div>
          </section>
          <!-- End Cta Section -->

          <!-- ======= Services Section ======= -->
          <section id="services" class="services">
            <div class="container">

              <div class="section-title" data-aos="fade-down">
                <span>Services</span>
                <h2>Services</h2>
                <p>Key Features</p>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="icofont-computer" style="color: #0ea5e0;"></i>
                    <h4><a href="#">Smart App</a></h4>
                    <p>The Smart App To Become A Smart Society. Keep every record of the society handy and manage it efficiently.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="icofont-chart-bar-graph" style="color: #07cc70;"></i>
                    <h4><a href="#">Analytical Dashboard</a></h4>
                    <p>Interactive and user-friendly dashboard for all.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="icofont-settings" style="color: #f0b103;"></i>
                    <h4><a href="#">Easy Payment of Maintenance Dues</a></h4>
                    <p>Online electricity and gas bill Payment.Pay your electricity and gas bills in less than few clicks. And helps to manage society funds.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
                    <i class="icofont-tasks-alt" style="color: #a00098;"></i>
                    <h4><a href="#">Event Management</a></h4>
                    <p>Helps you to manage all kinds of activities and events conducted in society. From daily society meetings to Ganesh Chaturthi Celebration.</p>
                  </div>
                </div>
              </div>

            </div>
          </section><!-- End Services Section -->


          <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials">
            <div class="container">

              <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Kendal.png" class="testimonial-img" alt="">
                  <h3>Kendall Jenner</h3>
                  <h4>Secretary of Vardhman Nagar(Dombivli)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I have recently shifted to my new Apartment. This application allowed me to get to know about my neighbours and other society members. Made new friends through this application.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>

                <div class="testimonial-item">
                  <img src="assets/img/testimonials/jake.jpg" class="testimonial-img" alt="">
                  <h3>Jake Peralta</h3>
                  <h4>Resident at Tambe Nagar(Mulund)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    All that a society needs.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>

                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Michael.jpg" class="testimonial-img" alt="">
                  <h3>Michael Scott</h3>
                  <h4>Secretary at Galaxy Apartment(Bandra)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    One click to contact your society members. Amazing User Interface.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>

                <div class="testimonial-item">
                  <img src="assets/img/testimonials/ada.png" class="testimonial-img" alt="">
                  <h3>Ada Shelby</h3>
                  <h4>Resident at Runwal Greens(Nahur)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Flexible and smart interface for society management.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>

                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Emilia.jpg" class="testimonial-img" alt="">
                  <h3>Emilia Clarke</h3>
                  <h4> Secretary at Kings Landing(Croatia)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Amazing software by the developers. Flexible and smart interface for Society Management.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>

              </div>

            </div>
          </section><!-- End Testimonials Section -->

          <!-- ======= Team Section ======= -->
          <section id="team" class="team">
            <div class="container">

              <div class="section-title" data-aos="fade-down">
                <span>Team</span>
                <h2>Team</h2>

              </div>

              <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Faraz Hussain</h4>
                        <span>Student</span>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mt-4 mt-md-0">
                  <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Ria Patole</h4>
                        <span>Student</span>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mt-4 mt-lg-0" data-wow-delay="0.2s">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Ved Thakue</h4>
                        <span>Student</span>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mt-4 mt-lg-0" data-wow-delay="0.3s">
                  <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Sanjana Gate</h4>
                        <span>Student</span>
                      </div>

                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Team Section -->



          <!-- ======= F.A.Q Section ======= -->
          <section id="faq" class="faq">
            <div class="container">

              <div class="section-title" data-aos="fade-down">
                <span>F.A.Q</span>
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
              </div>

              <div class="faq-list">
                <ul>
                  <li data-aos="fade-up">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Why do you need this Application? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                      <p>
                       This Application allows you to get updated information about various activities happening in your society. In your busy schedule, you can manage your esseential society activity along with your day-to-day routine.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">How should I regiester my society in this Application? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                      <p>
                        The process is simple. You just have to sign up, enter valid credentials, fill requierd information and get verifiled by our team.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Do all society members have to sign up individually? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                      <p>
                        No, The Secretary of the society will fill the required form and enter details of the society members.
                        You can also ask the team by giving details to our team member. He will create accounts for rest of the society members.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Can a society member arrange meetings? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                      <p>
                       No, the Secretary represents the society. Arranging meetings and events is in hands of Secretary and the board members.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">How do I file a Complaint?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                      <p>
                        The process os quite easy. You have to sign in, click on "Query" button, Explain your query in detail and Finally click on "Submit" button.
                      </p>
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </section><!-- End F.A.Q Section -->

          <!-- ======= Contact Us Section ======= -->
          <section id="contact" class="contact">
            <div class="container">

              <div class="section-title" data-aos="fade-down">
                <span>Contact Us</span>
                <h2>Contact Us</h2>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Railway Station, Plot No 12, Bandra West, Mumbai-400706</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                  <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>mohammedhussain@ternaengg.ac.in<br>vedthakur@ternaengg.ac.in</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+91 9082905015<br>+91 7303272781</p>
                  </div>
                </div>
              </div>

                <livewire:contact-form />
            </div>
          </section><!-- End Contact Us Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer"></footer>



      </div>

      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script>
        // $(function ($) {
        //     $('.cc-number').payment('formatCardNumber');
        //     $('.cc-exp').payment('formatCardExpiry');
        //     $('.cc-cvv').payment('formatCardCVC');
        //     $('form').submit(function (e) {
        //         e.preventDefault();

        //         var cardType = $.payment.cardType($('cc-number').val());
        //         $('.cc-number').toggleInputError(!$payment.validateCardNumber($('.cc-number').val()));
        //         $('.cc-exp').toggleInputError(!$payment.validateCardExpiry($('.cc-exp').payment(
        //             'cardExpiryVal')));
        //         $('.cc-cvv').toggleInputError(!$payment.validateCardCVC($('.cc-cvv').val(), cardType));

        //         $('.validation').removeClass('text-danger text-success');
        //         $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');

        //     });
        // });

    </script>
    @livewireScripts
</body>

</html>
