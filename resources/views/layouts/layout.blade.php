<!DOCTYPE html>
<html lang="uk">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна || TransSense || Транспортна компанія</title>
    <!-- Favicons -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest') }}"> --}}
    <meta name="description" content="TransSense - Транспортна компанія">

    <!-- Fonts -->
    <link href="{{ asset('css2.css') }}" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('01-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('09-nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('11-owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('13-jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('02-about.css') }}">
    <link rel="stylesheet" href="{{ asset('04-testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('06-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('07-brand.css') }}">
    <link rel="stylesheet" href="{{ asset('08-contact.css') }}">
    <link rel="stylesheet" href="{{ asset('09-counter.css') }}">
    <link rel="stylesheet" href="{{ asset('11-faq.css') }}">
    <link rel="stylesheet" href="{{ asset('12-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('13-page-header.css') }}">
    <link rel="stylesheet" href="{{ asset('banner.css') }}">
    <link rel="stylesheet" href="{{ asset('cta.css') }}">
    <link rel="stylesheet" href="{{ asset('pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('skill.css') }}">
    <link rel="stylesheet" href="{{ asset('sliding-text.css') }}">
    <link rel="stylesheet" href="{{ asset('why-choose.css') }}">

    <link rel="stylesheet" href="{{ asset('swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('form-validation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="page-wrapper">

        <header class="main-header main-header-one">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-header-one__inner">
                            <div class="main-header-one__bottom">
                                <div class="main-menu__wrapper-inner">
                                    <div class="main-header-one__bottom-inner">
                                        <div class="main-header-one__bottom-left">
                                            <div class="logo-box">
                                                <a href="{{ route('welcome') }}"><img width="100" height="115"
                                                        src="{{ asset('images/transsense-logo.png') }}"
                                                        alt="TransSense"></a>
                                            </div>

                                            <div class="main-header-one__bottom-menu">
                                                <div class="main-menu__main-menu-box">
                                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"
                                                            style="font-size: 24px;"></i></a>

                                                    <ul class="main-menu__list">
                                                        @php
                                                            $menuItems = [
                                                                [
                                                                    'route' => 'welcome',
                                                                    'label' => 'Головна',
                                                                    'path' => '/',
                                                                ],
                                                                [
                                                                    'route' => 'pricing',
                                                                    'label' => 'Ціни',
                                                                    'path' => 'pricing',
                                                                ],
                                                                [
                                                                    'route' => 'reviews',
                                                                    'label' => 'Відгуки',
                                                                    'path' => 'reviews',
                                                                ],
                                                                ['route' => 'faq', 'label' => 'FAQ', 'path' => 'faq'],
                                                                [
                                                                    'route' => 'contact',
                                                                    'label' => 'Контакти',
                                                                    'path' => 'contact',
                                                                ],
                                                            ];
                                                        @endphp

                                                        @foreach ($menuItems as $item)
                                                            <li
                                                                class="{{ Request::is($item['path']) ? 'current' : '' }}">
                                                                <a
                                                                    href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="main-header-one__bottom-right">
                                            <div class="main-header-one__bottom-right-btn">
                                                <a href="{{ route('contact') }}" class="thm-btn">
                                                    Отримати пропозицію <i class="fas fa-arrow-right"></i>
                                                    <span class="hover-btn hover-bx"></span>
                                                    <span class="hover-btn hover-bx2"></span>
                                                    <span class="hover-btn hover-bx3"></span>
                                                    <span class="hover-btn hover-bx4"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--End Main Header One-->


        <div class="stricky-header stricky-header--style1 stricked-menu main-menu">
            <div class="sticky-header__content">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-header-one__inner">
                            <div class="main-header-one__top">
                                <div class="main-header-one__top-inner">
                                    <div class="main-header-one__top-left">
                                        <div class="header-contact-style1">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-phone"></span>
                                                    </div>

                                                    <div class="text-box">
                                                        <p><span>Зателефонуйте нам</span> <a
                                                                href="tel:1234567890">[+123 456
                                                                789]</a></p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-email"></span>
                                                    </div>

                                                    <div class="text-box">
                                                        <p><span>Напишіть нам</span> <a
                                                                href="mailto:yourmail@email.com">[support@logistra.com]</a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="main-header-one__top-right">
                                        <div class="header-social-links">
                                            <a href="#"><span class="icon-facebook-f"></span></a>
                                            <a href="#"><span class="icon-twitter1"></span></a>
                                            <a href="#"><span class="icon-instagram"></span></a>
                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </div>

                                        <div class="header-search-box">
                                            <a href="#" class="main-menu__search search-toggler">Пошук
                                                <i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main-header-one__bottom">
                                <div class="main-menu__wrapper-inner">
                                    <div class="main-header-one__bottom-inner">
                                        <div class="main-header-one__bottom-left">
                                            <div class="logo-box">
                                                <a href="{{ route('welcome') }}"><img
                                                        src="{{ asset('images/logo-1.png') }}" alt=""></a>
                                            </div>

                                            <div class="main-header-one__bottom-menu">
                                                <div class="main-menu__main-menu-box">
                                                    <a href="#" class="mobile-nav__toggler"><i
                                                            class="fa fa-bars"></i></a>

                                                    <ul class="main-menu__list">
                                                        @php
                                                            $menuItems = [
                                                                [
                                                                    'route' => 'welcome',
                                                                    'label' => 'Головна',
                                                                    'path' => '/',
                                                                ],
                                                                [
                                                                    'route' => 'pricing',
                                                                    'label' => 'Ціни',
                                                                    'path' => 'pricing',
                                                                ],
                                                                [
                                                                    'route' => 'reviews',
                                                                    'label' => 'Відгуки',
                                                                    'path' => 'reviews',
                                                                ],
                                                                ['route' => 'faq', 'label' => 'FAQ', 'path' => 'faq'],
                                                                [
                                                                    'route' => 'contact',
                                                                    'label' => 'Контакти',
                                                                    'path' => 'contact',
                                                                ],
                                                            ];
                                                        @endphp

                                                        @foreach ($menuItems as $item)
                                                            <li
                                                                class="{{ Request::is($item['path']) ? 'current' : '' }}">
                                                                <a
                                                                    href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="main-header-one__bottom-right">
                                            <div class="main-header-one__bottom-right-btn">
                                                <a href="{{ route('contact') }}" class="thm-btn">Отримати пропозицію
                                                    <i class="fas fa-arrow-right"></i>
                                                    <span class="hover-btn hover-bx"></span>
                                                    <span class="hover-btn hover-bx2"></span>
                                                    <span class="hover-btn hover-bx3"></span>
                                                    <span class="hover-btn hover-bx4"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__pattern"><img src="{{ asset('images/footer-v1-pattern.png') }}" alt="#">
            </div>
            <div class="footer-one__top">
                <div class="container">
                    <div class="footer-one__top-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms"
                                style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                                <div class="footer-widget__single footer-one__about">
                                    <div class="footer-one__about-logo">
                                        <a href="{{ route('welcome') }}"><img width="200" height="200"
                                                src="{{ asset('images/transsense-logo.png') }}" alt=""></a>
                                    </div>
                                    <p class="footer-one__about-text">Логістична компанія-провайдер відіграє ключову
                                        роль у глобальному ланцюгу постачання.</p>

                                    <div class="footer-one__about-contact-info">
                                        <div class="icon">
                                            <i class="fas fa-headset"></i>
                                        </div>

                                        <div class="text-box">
                                            <p>Зателефонуйте</p>
                                            <h4><a href="tel:+1234567890">+880 123 456 789</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                                style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                                <div class="footer-widget__single footer-one__quick-links">
                                    <div class="title">
                                        <h2>Швидкі посилання <i class="fa-solid fa-paper-plane"
                                                style="color: #fd5523;padding-left: 8px; "></i></h2>
                                    </div>

                                    <ul class="footer-one__quick-links-list">
                                        @foreach ($menuItems as $item)
                                            <li><a href="{{ route($item['route']) }}"><i
                                                        class="fas fa-arrow-right"></i>
                                                    {{ $item['label'] }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                                style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                                <div class="footer-widget__single footer-one__contact">
                                    <div class="title">
                                        <h2>Зв’яжіться з нами <i class="fa-solid fa-paper-plane"
                                                style="color: #fd5523;padding-left: 8px; "></i></h2>
                                    </div>

                                    <div class="footer-one__contact-box">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="text-box">
                                                    <p>3060 Commercial Street Road <br> Fratton, Australia</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="text-box">
                                                    <p><a href="mailto:yourmail@email.com">support@logistra.com</a></p>
                                                    <p><a href="mailto:yourmail@email.com">info@logistra.com</a></p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                                <div class="text-box">
                                                    <p><a href="tel:1234567890">+880 123 456 789 </a></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                                style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
                                <div class="footer-widget__single footer-one__subscribe">
                                    <div class="title">
                                        <h2>Підпишіться <i class="fa-solid fa-paper-plane"
                                                style="color: #fd5523;padding-left: 8px; "></i></h2>
                                    </div>

                                    <p class="footer-one__subscribe-text">Підпишіться на сповіщення, наші останні
                                        блоги, думки та ідеї</p>

                                    <div class="footer-one__subscribe-form">
                                        <form class="subscribe-form" action="#">
                                            <input type="email" name="email" placeholder="Ваш email">
                                            <button type="submit" class="thm-btn">Підписатися
                                                <i class="fas fa-arrow-right"></i>
                                                <span class="hover-btn hover-bx"></span>
                                                <span class="hover-btn hover-bx2"></span>
                                                <span class="hover-btn hover-bx3"></span>
                                                <span class="hover-btn hover-bx4"></span>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-one__bottom">
                <div class="container">

                    <div class="footer-one__bottom-inner">
                        <div class="footer-one__bottom-text">
                            <p>© Copyright 2025 <a href="{{ route('welcome') }}">TransSense.</a> Усі права захищені
                            </p>
                        </div>

                        <div class="footer-one__social-links">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer One-->

    </div><!-- /.page-wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('welcome') }}" aria-label="logo image"><img
                        src="{{ asset('images/transsense-logo.png') }}" width="150" height="150"
                        alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container">
                <ul class="main-menu__list">
                    @foreach ($menuItems as $item)
                        <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@trans-sense.com">info@trans-sense.com</a>
                </li>
                <li>
                    <i class="icon-phone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->


        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">шукайте тут</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Шукайте тут...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fas fa-search"></i>
                    <span class="hover-btn hover-bx"></span>
                    <span class="hover-btn hover-bx2"></span>
                    <span class="hover-btn hover-bx3"></span>
                    <span class="hover-btn hover-bx4"></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"
                style="width: 6.95242%;"></span></span>
        <span class="scroll-to-top__text"> До гори</span>
    </a>


    <!-- jQuery and Plugins -->
    <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('jquery.validate.min.js') }}"></script>


    <!-- GSAP Animation -->
    <script src="{{ asset('gsap.js') }}"></script>
    <script src="{{ asset('ScrollTrigger.js') }}"></script>
    <script src="{{ asset('SplitText.js') }}"></script>

    <!-- Other Libraries -->
    <script src="{{ asset('01-bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('02-countdown.min.js') }}"></script>
    <script src="{{ asset('03-jquery.appear.min.js') }}"></script>
    <script src="{{ asset('04-jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('07-owl.carousel.min.js') }}"></script>
    <script src="{{ asset('10-jquery-ui.js') }}"></script>
    <script src="{{ asset('11-jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('12-wow.js') }}"></script>

    <!-- Template Main JS -->
    <script src="{{ asset('script.js') }}"></script>

    <!-- Form Validation JS -->
    <script src="{{ asset('form-validation.js') }}"></script>

    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
    </div>


</body>

</html>
a