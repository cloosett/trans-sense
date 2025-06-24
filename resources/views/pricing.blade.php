@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../../public/images/page-header-bg.jpg)">
        </div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-bg.jpg') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Pricing Plan</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="https://logistiq.unicktheme.com">Home</a></li>
                    <li><span class="icon-right-arrow21"></span></li>
                    <li>Pricing</li>
                </ul>
            </div>
        </div>
    </section>
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
                                                    <p><span>Talk to Us</span> <a href="tel:1234567890">[+123 456
                                                            789]</a></p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="icon-email"></span>
                                                </div>

                                                <div class="text-box">
                                                    <p><span>Mail Us</span> <a href="mailto:yourmail@email.com">[support@logistra.com]</a>
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
                                        <a href="#" class="main-menu__search search-toggler">Search
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
                                            <a href="https://logistiq.unicktheme.com"><img
                                                        src="assets/images/resources/logo-1.png" alt=""></a>
                                        </div>

                                        <div class="main-header-one__bottom-menu">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                                                <ul class="main-menu__list">
                                                    <li class="dropdown">
                                                        <a href="https://logistiq.unicktheme.com">Home</a>
                                                        <ul>
                                                            <li><a href="https://logistiq.unicktheme.com">Home One</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/index2">Home
                                                                    Two</a></li>
                                                            <li><a href="https://logistiq.unicktheme.com/index3">Home
                                                                    Three</a></li>
                                                            <li><a href="https://logistiq.unicktheme.com/index-dark">Home
                                                                    Dark</a></li>
                                                            <li class="dropdown">
                                                                <a href="#">Header Styles</a>
                                                                <ul>
                                                                    <li><a href="https://logistiq.unicktheme.com">Header
                                                                            One</a></li>
                                                                    <li>
                                                                        <a href="https://logistiq.unicktheme.com/index2">Header
                                                                            Two</a></li>
                                                                    <li>
                                                                        <a href="https://logistiq.unicktheme.com/index3">Header
                                                                            Three</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#">One Page Styles</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="https://logistiq.unicktheme.com/index-one-page">One
                                                                            Page Style One</a></li>
                                                                    <li>
                                                                        <a href="https://logistiq.unicktheme.com/index2-one-page">One
                                                                            Page Style Two</a></li>
                                                                    <li>
                                                                        <a href="https://logistiq.unicktheme.com/index3-one-page">One
                                                                            Page Style Three</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="https://logistiq.unicktheme.com/about">About Us</a>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Services</a>
                                                        <ul>
                                                            <li><a href="https://logistiq.unicktheme.com/service">Services</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/international-transport">International
                                                                    Transport</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/track-transport">Local
                                                                    Track Transport</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/personal-delivery">Fast
                                                                    Personal Delivery</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/ocean-transport">Safe
                                                                    Ocean Transport</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/warehouse-facility">Warehouse
                                                                    Facility</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/emergency-transport">Emergency
                                                                    Transport</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Pages</a>
                                                        <ul>
                                                            <li><a href="https://logistiq.unicktheme.com/team">Team</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/team-details">Team
                                                                    Details</a></li>
                                                            <li><a href="https://logistiq.unicktheme.com/project">Projects</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/project-details">Project
                                                                    Details</a></li>
                                                            <li><a href="https://logistiq.unicktheme.com/testimonial">Testimonials</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/pricing">Pricing</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/faq">FAQ</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/404">404
                                                                    Error</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="https://logistiq.unicktheme.com/products">Products</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/product-details">Product
                                                                    Details</a></li>
                                                            <li><a href="https://logistiq.unicktheme.com/cart">Cart</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/checkout">Checkout</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/wishlist">Wishlist</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/sign-up">Sign
                                                                    Up</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/login">Login</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Blog</a>
                                                        <ul>
                                                            <li><a href="https://logistiq.unicktheme.com/blog">Blog</a>
                                                            </li>
                                                            <li><a href="https://logistiq.unicktheme.com/blog-standard">Blog
                                                                    Standard</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/blog-left-sidebar">Blog
                                                                    Left Sidebar</a></li>
                                                            <li>
                                                                <a href="https://logistiq.unicktheme.com/blog-right-sidebar">Blog
                                                                    Right Sidebar</a></li>
                                                            <li><a href="https://logistiq.unicktheme.com/blog-details">Blog
                                                                    Details</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="https://logistiq.unicktheme.com/contact">Contact</a>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="main-header-one__bottom-right">
                                        <div class="main-header-one__bottom-right-btn">
                                            <a href="https://logistiq.unicktheme.com/contact">Track Order
                                                <i class="icon-right-arrow21"></i>
                                            </a>
                                        </div>

                                        <div class="login-box">
                                            <a href="#"><i class="fa fa-sign-in"></i> <span>Member <br>
                                                        Login</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.sticky-header__content -->
    </div>
    <section class="pricing-one pricing-one--pricing">
        <div class="pricing-one__pattern"
             style="background-image: url(assets/images/pattern/pricing-v1-pattern.png);"></div>
        <div class="container">
            <div class="row">
                <!--Start Pricing One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="pricing-one__single">
                        <div class="pricing-one__single-inner">
                            <div class="table-header">
                                <div class="img-box">
                                    <img src="{{ asset('images/truck.jpg') }}" alt="">
                                </div>
                                <div class="title-box">
                                    <h2>Road Cargo</h2>
                                    <h3>$99 <span>/50kg</span></h3>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Pickup and delivery</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Custom coverage</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Customer Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Deliver in 2-3 days</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>24 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">Choose Plan
                                        <i class="icon-right-arrow21"></i>
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
                <!--End Pricing One Single-->

                <!--Start Pricing One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInDown animated" data-wow-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                    <div class="pricing-one__single">
                        <div class="pricing-one__single-inner">
                            <div class="table-header">
                                <div class="img-box">
                                    <img src="{{ asset('images/truck.jpg') }}" alt="">
                                </div>
                                <div class="title-box">
                                    <h2>Sea Freight</h2>
                                    <h3>$199 <span>/50kg</span></h3>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Pickup and delivery</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Custom coverage</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Customer Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Deliver in 2-3 days</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>24 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">Choose Plan
                                        <i class="icon-right-arrow21"></i>
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
                <!--End Pricing One Single-->

                <!--Start Pricing One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="pricing-one__single">
                        <div class="pricing-one__single-inner">
                            <div class="table-header">
                                <div class="img-box">
                                    <img src="{{ asset('images/truck.jpg') }}" alt="">
                                </div>
                                <div class="title-box">
                                    <h2>Ship Cargo</h2>
                                    <h3>$250 <span>/100kg</span></h3>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Pickup and delivery</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Custom coverage</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Customer Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Deliver in 2-3 days</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>24 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">Choose Plan
                                        <i class="icon-right-arrow21"></i>
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
                <!--End Pricing One Single-->
            </div>
        </div>
    </section>
    <section class="brand-one brand-one--pricing">
        <div class="container">
            <div class="brand-one__carousel owl-carousel owl-theme owl-loaded owl-drag">
                <!--Start Brand One Single-->

                <!--End Brand One Single-->

                <!--Start Brand One Single-->

                <!--End Brand One Single-->

                <!--Start Brand One Single-->

                <!--End Brand One Single-->

                <!--Start Brand One Single-->

                <!--End Brand One Single-->

                <!--Start Brand One Single-->

                <!--End Brand One Single-->

                <!--Start Brand One Single-->

                <!--End Brand One Single-->
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(-2420px, 0px, 0px); transition: 0.5s; width: 3960px;">
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img1.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img2.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img3.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img4.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img5.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection