@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('images/page-header-bg.jpg') }})"></div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-bg.jpg') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <div class="page-header__breadcrumb">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-page">
        <!--Start Contact Page Top-->
        <div class="contact-page__top">
            <div class="contact-page__top-pattern"
                style="background-image: url({{ asset('images/pattern/contact-page-top-pattern.png') }});"></div>
            <div class="container">
                <div class="row">
                    <!--Start Contact Page Top Content-->
                    <div class="col-xl-6">
                        <div class="contact-page__top-content">
                            <div class="sec-title tg-heading-subheading animation-style2">
                                <div class="sec-title__tagline">
                                    <div class="line"></div>
                                    <div class="text tg-element-title">
                                        <h4>Contact us</h4>
                                    </div>
                                    <div class="icon">
                                        <span class="fas fa-paper-plane float-bob-x3"></span>
                                    </div>
                                </div>
                                <h2 class="sec-title__title tg-element-title">
                                    Get in Touch And We'll Help Your Business
                                </h2>
                            </div>

                            <div class="contact-page__top-content-text1">
                                <p>Our dedicated team of experts is here to guide you through every step of the insurance
                                    journey, ensuring you make informed choices tailored to your unique needs.</p>
                            </div>

                            <div class="social-links">
                                @php
                                    $socialLinks = ['facebook-f', 'instagram', 'twitter', 'linkedin-in'];
                                @endphp
                                @foreach ($socialLinks as $social)
                                    <a href="#"><span class="fab fa-{{ $social }}"></span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Top Content-->

                    <!--Start Contact Page Top Form-->
                    <div class="col-xl-6">
                        <div class="contact-page__top-form">
                            <form class="contact-form-validated why-choose-one__form" action="#" method="post">
                                @csrf
                                <div class="row">
                                    @php
                                        $formFields = [
                                            [
                                                'type' => 'text',
                                                'name' => 'name',
                                                'placeholder' => 'Name',
                                                'icon' => 'user',
                                                'col' => '6',
                                            ],
                                            [
                                                'type' => 'email',
                                                'name' => 'email',
                                                'placeholder' => 'Email',
                                                'icon' => 'envelope',
                                                'col' => '6',
                                            ],
                                            [
                                                'type' => 'text',
                                                'name' => 'phone',
                                                'placeholder' => 'Phone',
                                                'icon' => 'phone',
                                                'col' => '6',
                                            ],
                                        ];
                                    @endphp

                                    @foreach ($formFields as $field)
                                        <div
                                            class="col-xl-{{ $field['col'] }} col-lg-{{ $field['col'] }} col-md-{{ $field['col'] }}">
                                            <div class="input-box">
                                                <input type="{{ $field['type'] }}" name="{{ $field['name'] }}"
                                                    placeholder="{{ $field['placeholder'] }}" required>
                                                <div class="icon"><span class="fas fa-{{ $field['icon'] }}"></span></div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <div class="select-box">
                                                <select class="selectmenu wide">
                                                    <option selected>Subject</option>
                                                    @foreach (['General Inquiry', 'Pricing', 'Support', 'Partnership', 'Other'] as $option)
                                                        <option>{{ $option }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <div class="icon style2"><span class="fas fa-pen"></span></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="why-choose-one__form-btn">
                                            <button type="submit" class="thm-btn">
                                                Submit Now <i class="fas fa-arrow-right"></i>
                                                <span class="hover-btn hover-bx"></span>
                                                <span class="hover-btn hover-bx2"></span>
                                                <span class="hover-btn hover-bx3"></span>
                                                <span class="hover-btn hover-bx4"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <!--End Contact Page Top Form-->
                </div>
            </div>
        </div>
        <!--End Contact Page Top-->

        <!--Start Contact Page Bottom-->
        <div class="contact-page__bottom">
            <div class="container">
                <div class="contact-page__bottom-inner">
                    <ul class="list-unstyled">
                        @php
                            $contactInfo = [
                                [
                                    'icon' => 'map-marker-alt',
                                    'title' => 'Location',
                                    'text' => '280 Granite Run Drive<br>SuiteHobert, LA 90010, USA.',
                                ],
                                [
                                    'icon' => 'clock',
                                    'title' => 'Working Hours',
                                    'text' => 'Wednesday - Sunday<br>7:00 AM - 5:00 PM',
                                ],
                                [
                                    'icon' => 'envelope',
                                    'title' => 'Email',
                                    'text' =>
                                        '<a href="mailto:support@logistra.com">support@logistra.com</a><br><a href="mailto:support@logistra.com">support@logistra.com</a>',
                                ],
                                [
                                    'icon' => 'phone',
                                    'title' => 'Phones',
                                    'text' =>
                                        '<a href="tel:880123456789">+880 123 456 789</a><br><a href="tel:880123456789">+880 123 456 789</a>',
                                ],
                            ];
                        @endphp

                        @foreach ($contactInfo as $info)
                            <li class="contact-page__bottom-single">
                                <div class="icon">
                                    <span class="fas fa-{{ $info['icon'] }}"></span>
                                </div>
                                <div class="content">
                                    <h2>{{ $info['title'] }}</h2>
                                    <p>{!! $info['text'] !!}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!--End Contact Page Bottom-->
    </section>
@endsection
