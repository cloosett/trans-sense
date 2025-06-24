@extends('layouts.layout')

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        </div>
        <div class="page-header__pattern"><img src="{{ asset('images/page-header-pattern.png') }}" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>FAQ's</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="https://logistiq.unicktheme.com">Home</a></li>
                    <li><span class="fas fa-arrow-right"></span></li>
                    <li>FAQ</li>
                </ul>
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
                                    <div class="text tg-element-title" style="perspective: 400px;">
                                        <div style="display: block; text-align: start; position: relative;"
                                            class="split-line">
                                            <h4>
                                                <div style="position:relative;display:inline-block;">
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        C</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        o</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        m</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        p</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        a</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        n</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        y</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        '</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        s</div>
                                                </div>
                                                <div style="position:relative;display:inline-block;">
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        F</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        A</div>
                                                    <div
                                                        style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                        Q</div>
                                                </div>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <span class="fas fa-truck"></span>
                                    </div>
                                </div>
                                <h2 class="sec-title__title tg-element-title" style="perspective: 400px;">
                                    <div style="display: block; text-align: start; position: relative;" class="split-line">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                F</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                q</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                l</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                y</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                A</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                k</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                d</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                H</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                v</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                e</div>
                                        </div>
                                    </div>
                                    <div style="display: block; text-align: start; position: relative;" class="split-line">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                A</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                y</div>
                                        </div> <span>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    Q</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    u</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    e</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    s</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    n</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px); opacity: 1;">
                                                    ?</div>
                                            </div>
                                        </span>
                                    </div>
                                </h2>
                            </div>

                            <div class="accrodion-grp faq-one-accrodion faq-one-accrodion-1"
                                data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How do you handle returns or exchanges? <span
                                                class="fas fa-chevron-down"></span></h4>
                                    </div>

                                    <div class="accrodion-content" style="display: none;">
                                        <div class="inner">
                                            <p>We help businesses bring ideas to life in the digital world designing
                                                &amp; implementing the technology tools that they need to win. We help
                                                business bring ideas to life in the digital wor</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What does business consulting do? <span class="fas fa-chevron-down"></span></h4>
                                    </div>

                                    <div class="accrodion-content" style="display: none;">
                                        <div class="inner">
                                            <p>We help businesses bring ideas to life in the digital world designing
                                                &amp; implementing the technology tools that they need to win. We help
                                                business bring ideas to life in the digital wor</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>Can I cancel a shipment after it's been booked? <span
                                                class="fas fa-chevron-down"></span></h4>
                                    </div>

                                    <div class="accrodion-content" style="">
                                        <div class="inner">
                                            <p>We help businesses bring ideas to life in the digital world designing
                                                &amp; implementing the technology tools that they need to win. We help
                                                business bring ideas to life in the digital wor</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Can you assist with customs clearance procedures? <span
                                                class="fas fa-chevron-down"></span></h4>
                                    </div>

                                    <div class="accrodion-content" style="display: none;">
                                        <div class="inner">
                                            <p>We help businesses bring ideas to life in the digital world designing
                                                &amp; implementing the technology tools that they need to win. We help
                                                business bring ideas to life in the digital wor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Faq One Content-->

                <!--Start Faq One Img-->
                <div class="col-xl-6">
                    <div class="faq-one__img">
                        <div class="faq-one__img-box">
                            <img src="assets/images/resources/faq-v1-img1.jpg" alt="">

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
