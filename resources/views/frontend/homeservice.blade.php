<section>
  @php 
   $get_services = App\Models\Servies::first();
   $get_cards = App\Models\Servies::get();

  @endphp
    <div class="servies_col">
      <div class="text-center servive_text">
        <h6><span>
            <img src="assets/images/affter.png" alt="">
          </span>{{$get_services->name}}
          <span><img src="assets/images/before.png" alt=""></span>
        </h6>
        <h3>{!! html_entity_decode($get_services->heading) !!}</h3>
      </div>
      <div class="container">
        <div class="row mt-5">
          @foreach($get_cards as $key => $cards)
          <div class="grid-item col-md-6 col-xl-4 animate__animated   animate__rotateIn granimate__slower">
            <div class="grid-item-inner">
              <div class="item--icon">
                <i class="{{$cards->icon}}"></i>
              </div>
              <div class="item--meta">
                <h3 class="item--title">{{$cards->title}}</h3>
                <div class="item--description">
                  {{$cards->description}}
                
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
@endforeach

          {{-- ============== --}}
    
        </div>
      </div>
    </div>
  </section>
