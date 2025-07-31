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
                <section class="pricing-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="pricing-one__top">
                                    <div class="sec-title text-center">
                                        <div class="sec-title__tagline" style="margin-bottom: 50px;">
                                            <div class="line"></div>
                                            <div class="text">
                                                <h4>АССОРТИМЕНТ ТА ЦІНИ</h4>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-truck-fast"
                                                    style="color: #FD5523; padding-left: 5px;"></i>
                                            </div>
                                        </div>
                                        <h2 class="sec-title__title">(З ДОСТАВКОЮ В МЕЖАХ 30 КМ)</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="pricing-one__table">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">МАТЕРІАЛ</th>
                                                    <th scope="col">ФРАКЦІЯ</th>
                                                    <th scope="col">ЦІНА ЗА 1 ТОННУ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Пісок кар'єрний</td>
                                                    <td>Без фракції</td>
                                                    <td><strong>505 грн</strong></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">Щебінь</td>
                                                    <td>5-20 мм</td>
                                                    <td><strong>715 грн</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>20-40 мм</td>
                                                    <td><strong>670 грн</strong></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">Відсів</td>
                                                    <td>40+ мм</td>
                                                    <td><strong>940 грн</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>0-5 мм</td>
                                                    <td><strong>520 грн</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Гравій</td>
                                                    <td>20-40 мм</td>
                                                    <td><strong>710 грн</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Грунт</td>
                                                    <td>Чорнозем</td>
                                                    <td><strong>625 грн</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
