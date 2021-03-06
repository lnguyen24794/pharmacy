@extends('home.layouts.app')

@section('title', __('Contact'))

@section('content')
<section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4 data-cms="{{app()->getLocale()}}-contact-1">TTB GROUP</h4>
            <h1>@lang('Contact')</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us section" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div id="map">

              <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3724.9248657636927!2d105.80658711533175!3d20.995648694282742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zxJAuIE5ndXnhu4VuIFRyw6NpLCBUaGFuaCBYdcOibiBUcnVuZywgxJDhu5FuZyDEkGEsIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1656427696394!5m2!1svi!2s" width="100%" height="420px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <div class="row">
                <div class="col-lg-5 offset-lg-1">
                  <div class="contact-info">
                    <div class="icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <h4>Phone</h4>
                    <span>098 949 08 20</span>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="contact-info">
                    <div class="icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <h4>Email</h4>
                    <span>duocphamttbgroup@gmail.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ml-2">
            <form id="contact" class="form js-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h6>@lang('Contact')</h6>
                    <h4 data-cms="{{app()->getLocale()}}-home-37">TTB <em data-cms="{{app()->getLocale()}}-home-38">GROUP</em></h4>
                    <p data-cms="{{app()->getLocale()}}-home-39">Ch???c ch???n Kh??ch h??ng s??? v?? c??ng h??i l??ng. L???a ch???n Tuy???t v???i nh???t cho DN c???a b???n l?? L???a ch??? ln TTB Group.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="@lang('Full Name')" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="phone" id="phone" placeholder="@lang('Your Phone')" required="">
                    </fieldset>
                  </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="@lang('Your Email')" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="content" id="message" placeholder="@lang('Your Message')"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="main-gradient-button">@lang('Send')</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
  <section class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h6 data-cms="{{app()->getLocale()}}-contact-2">Th??ng tin</h6>
            <h4 >TTB GROUP <em>@lang('Come because of faith')</em></h4>
          </div>
          <p data-cms="{{app()->getLocale()}}-contact-5">Mong mu???n ????a ?????n cho c??c doanh nghi???p m??? ph???m Vi???t Nam nh???ng d??ng s???n ph???m ch???t l?????ng - uy t??n, TTB t??? tin l?? ????n v??? gia c??ng m??? ph???m ????ng ????? cho c??c ????n v??? g???i g???m ni???m tin s???n ph???m c???a h???.
            H??y li??n h??? v???i ch??ng t??i ????? ???????c t?? v???n k??? h??n v??? s???n ph???m! <br/>
            ---------------------------------------- <br/>
            TTB - NH?? M??Y GIA C??NG M??? PH???M H??NG ?????U VI???T NAM <br/>
            ?????a ch???: C???m c??ng nghi???p Minh l??ng, x?? Minh L??ng, huy???n V?? Th??, t???nh Th??i B??nh. <br/>
            Tr??? s??? : C???m c??ng nghi???p Minh l??ng, x?? Minh L??ng, huy???n V?? Th??, t???nh Th??i B??nh. <br/>
            Hotline: 0989.490.820.</p>
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
          <div class="row">
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-6">125</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-7">Finished Projects</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-8">11</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-9">Years Experience</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-10">87</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-11">Happy Clients</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-12">24</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-13">Awwards Won</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js')
<script>
    $(document).ready(function(){
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#contact-section").offset().top - 100
        }, 1000);
    })
    let Language = (function() {
        return {
            send: `@lang('Send')`,
            sending: `@lang('Sending')`,
            sentSuccessfully: `@lang('Sent successfully')`,
            sentFailed: `@lang('Sent failed')`,
        };
    })();
</script>
@endsection

