<section>
@php
  $get_support_data = App\Models\SupportText::first();
  @endphp
    <div class="section_COL_there">
      <div class="container">
        <div class="text_center_div">
          <div class="text_div text-center">
            <h6><img src="assets/images/be.png" alt="">Countries<img src="assets/images/affter1.png" alt=""></h6>
            <span class="line-left"></span>
            <span class="line-right"></span>
            <h3>

              {!!html_entity_decode($get_support_data->country_title_2)!!}	
            </h3>
            <p>

              {!!html_entity_decode($get_support_data->description)!!}	
              
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>