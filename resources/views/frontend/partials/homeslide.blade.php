<section>
    <div class="section_Col">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @php
       $slider = DB::table('sliders')->get();

          @endphp
          {{-- swipper  --}}
          @foreach($slider as $key => $slider_img)
          <div class="swiper-slide">
            <div class="images_full_images">
              <img src="{{asset($slider_img->image)}}" alt="">
              <div class="container">
                <div class="swiper_heading">
                  <h1 class="animate__animated  animate__slideInRight animate__slow">
                    {!!html_entity_decode($slider_img->title)!!}
                    {{-- {{$slider_img->title}} --}}
                  </h1>
                  <p class="animate__animated  animate__slideInRight animate__slow">
                    {{-- If you’re a newcomer to Canada, free immigrant<br> services including settlement support. --}}
                    {!!html_entity_decode($slider_img->description)!!}

                  </p>
                  <div class="bTn_Col_swiper animate__animated animate__fadeIn animate__slow">
                    <a href="{{route('contact.page')}}" class="btn_style_COL">Book an appionment <span><i class="fa-solid fa-border-all"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- swipper  --}}

    
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>