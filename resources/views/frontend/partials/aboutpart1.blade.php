<!--aboutheading start--->
<section class="pt-5 pb-5">
    <div class="about-part1">
      <div class="container">
        <div class="row">
          @php 
          $address = App\Models\Contact::first();
          @endphp
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="welcome-part">
              <h1>Welcome to "CANZUK STAR" OVERSEAS Pvt. Ltd</h1>
              <div class="welcome_paragraph">
                <p><strong class="c-star">Canzuk Star Overseas</strong> is a company with the best and the leading Immigration Consultants in India, specially focused on helping the aspiring candidates to accomplish their dream of immigration
                  to<strong> Canada, Australia, New Zealand,UK OR
                    USA </strong>any other countries. So, if you’re looking for the best and the leading Immigration Consultants, your search for top-notch and experienced professionals ends with Canzuk Star Overseas.</p>
                <p class="w_p">With more than a decade of experience, we have dealt with several stumbling blocks to establish ourselves as a trusted name in the immigration terrain. We strongly believe in the fact that our clients are our partners
                  in success and
                  offers them unmatched support and expert guidance throughout. So, if you are looking for immigration, consult our well-versed team of the best immigration experts and get answers to all your visa-related queries without any fuss.
                  Over
                  the years, we’ve helped a huge clientele from a diverse spectrum of nationalities from all across the globe</p>
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
                <img src="assets/images/about-gap.png" alt="">
              </div>
              <div class="about-sign">
                <h3>Karan Verma & Kunal Kumar Verma</h3>
                <span>(Chairman and founder)</span>
              </div>
            </div>

          </div>

          <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
            <div class="welcome-img text-md-center">
              <img src="assets/images/about1.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!--aboutheading end--->