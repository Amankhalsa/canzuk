<!--aboutheading start--->
<section class="pt-5 pb-5">
    <div class="about-part1">
      <div class="container">
        <div class="row">
          @php 
          $address = App\Models\Contact::first();
          $About_Data  = App\Models\AboutData ::first();

          @endphp
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="welcome-part">
              <h1>   {!!html_entity_decode($About_Data->title)!!}</h1>
              <div class="welcome_paragraph">
                <p>


                  {!!html_entity_decode($About_Data->para1)!!}
                </p>
                <p class="w_p">

                  {!!html_entity_decode($About_Data->para2)!!}

                </p>
              </div>
            </div>

            <div class="padding-left-ninety">
              <div class="row circle-icon welcome_paragraph py-0">
                <div class="col-md-6 col-sm-12 col-lg-6 pb-3 pb-md-4 pb-lg-4"><i class="fa-solid fa-angles-right"></i>
                  <h4> Praesent feugiat sem mattis.</h4>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6 pb-3 pb-md-4 pb-lg-4"><i class="fa-solid fa-angles-right"></i>
                  <h4>A wonderful serenity.</h4>
                </div>
              </div>

              <div class="row circle-icon welcome_paragraph py-0">
                <div class="col-md-6 col-sm-12 col-lg-6 pb-3 pb-md-4 pb-lg-4"><i class="fa-solid fa-angles-right"></i>
                  <h4>Premium services for you.</h4>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6 pb-3 pb-md-4 pb-lg-4"><i class="fa-solid fa-angles-right"></i>
                  <h4> Set a link back to photo.</h4>
                </div>
              </div>
            </div>
            <div class="padding-left-ninety">
              <div class="row">
                <div class="about_call">
                  <p>"call to ask"
                    <a href="#">any question</a>
                    <span>+91-{{ $address->phone}} &nbsp;</span>
                  </p>
                </div>
              </div>
              <div class="about-gap">
                <img src="{{asset('assets/images/about-gap.png')}}" alt="">
              </div>
              <div class="about-sign">
                <h3>Karan Verma & Kunal Kumar Verma</h3>
                <span>(Chairman and founder)</span>
              </div>
            </div>

          </div>

          <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
            <div class="welcome-img text-md-center">
              <img src="{{asset($About_Data->image)}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!--aboutheading end--->