<section>
    <div class="img-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="img-form1">
              <img src="assets/images/contact_logo_img.webp" alt="contact_logo">
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
         <form action="{{route('store.inquries')}}" method="post" >
                            @csrf
            <div class="img-form2">
              <h3>Make a free consultation with our expert team to solve your prolems. </h3>
              <div class="img-form3">
                <p>For any inquiries relating to my Retail and Leadership Programs* </p>
                <div class="form-floating mb-3">
                  <input type="text" name="name"  class="form-control" id="name" placeholder="user name">
                  <label for="name">Your name*</label>
                    @error('name')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                  <label for="email">Your mail*</label>
                    @error('email')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="name"  name="phone" class="form-control" id="floatingInput" placeholder="phone">
                  <label for="floatingInput">Your phone*</label>
                    @error('phone')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                </div>
                <select  name="services" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                   <option selected disabled=""> Choose services*</option>
                  <option value="Tourist Visa">Tourist Visa</option>
                  <option value="Work Permit">Work Permit</option>
                  <option value="Study Visa">Study Visa</option>
                  <option value="Permanent Residence">Permanent Residence</option>
                    <option value="Business Visa">Business Visa</option>
                </select>
                  @error('phone')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror 
                        
                        
                        <!--message-->
                          <div class="col-12 form_fild">
              <div class="mb-3">
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type here  massage..."></textarea>
                 
              </div>
            </div>
                        <!--message-->
                        
                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa-solid fa-circle-check"></i>
                    Consult today</button>
                </div>
              </div>
          </div>
          </form>
            </div>
        </div>
      </div>
    </div>
  </section>