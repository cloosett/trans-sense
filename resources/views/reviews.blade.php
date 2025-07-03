@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        </div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-bg.jpg') }}" alt=""></div>
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
                                    <img src="assets/images/testimonial/testimonial-v2-img3.png" alt="">
                                </div>

                                <div class="title-box">
                                    <h2>Олександра Лесько</h2>
                                    <span>ДИРЕКТОР</span>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Неймовірно професійна команда! Вони доставили наш важливий вантаж точно в строк, а їхня
                                    система відстеження дозволила нам контролювати процес кожну хвилину. Рекомендую всім!
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
                                    <img src="assets/images/testimonial/testimonial-v2-img2.png" alt="">
                                </div>
                                <div class="title-box">
                                    <h2>Ігор Петренко</h2>
                                    <span>ВЛАСНИК БІЗНЕСУ</span>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Співпрацюємо з компанією вже 3 роки. Їхній сервіс завжди на висоті - від оформлення
                                    документів до доставки. Ціни адекватні, а якість обслуговування перевершує очікування.
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
                                    <img src="assets/images/testimonial/testimonial-v2-img4.png" alt="">
                                </div>

                                <div class="title-box">
                                    <h2>Марія Коваленко</h2>
                                    <span>МЕНЕДЖЕР З ЗАКУПІВЕЛЬ</span>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Вражена якістю митного оформлення! Вся документація була підготовлена бездоганно, ніяких
                                    затримок на кордоні. Команда дуже відповідальна та компетентна у своїй роботі.</p>
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

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__single-top">
                                <div class="img-box">
                                    <img src="assets/images/testimonial/testimonial-v2-img1.png" alt="">
                                </div>
                                <div class="title-box">
                                    <h2>Андрій Мельник</h2>
                                    <span>ЛОГІСТИЧНИЙ КООРДИНАТОР</span>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Найкращий логістичний партнер, з яким ми працювали! Їхня підтримка 24/7 неодноразово
                                    рятувала наші термінові поставки. Особливо цінуємо швидкість та надійність.</p>
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
                                    <img src="assets/images/testimonial/testimonial-v2-img5.png" alt="">
                                </div>

                                <div class="title-box">
                                    <h2>Тетяна Шевченко</h2>
                                    <span>КОМЕРЦІЙНИЙ ДИРЕКТОР</span>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Морські перевезення від цієї компанії - це еталон якості! Вантаж прибув у ідеальному
                                    стані, всі страхові питання були вирішені заздалегідь. Дуже задоволена співпрацею!</p>
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
                                    <img src="assets/images/testimonial/testimonial-v2-img6.png" alt="">
                                </div>
                                <div class="title-box">
                                    <h2>Василь Іваненко</h2>
                                    <span>ЗАСНОВНИК СТАРТАПУ</span>
                                </div>
                            </div>

                            <div class="testimonial-two__single-text">
                                <p>Як молодий бізнес, ми потребували гнучких рішень та індивідуального підходу. Компанія
                                    запропонувала оптимальні тарифи та допомогла налагодити всі логістичні процеси.
                                    Рекомендую!</p>
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
