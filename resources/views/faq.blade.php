@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        </div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-pattern.png') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>FAQ's</h2>
                <div class="page-header__breadcrumb">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>FAQ</li>
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
                                        <h4>Company's FAQ</h4>
                                    </div>
                                    <div class="icon">
                                        <span class="fas fa-truck"></span>
                                    </div>
                                </div>
                                <h2 class="sec-title__title tg-element-title">
                                    Frequently Asked Have <span>Any Question?</span>
                                </h2>
                            </div>

                            <div class="accrodion-grp faq-one-accrodion faq-one-accrodion-1"
                                data-grp-name="faq-one-accrodion-1">
                                @php
                                    $faqItems = [
                                        ['question' => 'How do you handle returns or exchanges?', 'active' => false],
                                        ['question' => 'What does business consulting do?', 'active' => false],
                                        [
                                            'question' => 'Can I cancel a shipment after it\'s been booked?',
                                            'active' => true,
                                        ],
                                        [
                                            'question' => 'Can you assist with customs clearance procedures?',
                                            'active' => false,
                                        ],
                                    ];
                                    $answer =
                                        'We help businesses bring ideas to life in the digital world designing & implementing the technology tools that they need to win. We help business bring ideas to life in the digital wor';
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
