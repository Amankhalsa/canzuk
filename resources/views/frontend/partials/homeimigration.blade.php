<section>
  @php 
  $address = App\Models\Contact::first();
  $home_content = App\Models\HomeContent::first();

  @endphp
    <div class="Immigration_Col space_div" id="counter">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 animate__animated animate__bounceInLeft animate__slow">
            <div class="img_Col">
              <div class="img_Col_full">
                <img src="{{asset($home_content->image)}}" alt="" class="img-fluid">
                <div class="top_div">
                  <div class="row row align-items-center g-2">
                    <div class="col-auto">
                      <span class="clientIcon"><i class="fa-solid fa-users"></i></span>
                    </div>
                    <div class="col">
                      <div class="counter_div">
                        <span class="countNumber"><span class="counter-value" data-count="500">0</span> <span>+</span></span>
                        <div class="title_div">
                          Satisfied Clients
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 animate__animated animate__bounceInRight animate__slow">
            <div class="title_div">
              <div class="sub_title">
                <h6>Who we are</h6>
                <h3>
                  <span>{!!html_entity_decode($home_content->title)!!} </span>
                </h3>
                <p>{!!html_entity_decode($home_content->description)!!}</p>
              </div>
            </div>
            <div class="list_items">
              <div class="list_meta">
                <div class="list_doc animate__animated  animate__lightSpeedInRight animate__slower	">
                  <b>Company Profile</b>
                  – {{ $address->address}}
                </div>
              </div>
            </div>
            <div class="list_items">
              <div class="list_meta">
                <div class="list_doc animate__animated  animate__lightSpeedInRight animate__slower	">
                  <b>Consultants</b>
                  –{!!html_entity_decode($home_content->consultants)!!}  {{ $address->phone}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
