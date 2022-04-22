<section>
  @php 
  $address = App\Models\Contact::first();
  $get_support_text = App\Models\SupportText::first();

  @endphp
    <div class="Get_in_COL">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-12 ">
            <div class="get_in_text">
              Get in touch
              <span></span>
              <h3>
              
                {!!html_entity_decode($get_support_text->get_in_touch)!!}	
              </h3>
            </div>
            <!--form start -->
            <form action="{{route('store.inquries')}}" method="post" >
  @csrf
            <!--row start -->
            <div class="row">
              <div class="col-lg-6 col-md-6 form_fild">
               
                <div class="form-floating mb-3">
                  <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Your name*">
                  <label for="floatingInput">Your name*</label>
                        @error('name')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                </div>
              </div>
              <div class="col-lg-6 col-md-6 form_fild">
                <div class="form-floating mb-3">
                  <input type="tel" name="phone" class="form-control" id="floatingInput" placeholder="Phone number*" >
                  <label for="floatingInput">Phone number*</label>
                        @error('phone')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                </div>
              </div>
            </div>
            
            <!--email added -->
                <div class="col-12 form_fild">
                    <div class="form-floating mt-3">
                  <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Your Email*">
                  <label for="floatingInput">Your Email*</label>
                        @error('email')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
              </div>
            <!--email-->
            <!--row end-->
            <div class="col-12 form_fild">
              <div class="form-floating mt-3">
                <select  name="services" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected disabled=""> Choose services*</option>
                  <option value="Tourist Visa">Tourist Visa</option>
                  <option value="Work Permit">Work Permit</option>
                  <option value="Study Visa">Study Visa</option>
                  <option value="Permanent Residence">Permanent Residence</option>
                     <option value="Business Visa">Business Visa</option>
                  
                </select>
                       @error('services')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror 
              </div>
             
            </div>
             
            <div class="col-12 form_fild">
              <div class="mb-3">
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type here  massage..."></textarea>
                 
              </div>
            </div>
          
            <div class="form_Btn">
              <button type="submit" class="form_style">
                <i class="fa-solid fa-paper-plane"></i>
                Get a Quote</button>
            </div>
            
              <!--form end -->
          </div>
          <div class="col-md-6 col-lg-6 col-12">
            <div class="space_div_cover">
              <div class="form_content_text">
                <h6>{!!html_entity_decode($get_support_text->side_description)!!}</h6>
              </div>
              <div class="white_div"></div>
              <div class="mail_type_box">
                <div class="row align-items-center mt-5">
                  <div class="col-auto">
                    <div class="calling_div">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text_calling">
                      <p>Call us for information</p>
                      <strong>+91 {{ $address->phone}}</strong>
                    </div>
                  </div>
                  <div class="col  gy-3">
                    <div class="calling_mail">
                      <a href="mailto:{{$address->email}}" class="mail_BTN"> <i class="fa-solid fa-envelope"></i>mail us </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>