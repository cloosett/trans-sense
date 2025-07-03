@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('images/page-header-bg.jpg') }})"></div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-bg.jpg') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Зв'яжіться з нами</h2>
                <div class="page-header__breadcrumb">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('welcome') }}">Головна</a></li>
                        <li>Контакти</li>
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
                                        <h4>Зв'яжіться з нами</h4>
                                    </div>
                                    <div class="icon">
                                        <span class="fas fa-paper-plane float-bob-x3"></span>
                                    </div>
                                </div>
                                <h2 class="sec-title__title tg-element-title">
                                    Зв'яжіться з нами і ми допоможемо вашому бізнесу
                                </h2>
                            </div>

                            <div class="contact-page__top-content-text1">
                                <p>Наша відданая команда експертів готова провести вас через кожен етап страхового
                                    процесу, забезпечуючи обґрунтовані рішення, адаптовані до ваших унікальних потреб.</p>
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
                                                'placeholder' => 'Ім\'я',
                                                'icon' => 'user',
                                                'col' => '6',
                                            ],
                                            [
                                                'type' => 'email',
                                                'name' => 'email',
                                                'placeholder' => 'Електронна пошта',
                                                'icon' => 'envelope',
                                                'col' => '6',
                                            ],
                                            [
                                                'type' => 'text',
                                                'name' => 'phone',
                                                'placeholder' => 'Телефон',
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
                                                    <option selected>Тема</option>
                                                    @foreach (['Загальний запит', 'Ціни', 'Підтримка', 'Партнерство', 'Інше'] as $option)
                                                        <option>{{ $option }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="message" placeholder="Повідомлення"></textarea>
                                            <div class="icon style2"><span class="fas fa-pen"></span></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="why-choose-one__form-btn">
                                            <button type="submit" class="thm-btn">
                                                Надіслати зараз <i class="fas fa-arrow-right"></i>
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
                                    'title' => 'Місцезнаходження',
                                    'text' => '280 Granite Run Drive<br>SuiteHobert, LA 90010, США.',
                                ],
                                [
                                    'icon' => 'clock',
                                    'title' => 'Робочі години',
                                    'text' => 'Середа - Неділя<br>7:00 - 17:00',
                                ],
                                [
                                    'icon' => 'envelope',
                                    'title' => 'Електронна пошта',
                                    'text' =>
                                        '<a href="mailto:support@logistra.com">support@logistra.com</a><br><a href="mailto:support@logistra.com">support@logistra.com</a>',
                                ],
                                [
                                    'icon' => 'phone',
                                    'title' => 'Телефони',
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
