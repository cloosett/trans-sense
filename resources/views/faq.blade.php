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
                                        ['question' => 'Як ви обробляєте повернення або обміни?', 'active' => false],
                                        ['question' => 'Що робить бізнес-консалтинг?', 'active' => false],
                                        [
                                            'question' =>
                                                'Чи можу я скасувати відправлення після того, як воно заброньоване?',
                                            'active' => true,
                                        ],
                                        [
                                            'question' => 'Чи можете ви допомогти з процедурами митного оформлення?',
                                            'active' => false,
                                        ],
                                    ];
                                    $answer =
                                        'Ми допомагаємо бізнесу втілювати ідеї в життя у цифровому світі, розробляючи та впроваджуючи технологічні інструменти, необхідні для перемоги. Ми допомагаємо бізнесу втілювати ідеї в життя у цифровому світі';
                                @endphp

                                @foreach ($faqItems as $faq)
                                    <div class="accrodion {{ $faq['active'] ? 'active' : '' }}">
                                        <div class="accrodion-title">
                                            <h4>{{ $faq['question'] }} <span class="fas fa-chevron-down"></span></h4>
                                        </div>
                                        <div class="accrodion-content" style="{{ $faq['active'] ? '' : 'display: none;' }}">
                                            <div class="inner">
                                                <p>{{ $answer }}</p>
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
