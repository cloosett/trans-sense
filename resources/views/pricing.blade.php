@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../../public/images/page-header-bg.jpg)">
        </div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-bg.jpg') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Тарифні плани</h2>
                <div class="page-header__breadcrumb">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('welcome') }}">Головна</a></li>
                        <li>Тарифи</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-one pricing-one--pricing">
        <div class="pricing-one__pattern" style="background-image: url(assets/images/pattern/pricing-v1-pattern.png);">
        </div>
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
                                    <h2>Автомобільні вантажі</h2>
                                    <h3>$99 <span>/50кг</span></h3>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Забір та доставка</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Митне оформлення</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Управління клієнтами</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Доставка за 2-3 дні</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Підтримка 24/7</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">Обрати план
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
                                    <h2>Морські вантажі</h2>
                                    <h3>$199 <span>/50кг</span></h3>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Забір та доставка</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Митне оформлення</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Управління клієнтами</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Доставка за 2-3 дні</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Підтримка 24/7</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">Обрати план
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
                                    <h2>Корабельні вантажі</h2>
                                    <h3>$250 <span>/100кг</span></h3>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Забір та доставка</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Митне оформлення</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Управління клієнтами</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Доставка за 2-3 дні</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Підтримка 24/7</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">Обрати план
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
                <!--End Pricing One Single-->
            </div>
        </div>
    </section>
    <section class="brand-one brand-one--pricing">
        <div class="container">
            <div class="brand-one__carousel owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2420px, 0px, 0px); transition: 0.5s; width: 3960px;">
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img1.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img2.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img3.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img4.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 220px;">
                            <div class="brand-one__single">
                                <div class="brand-one__single-inner">
                                    <a href="#"><img src="{{ asset('images/brand-v1-img5.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
