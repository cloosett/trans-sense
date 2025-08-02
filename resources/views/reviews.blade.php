@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('images/traktor.jpg') }})"></div>
        <div class="page-header__pattern"><img src="{{ asset('images/traktor.jpg') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Відгуки клієнтів</h2>
                <div class="page-header__breadcrumb">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('welcome') }}">Головна</a></li>
                        <li>Відгуки</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-two testimonial-two--testimonial">
        <div class="shape1"><img src="assets/images/pattern/testimonial-page-pattern.png" alt=""></div>
        <div class="container clearfix">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__single-top">
                                <div class="img-box">
                                    <div class="avatar-placeholder"
                                        style="width: 85px; height: 85px; background: linear-gradient(135deg, #FD5523, #ff6b35); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                        ЛВ
                                    </div>
                                </div>

                                <div class="title-box">
                                    <h2>Лесько В.П</h2>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Замовляли доставку щебеню на об'єкт у Винниках. Машина приїхала вчасно, водій на зв'язку,
                                    усе розвантажили без затримок. Сервісом задоволені, будемо звертатись ще.
                                </p>
                            </div>

                            <div class="rating-box">
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__single-top">
                                <div class="img-box">
                                    <div class="avatar-placeholder"
                                        style="width: 85px; height: 85px; background: linear-gradient(135deg, #FD5523, #ff6b35); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                        ВІ
                                    </div>
                                </div>
                                <div class="title-box">
                                    <h2>Васильчук І.П.</h2>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Орендували самоскид DAF для доставки піску з кар'єру. Все було організовано чітко.
                                    Особливо сподобалась оперативність. Рекомендуємо.
                                </p>
                            </div>

                            <div class="rating-box">
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__single-top">
                                <div class="img-box">
                                    <div class="avatar-placeholder"
                                        style="width: 85px; height: 85px; background: linear-gradient(135deg, #FD5523, #ff6b35); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                        МА
                                    </div>
                                </div>

                                <div class="title-box">
                                    <h2>Мельник А.В.</h2>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Замовляли доставку щебеню на об'єкт у Винниках. Машина приїхала вчасно, водій на зв'язку,
                                    усе розвантажили без затримок. Сервісом задоволені, будемо звертатись ще.
                                </p>
                            </div>

                            <div class="rating-box">
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
