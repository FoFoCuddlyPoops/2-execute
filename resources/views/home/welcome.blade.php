@extends('master')

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 class="wow fadeInDown visibility-hidden" data-wow-delay="0.5s">Your X-Silo Associate</h1>
                <hr class="wow fadeInUp visibility-hidden" data-wow-delay="1.0s">
                <h2 class="wow fadeInUp visibility-hidden" data-wow-delay="1.0s">
                    {{ trans('content.homepage.subtitle.line2') }}
                    <br class="rwd-break-1090">{{ trans('content.homepage.subtitle.line3') }}</h2>
                <a href="{{ route('tinder.contact') }}" class="btn btn-tinder btn-xl page-scroll wow fadeInUp visibility-hidden quick-scan" data-wow-delay="1.7s">Supply chain tinder</a>
                <a href="#scan" class="btn btn-inversed btn-xl page-scroll wow fadeInUp visibility-hidden" data-wow-delay="2.0s">{{ trans('cta.quick-scan') }}</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading wow fadeInDown">About us</h2>
                    <hr class="dark wow fadeInUp" data-wow-delay="0.5s">
                    <p class="text-faded-secondary wow fadeInUp" data-wow-delay="0.5s">{{ trans('content.homepage.about') }}</p>
                    <a href="#contact" class="btn btn-secondary btn-xl btn-secondary-border page-scroll wow fadeInUp" data-wow-delay="0.8s">Get to know us better!</a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="row counter">
                <div class="col-xs-6 col-sm-3">
                    <p id="meter0">0</p>
                    <span class="meter-subtext">cups of coffee</span>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <p id="meter1">0</p>
                    <span class="meter-subtext">weekly candy crush hi-score</span>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <p id="meter2">0</p>
                    <span class="meter-subtext">happy customers</span>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <p id="meter3">0</p>
                    <span class="meter-subtext">goal</span>
                </div>
            </div>
        </div>
    </aside>

    <section class="" id="mission">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading wow fadeInDown">Our Mission</h2>
                    <hr class="dark wow fadeInUp" data-wow-delay="0.5s">
                    <p class="text-faded-secondary wow fadeInUp" data-wow-delay="0.5s">{{ trans('content.homepage.mission') }}</p>
                </div>

                <div class="col-xs-12 hidden-xs">
                    <figure class="mission-graph">
                        <img src="{{ asset('img/mission-graph2.png') }}" class="" alt="2-execute Mission Graph 2-execute" />
                    </figure>
                </div>

                <div class="col-xs-12 hidden-xs custom-position">
                    <div class="row">
                        <div class="col-xs-5ths text-center">
                            <img src="{{ asset('img/2-execute-gif0.gif') }}" class="" alt="2-execute mission forklift 2-execute supply chain management belgium" />
                        </div>
                        <div class="col-xs-5ths text-center">
                            <img src="{{ asset('img/2-execute-gif1.gif') }}" class="" alt="2-execute mission forklift 2-execute supply chain management belgium" />
                        </div>
                        <div class="col-xs-5ths text-center">
                            <img src="{{ asset('img/2-execute-gif2.gif') }}" class="" alt="2-execute mission forklift 2-execute supply chain management belgium" />
                        </div>
                        <div class="col-xs-5ths text-center">
                            <img src="{{ asset('img/2-execute-gif3.gif') }}" class="" alt="2-execute mission forklift 2-execute supply chain management belgium" />
                        </div>
                        <div class="col-xs-5ths text-center">
                            <img src="{{ asset('img/2-execute-gif4.gif') }}" class="" alt="2-execute mission forklift 2-execute supply chain management belgium" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding bg-dark" id="services">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-xs-12 text-center section-header-wrapper">
                    <h2 class="section-heading wow fadeInDown">Our Services</h2>
                    <hr class="wow fadeInUp" data-wow-delay="0.5s"></div>
                <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                    <div class="service-box no-border-bottom first">
                        <div class="title">
                            <h3>
                                <span class="bg-dark">Continuous improvement</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutter">
                <div class="col-xs-12 col-sm-4 ">
                    <div class="service-box no-border-bottom no-border-right radius-top-left">
                        <div class="title">
                            <h3>
                                <span class="bg-dark">Facturatie management</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="service-box no-border-bottom">
                        <div class="title">
                            <h3>
                                <span class="bg-dark">KPI management</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="service-box no-border-bottom no-border-left radius-top-right">
                        <div class="title title-long">
                            <h3>
                                <span class="bg-dark">
                                    Procurement &amp;
                                    <br class="rwd-break-1010">management LSP</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="service-box no-border-right no-border-bottom">
                        <div class="title">
                            <h3>
                                <span class="bg-dark">Certificering &amp; audit</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4" >
                    <div class="service-box no-border-bottom">
                        <div class="title">
                            <h3>
                                <span class="bg-dark">Voorraadbeheer</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="service-box no-border-left no-border-bottom">
                        <div class="title">
                            <h3>
                                <span class="bg-dark">Transport management</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="service-box last">
                        <div class="title">
                            <h3>
                                <span class="bg-dark">Project management</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" id="cases">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading wow fadeInDown">Our Cases</h2>
                    <hr class="dark"></div>

                <div class="col-sm-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 text-center">
                    <figure class="case-box">
                        <a href="http://www.tomorrowland.com/nl/" target="_blank">
                            <img src="{{ asset('img/case-tomorrowland.png') }}" class="wow fadeInDown text-primary" data-wow-delay="0.5s" alt="2-execute Tomorrowland Case and Partner" />
                        </a>
                    </figure>
                    <h3 class="section-heading display-none">Tomorrowland</h3>
                    <p class="text-faded-secondary wow fadeInUp" data-wow-delay="0.5s">{{ trans('content.homepage.cases.1') }}</p>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-5 text-center">
                    <figure class="case-box">
                        <a href="http://www.vink.be/" target="_blank">
                            <img src="{{ asset('img/case-vink.jpg') }}" class="wow fadeInDown text-primary" data-wow-delay="1s" alt="2-execute Vink Case and Partner" />
                        </a>
                    </figure>
                    <h3 class="section-heading display-none">Vink</h3>
                    <p class="text-faded-secondary wow fadeInUp" data-wow-delay="1s">{{ trans('content.homepage.cases.2') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray" id="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading wow fadeInDown">Our partner</h2>
                    <hr class="dark"></div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-md-12 text-center">
                    <div class="partner-box">
                        <a href="http://bubblepost.be/" target="_blank">
                            <img src="{{ asset('img/partner-bubblepost.png') }}" class="wow fadeInUp text-primary bubblepost" data-wow-delay="0.5s" alt="2-execute bubblepost partner" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark" id="tinder">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading wow fadeInDown">Supply Chain Tinder</h2>
                    <h3 class="wow fadeInDown">
                        <span class="italic">"Is it a match?"</span>
                    </h3>
                    <hr class="primary wow fadeInUp">
                    <p class="wow fadeInUp" data-wow-delay="0.5s">
                        Met deze tool bepalen we in een aantal stappen of 2-execute toegevoegde waarde kan brengen aan uw activiteit.
                    </p>
                    <a href="{{ route('tinder.contact') }}" class="btn btn-tinder btn-xl wow fadeInUp" data-wow-delay="0.8s" >Supply chain tinder</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="scan">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading wow fadeInDown">Quick Scan</h2>
                    <hr class="dark wow fadeInUp">
                    <p class="wow fadeInUp" data-wow-delay="0.5s">
                        Dit is een analyse die normaal 3 dagen gaat duren met bezoek op de vloer.
                    </p>
                    <a href="#0" class="btn btn-default btn-xl btn-secondary-border page-scroll wow fadeInUp" data-wow-delay="0.5s" disabled>Scan</a>
                </div>
            </div>
        </div>
    </section>
@endsection