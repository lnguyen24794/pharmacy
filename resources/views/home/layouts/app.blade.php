<!DOCTYPE html>
<html lang="{{session('locale', $config->locale)}}" data-theme="{{session('theme', $config->theme)}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="XrscSqm4bh48Nw0IZhyH-JO52qXBf45BcSy5xigkL2Y" />
    <meta property="og:image" content="@yield('cover', '/images/Logo_Ttb.png')"/>
    <meta property="og:image:alt" content="@yield('cover', '/images/Logo_Ttb.png')"/>
    <meta name="twitter:image" content="@yield('cover', '/images/Logo_Ttb.png')"/>
    <meta property="og:url" content=" {{  Request::url() }} "/>
    <meta property="og:type" content=" {{  Request::url() }} "/>
    @isset($seo)
        <title>{{$seo->title}}</title>
        <meta name="description" content="{{$seo->description}}">
        <meta property="og:title" content="{{$seo->description}}">
        <meta property="og:description" content="{{$seo->description}}">
        <meta name="robots" content="{{$seo->robots}}" />
    @else
        <title>@yield('title') </title>
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta name="description" content="@yield('description') ">
    @endif
    @cms
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/Logo_Ttb.png">
    <link rel="canonical" href="{{request()->url()}}">
    <!-- Custom CSS -->
    <link href="/css/home/reset.css" rel="stylesheet">
    <link href="/css/home/bootstrap.min.css" rel="stylesheet">
    <link href="/css/home/app.min.css" rel="stylesheet">
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    @yield('css')
</head>

<body id="body-site">
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky background-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo" >
                        <img src="/images/ttb_group_logo.png" alt="TTB Group">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/">@lang('Home')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('products')">@lang('Products')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('news')">@lang('News')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('activates')">@lang('Activate')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('contact')">@lang('Contact')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('recruits')">@lang('Recruit')</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)" style="margin-right:5px">
                                <img class="img-fluid" loading="lazy" @src="/images/home/flag_{{app()->getLocale()}}.png" alt="image">
                                <em>{{app()->getLocale() == 'en' ? __('English') : __('Vietnamese')}}</em>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a href="/en" title="Ti???ng Anh">
                                        <img class="img-fluid" loading="lazy" src="/images/home/flag_en.png" alt="Ti???ng Anh">
                                        <span>Ti???ng Anh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/vi" title="Ti???ng Vi???t">
                                        <img class="img-fluid" loading="lazy" src="/images/home/flag_vi.png" alt="Ti???ng Vi???t">
                                        <span>Ti???ng Vi???t</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
@yield('content')
<a id="scrolltop" class="scroll-top active" onclick="document.documentElement.scrollIntoView({ behavior: 'smooth' });">
    <i class="fa fa-chevron-up"></i>
</a>
<section class="contact-us" id="contact-section">
    <div class="container-fluid" style="padding: 0px 60px">
      <div class="row">
        <div class="column col-lg-3 logo-div">
            <img class="logo" src="/images/ttbgroup_logo_footer.png">
        </div>
        <div class="column col-lg-3">
            <div class="info">
                <h4 data-cms="{{app()->getLocale()}}-company">C??ng Ty D?????c Ph???m Qu???c T??? TTB Group</h4>
                <p>@lang('Address'): <span data-cms="{{app()->getLocale()}}-address">C???m c??ng nghi???p Minh l??ng, x?? Minh L??ng, huy???n V?? Th??, t???nh Th??i B??nh.</span></p>
                <p>@lang('Phone'): <span data-cms="{{app()->getLocale()}}-phone">0989.490.820</span></p>
                <p>@lang('Email'): <span data-cms="{{app()->getLocale()}}-email">duocphamttbgroup@gmail.com</span></p>
                <p data-cms="{{app()->getLocale()}}-policy">Gi???y ch???ng nh???n ??KKD s??? 0102190173 do S??? K??? ho???ch v?? ?????u t?? TP.HN c???p ng??y 20/03/2007</p>
            </div>
        </div>
        <div class="column col-lg-3 list">
            <h4>@lang('Information') </h4> <br/>
            <a href="@lang('contact')"> @lang('Contact') </a>
            <a href="@lang('recruits')"> @lang('Recruit')</a>
            <a href="@lang('products')"> @lang('Products') </a>
            <a href="#"> Ch??nh s??ch b???o m???t th??ng tin </a>
            <a href="#"> Ch??nh s??ch bi??n t???p </a>
            <a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=8952">
                <img src="https://tambinh.vn/wp-content/themes/tam-binh/assets/images/home/icon1.png" data-src="https://tambinh.vn/wp-content/themes/tam-binh/assets/images/home/icon1.png" class="lazy-loaded">
            </a>
        </div>
        <div class="column col-lg-3">
           <div class="info">
            <h4> @lang('Contact')</h4>  <br/>
            <form id="contact" class="form js-form" action="" method="post" style="
                margin-left: 0px;
                padding: 0px;
                margin: 0px;
                background: none;
            ">
                            <input type="email" class="email" placeholder="@lang('E-Mail Address')" style="
                width: 57%;
                margin: 0px;
                border-radius: 5px 0px 0px 5px;
                height: 39px;
            ">
                            <button type="submit" class="submit" style="
                float: none;
                border-radius: 0px 5px 5px 0px;
                margin: 0px;
                margin-left: -4px;
                padding: 10px 30px;
                border: 1px solid  #18853E;
                border-left: none;
                padding-bottom: 9px
            ">@lang('Send')</button>
            </form>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/ttbgroup.vn" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
           </div>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright ?? 2022 TTB GROUP Co., Ltd. All Rights Reserved.
        </div>
      </div>
    </div>
</section>

<script src="/js/home/jquery-3.6.0.min.js"></script>
<script src="/js/home/util.min.js"></script>
<script src="/js/home/bootstrap.min.js"></script>
<script src="/js/home/isotope.min.js"></script>
<script src="/js/home/owl-carousel.js"></script>
<script async defer crossorigin="anonymous" type="text/javascript" src="/js/home/app.min.js"></script>
<script>
    function toggleDropdown() {
    document.getElementById("language-content").classList.toggle("show");
}

</script>
@yield('js')
</body>
</html>
