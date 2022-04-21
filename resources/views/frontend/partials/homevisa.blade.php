<section>
  @php 
  $address = App\Models\Contact::first();
  @endphp
    <div class="countries_col">
      <div class="text-center cuntries_text">
        <img src="assets/images/be.png" alt="">Countries<img src="assets/images/affter1.png" alt="">
        <h3><span>Immigration & Visa are allowed<br> some Countries</span></h3>
      </div>
      <div class="container">
        <div class="ct-point-image">
          <img class="ct-point-image_style" src="assets/images/section.png" alt="">
          <div class="ctPointCol ct-point-icon">
            <div class="tooltip_div">
              <img src="assets/images/flag.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="">
            </div>
            <div class="ct-point-meta">
              <div class="ct-point-phone">
                 <b>Phone:</b>
                  +91 {{ $address->phone}}
              </div>
              <div class="ct-point-email">
                <b>Email:</b>
                {{ $address->email}}
              </div>
              <div class="ct-point-address">
                <b>Address:</b>
                {{ $address->address}}
              </div>
            </div>
          </div>
          <div class="ctPointCol ct-point-icon1">
            <img src="assets/images/flag1.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="">
            <div class="ct-point-meta">
              <div class="ct-point-phone">
                 <b>Phone:</b>
                  +91 {{ $address->phone}}
              </div>
              <div class="ct-point-email">
                <b>Email:</b>
                {{ $address->email}}
              </div>
              <div class="ct-point-address">
                <b>Address:</b>
                {{ $address->address}}
              </div>
            </div>
          </div>
          <div class="ctPointCol ct-point-icon2">
            <img src="assets/images/flag1.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="">
            <div class="ct-point-meta">
              <div class="ct-point-phone">
                 <b>Phone:</b>
                  +91 {{ $address->phone}}
              </div>
              <div class="ct-point-email">
                <b>Email:</b>
                {{ $address->email}}
              </div>
              <div class="ct-point-address">
                <b>Address:</b>
                {{ $address->address}}
              </div>
            </div>
          </div>
          <div class="ctPointCol ct-point-icon3">
            <img src="assets/images/flag4.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="">
            <div class="ct-point-meta">
              <div class="ct-point-phone">
                 <b>Phone:</b>
                  +91  {{ $address->phone}}
              </div>
              <div class="ct-point-email">
                <b>Email:</b>
                {{ $address->email}}
              </div>
              <div class="ct-point-address">
                <b>Address:</b>
                {{ $address->address}}
              </div>
            </div>
          </div>
          <div class="ctPointCol ct-point-icon4">
            <img src="assets/images/flag3.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="">
            <div class="ct-point-meta">
              <div class="ct-point-phone">
                 <b>Phone:</b>
                  +91  {{ $address->phone}}
              </div>
              <div class="ct-point-email">
                <b>Email:</b>
                {{ $address->email}}
              </div>
              <div class="ct-point-address">
                <b>Address:</b>
                {{ $address->address}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>