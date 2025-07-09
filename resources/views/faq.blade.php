@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        </div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-pattern.png') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Часто задавані питання</h2>
                <div class="page-header__breadcrumb">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('welcome') }}">Головна</a></li>
                        <li>ЧаПи</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-one faq-one--faq">
        <div class="shape1 float-bob-x"><img src="{{ asset('images/faq-v1-shape1.png') }}" alt=""></div>
        <div class="container">
            <div class="row">
                <!--Start Faq One Content-->
                <div class="col-xl-6">
                    <div class="faq-one__content">
                        <div class="faq-one__content-faq">
                            <div class="sec-title tg-heading-subheading animation-style2">
                                <div class="sec-title__tagline">
                                    <div class="line"></div>
                                    <div class="text tg-element-title">
                                        <h4>ЧаПи компанії</h4>
                                    </div>
                                    <div class="icon">
                                        <span class="fas fa-truck"></span>
                                    </div>
                                </div>
                                <h2 class="sec-title__title tg-element-title">
                                    Часто задавані питання. <span>Маєте питання?</span>
                                </h2>
                            </div>

                            <div class="accrodion-grp faq-one-accrodion faq-one-accrodion-1"
                                data-grp-name="faq-one-accrodion-1">
                                @php
                                    $faqItems = [
                                        [
                                            'question' => 'Ми — не просто перевізник. Що це означає?',
                                            'answer' => 'Ми доставляємо сипучі матеріали під ключ<br>
                                                Закупівля + доставка = гарантія якості і відповідальності.<br><br>
                                                Ми самі закуповуємо пісок, щебінь, відсів та інші матеріали без посередників — без затримок і націнок.<br>
                                                Після цього — оперативно доставляємо власним транспортом до вашого об\'єкта.<br><br>
                                                Ви не шукаєте кар\'єри — ми вже працюємо з найкращими<br>
                                                Не платите за посередництво — усе напряму<br>
                                                Один відповідальний за все — від кар\'єру до будмайданчика',
                                            'active' => false,
                                        ],
                                        [
                                            'question' => 'Які матеріали ви перевозите?',
                                            'answer' =>
                                                'Ми доставляємо пісок, щебінь, відсів, глину, ґрунт та інші сипучі будівельні матеріали від кар\'єрів до вашого об\'єкта.',
                                            'active' => false,
                                        ],
                                        [
                                            'question' => 'Які типи транспорту використовуєте?',
                                            'answer' => 'Для автомобільної доставки — самоскиди вантажопідйомністю до 30 тонн.<br>
                                                Для великих партій — залізничні вагони на 70 тонн із подальшим перевантаженням у авто.<br><br>
                                                Ціна розраховується індивідуально і залежить від:<br>
                                                •  об\'єму вантажу (в тоннах)<br>
                                                •  відстані доставки<br>
                                                •  типу транспорту (вагон або самоскид)<br>
                                                •  складності під\'їзду до об\'єкта<br>
                                                •  потреби в перевантаженні',
                                            'active' => false,
                                        ],
                                        [
                                            'question' => 'Які є способи оплати?',
                                            'answer' => 'Мінімальне замовлення:<br>
                                                •  авто — 20 тонн<br>
                                                •  вагон — 70 тонн (повне завантаження)',
                                            'active' => false,
                                        ],
                                        [
                                            'question' => 'Ви працюєте тільки у Львові?',
                                            'answer' =>
                                                'Ми базуємось у Львові, але здійснюємо доставку по всій Львівській області та при потребі — в інші регіони Західної України.',
                                            'active' => false,
                                        ],
                                        [
                                            'question' => 'Чи можна замовити прорахунок?',
                                            'answer' =>
                                                'Так! Заповніть коротку форму або зателефонуйте — ми швидко прорахуємо вартість доставки з урахуванням ваших потреб.',
                                            'active' => false,
                                        ],
                                    ];
                                @endphp

                                @foreach ($faqItems as $faq)
                                    <div class="accrodion {{ $faq['active'] ? 'active' : '' }}">
                                        <div class="accrodion-title">
                                            <h4>{{ $faq['question'] }} <span class="fas fa-chevron-down"></span></h4>
                                        </div>
                                        <div class="accrodion-content" style="{{ $faq['active'] ? '' : 'display: none;' }}">
                                            <div class="inner">
                                                <p>{!! $faq['answer'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Faq One Content-->

                <!--Start Faq One Img-->
                <div class="col-xl-6">
                    <div class="faq-one__img">
                        <div class="faq-one__img-box">
                            <img src="{{ asset('images/resources/faq-v1-img1.jpg') }}" alt="">

                            <div class="faq-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="faq-one__video-icon">
                                        <span class="fas fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Faq One Img-->
            </div>
        </div>
    </section>
@endsection
