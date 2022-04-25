  <section>
  @php 
  $address = App\Models\Contact::first();
  $About_Data  = App\Models\AboutData ::first();
  $Our_services = App\Models\OurServices::first();
  @endphp
    <div class="best_service_Col">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="best_service_text">
              <h3>We give the best Services </h3>
              <div class="elementor-widget-container">
                {!!html_entity_decode($Our_services->para1)!!}
              </div>
              <div class="elementor-widget-container">
                {!!html_entity_decode($Our_services->para2)!!}
              </div>
            </div>
            <div class="row">
              <div class="col-auto">
                <div class="icon_Col_cheak">
                  <i class="fa-solid fa-check"></i>
                </div>
              </div>
              <div class="col">
                <div class="text_page">
                  <p>
                    {!!html_entity_decode($Our_services->para3)!!}
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-auto">
                <div class="icon_Col_cheak">
                  <i class="fa-solid fa-check"></i>
                </div>
              </div>
              <div class="col">
                <div class="text_page">
                  <p>
                    {!!html_entity_decode($Our_services->para4)!!}
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-auto">
                <div class="icon_Col_cheak">
                  <i class="fa-solid fa-check"></i>
                </div>
              </div>
              <div class="col">
                <div class="text_page">
                  <p>
                    {!!html_entity_decode($Our_services->para5)!!}
                  </p>
                </div>
              </div>
            </div>
            <div class="mySwiper_two_div">
              <div class="swiper mySwiper_two">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="{{asset($Our_services->img1)}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset($Our_services->img2)}}" alt=""></div>
                  {{-- <div class="swiper-slide"><img src="assets/images/theme2.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/theme3.jpg" alt=""></div> --}}
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="tabs-div">
              <ul class="nav nav-tabs  nav-pills mb-5 nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <p>
                     {!!html_entity_decode($Our_services->homepara1)!!}
                  </p>
                  <p>
                    {!!html_entity_decode($Our_services->homepara2)!!}
                  </p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <p>
                    {!!html_entity_decode($Our_services->profilepara1)!!}

                  </p>
                  <p>
                    {!!html_entity_decode($Our_services->profilepara2)!!}

                  </p>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <p>

                    {!!html_entity_decode($Our_services->contactpara1)!!}
                  </p>
                  <p>
                    {!!html_entity_decode($Our_services->contactpara2)!!}

                  </p>
                </div>
              </div>
            </div>
            <div class="row gy-5">
              <div class="col-md-6">
                <div class="brand_package">
                  <div class="brand">
                    <div class="iconCol py-4">
                      <img src="assets/images/service_img_2.png" alt="...">
                    </div>
                    <div class="title--text">
                      <h3>
                        <a href="#">Brand & Package</a>
                      </h3>
                    </div>
                    <div class="items_content">
                      <p> A feature of great leaders is that they never stop for learning. Mentorship and Coaching for your leaders</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="brand_package">
                  <div class="brand">
                    <div class="iconCol py-4">
                      <img src="assets/images/service_img_1.png" alt="...">
                    </div>
                    <div class="title--text">
                      <h3>
                        <a href="#">Brand & Package</a>
                      </h3>
                    </div>
                    <div class="items_content">
                      <p> A feature of great leaders is that they never stop for learning. Mentorship and Coaching for your leaders</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 gy-sm-5">
            <div class="chlidClass_contect">
              <div class="row">
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">services
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">Tourist Visa
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">Business Visa
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">Student Visa
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">About us
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">Our Services
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">Our Team
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">Team Details
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass ">
                  <ul>
                    <li>
                      <a href="#">Testimonials
                        <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="chlidClass _col_text">
                  <div class="contect_text">
                    <h3 class="mt-5">Contact </h3>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="locetionCoL_icon">
                        <i class="fa-solid fa-map-location-dot mb-4"></i>
                      </div>
                    </div>
                    <div class="col locetionCoL_icon">
                      <span>  {{ $address->address}}</span>
                    </div>
                  </div>
                  <div class="row align-items-center g-3">
                    <div class="col-auto">
                      <div class="locetionCoL_icon">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                    </div>
                    <div class="col locetionCoL_icon">
                      <span>+91 {{ $address->phone}}</span>
                    </div>
                  </div>
                  <div class="row align-items-center g-3">
                    <div class="col-auto">
                      <div class="locetionCoL_icon">
                        <i class="fa-solid fa-envelope mt-2"></i>
                      </div>
                    </div>
                    <div class="col locetionCoL_icon">
                      <span>{{ $address->email}}</span>
                    </div>
                  </div>
                  <div class="contect_text">
                    <h3 class="mt-5">Brochures</h3>
                    <p class="mb-3">View our 2020 Medical prospectus of brochure for an easy to read guide on all of the services offer. </p>
                  </div>
                  <div class="download_COl">
                    <a href="{{asset($About_Data->brochure)}}" download="">
                      <i class="fa-solid fa-envelope"></i>
                      Download Brochure
                    </a>
                  </div>
                  <div class="download_COl mt-4">
                    <a href="{{asset($About_Data->brochure)}}" download="">
                      <i class="fa-solid fa-file-pdf"></i>
                      Download Brochure
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>