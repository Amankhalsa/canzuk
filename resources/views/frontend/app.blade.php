<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <!--animated css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!--<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->
     <!--animated css-->
  <link rel="stylesheet" href="assets/css/style.css">
        <!-- Toaster CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  
  <link rel="icon" href="assets/images/logo.png">
  <title>:: Canzuk star ::</title>
  </head>
<body>
  <header>
    <div class="header_top_Col">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col d-none d-xl-block">
            <div class="icon_Col">
              <ul>
                <li>
                  <a href="#"><i class="fa-solid fa-envelope"></i></a>
                  canzukstaroverseas@gmail.com
                </li>
                <li>
                  <a href="#"><i class="fa-solid fa-clock"></i></a>
                  Mon - Sat: 9:00 am - 05.00pm
                </li>
                <li>
                  <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                  Near Chaman Farm, Ladwa Road, Shahbad(M)
                </li>
              </ul>
            </div>
          </div>
          <div class="col-auto text-end d-none d-xl-block">
            <div class="buttonClass">
              <a href="{{route('contact.page')}}" class="btnSTyle">Appionment
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
          <li class="col-auto text-end d-none d-xl-block">
              <a href="login"><i class="fa fa-sign-in">&nbsp;</i>Login
              </a>
            </li>
            <li class="col-auto text-end d-none d-xl-block">
              <a href="register"><i class="fa fa-user">&nbsp;</i>Register
              </a>
                      </li>
          </div>
        </div>
      </div>
    <div class="headerCol">
      <div class="container">
        <div class="row  align-items-center">
          <div class="col-auto">
            <div class="logo_Col">
                <a href="{{url('/')}}">
              <img src="assets/images/logo.png" alt="">
              </a>
            </div>
          </div>
          <div class="col text-center">
            <div class="navigation  d-none d-xl-block">
              <ul>
                <li class="@yield('home_select')">
                  <a href="{{url('/')}}">Home</a>
                </li>
                <li class="@yield('about_select')">
                  <a href="about">abouts us</a>
                </li>
                <li class="@yield('service_select')">
                  <a href="services">our service</a>
                </li>
                <li class="@yield('contact_select')">
                  <a href="contact">contact us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-auto d-none d-xl-block">
            <div class="iconCol_two">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col text-end d-block d-xl-none top_bar">
            <button class="button is-text" id="menu-button" onclick="buttonToggle()">
               <div class="button-inner-wrapper">
                   <span class="icon menu-icon"></span>
               </div>
           </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="sidevar">
        <div class="col-auto">
          <div class="logo_Col">
            <img src="assets/images/logo.png" alt="">
          </div>
        </div>
        <div class="btn_input">
          <input type="text" name="" value=""  placeholder="Search">
          <button type="button" name="button" class="sideBTn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <ul>
          <li class="@yield('home_select')">
            <a href="{{url('')}}">Home</a>
          </li>
          <li class="@yield('about_select')">
            <a href="about">abouts us</a>
          </li>
          <li class="@yield('service_select')">
            <a href="services">our service</a>
          </li>
          <li class="@yield('contact_select')">
            <a href="contact">contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  @yield('content')
  <section>
    <div class="footer_section">
      <div class="container">
        <div class="footer_color_Col">>
          <div class="row g-3">
            <div class="col-md-3 ">
              <div class="footer_text">
                <div class="forter_title">
                  <h3>Who<b>We are!</b></h3>
                  <div class="text_p_title">
                    <p>We are amongst the Best Study Visa & Immigration Consultancy in shahbad with a solid track record.</p>
                  </div>
                  <div class="strong_title">
                    <strong>Open Hours:</strong><br>
                    Mon – Sat: 9 am – 5 pm,<br>
                    Sunday: CLOSED
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="footer_text">
                <div class="forter_title">
                  <h3>mission</h3>
                  <div class="text_p_title">
                    <p>Our mission is to provide the best immigration services in India at affordable prices. We always try to provide World top class clients for our students in world-class institutions. </p>
                  </div>
                  <div class="social_Col">
                    <ul>
                      <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                      </li>
                      <li>
                      <a href="#">  <i class="fa-brands fa-instagram"></i></a>
                      </li>
                      <li>
                      <a href="#">  <i class="fa-brands fa-google-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_text">
                <div class="forter_title">
                  <h3>Official info: </h3>
                <div class="location_Col">
                  <ul>
                    <li>
                      <span><i class="fa-solid fa-location-dot"></i></span>
                      <span>Near Chaman Farm, Ladwa Road, Shahbad </span>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-phone mt-3"></i></span>
                      <span>+91 6284181807 </span>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-envelope mt-3"></i></span>
                      <span>	canzukstaroverseas
                        @gmail.com </span>
                    </li>
                  </ul>

                </div>
                </div>
              </div>
            </div>
            <div class="col-md-3  col-12">
              <div class="footer_text">
                <div class="forter_title">
                  <h3>Usefull Links </h3>
                <div class="links_Col">
                  <ul>
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">About Us</a>
                    </li>
                    <li>
                      <a href="#">Our Services</a>
                    </li>
                    <li>
                      <a href="#">  Client Review</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                  </ul>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_end">
      <p>2022 - {{date('Y')}} © All rights reserved by <b>Canzuk Star.</b></p>
    </div>
  </section>
  <div id="stop" class="scrollTop">
  <span><a href=""><i class="fa-solid fa-arrow-up"></i></a></span>
</div>
    <!--<script src="https://unpkg.com/aos@next/dist/aos.js"></script>    -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
   <!-- Toaster Javascript cdn -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
  
  <!--<script>-->
  <!--  AOS.init();-->
  <!--</script>-->
</body>
</html>