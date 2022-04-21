<section>
  @php 
   $get_services = App\Models\Servies::first();
  @endphp
    <div class="servies_col">
      <div class="text-center servive_text">
        <h6><span>
            <img src="assets/images/affter.png" alt="">
          </span>{{$get_services->name}}
          <span><img src="assets/images/before.png" alt=""></span>
        </h6>
        <h3>{{$get_services->heading}}</h3>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="grid-item col-md-6 col-xl-4 animate__animated   animate__rotateIn granimate__slower">
            <div class="grid-item-inner">
              <div class="item--icon">
                <i class="fa-solid fa-street-view"></i>
              </div>
              <div class="item--meta">
                <h3 class="item--title">Student Visa</h3>
                <div class="item--description">
                  The majority of our clients approach us through word of mouths, which.
                  <div class="item--readmore">
                    <a href="#" class="btn-arrow-right">
                      <span>read more</span>
                      <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-md-6 col-xl-4 animate__animated   animate__rotateIn granimate__slower">
            <div class="grid-item-inner">
              <div class="item--icon">
                <i class="fa-solid fa-anchor"></i>
              </div>
              <div class="item--meta">
                <h3 class="item--title">Tourist Visa</h3>
                <div class="item--description">
                  We help you with your International travel by appling for your Visa.
                  <div class="item--readmore">
                    <a href="#" class="btn-arrow-right">
                      <span>read more</span>
                      <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-md-6 col-xl-4 animate__animated   animate__rotateIn granimate__slower">
            <div class="grid-item-inner">
              <div class="item--icon">
                <i class="fa-solid fa-street-view"></i>
              </div>
              <div class="item--meta">
                <h3 class="item--title">Business Visa</h3>
                <div class="item--description">
                  A business visa is an authorization of the designated.
                  <div class="item--readmore">
                    <a href="#" class="btn-arrow-right">
                      <span>read more</span>
                      <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-md-6 col-xl-4 animate__animated   animate__rotateIn granimate__slower">
            <div class="grid-item-inner">
              <div class="item--icon">
              <i class="fa-solid fa-business-time"></i>
              </div>
              <div class="item--meta">
                <h3 class="item--title">Immigration & PR</h3>
                <div class="item--description">
                  The majority of our clients approach us through word of mouths, which.
                  <div class="item--readmore">
                    <a href="#" class="btn-arrow-right">
                      <span>read more</span>
                      <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item col-md-6 col-xl-4 animate__animated   animate__rotateIn granimate__slower">
            <div class="grid-item-inner">
              <div class="item--icon">
                <i class="fa-solid fa-street-view"></i>
              </div>
              <div class="item--meta">
                <h3 class="item--title">Work Visa</h3>
                <div class="item--description">
                  we are certified and authorized work visa agents. Working in a.
                  <div class="item--readmore">
                    <a href="#" class="btn-arrow-right">
                      <span>read more</span>
                      <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
