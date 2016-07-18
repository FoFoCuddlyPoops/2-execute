@extends('master')

@section('content')
<header>
        <div class="container tinder tinder-confirm">
            @if ($tinder_contact->match)
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="wow fadeInDown visibility-hidden" data-wow-delay="1s">It's a match!</h2>
                        <hr class="wow fadeInUp visibility-hidden" data-wow-delay="1s"></div>

                    <div class="wow fadeInUp visibility-hidden" data-wow-delay="1s">
                        <p>You and 2-execute might have a bright supply chain future together ;)</p>
                    </div>

                    <div class="col-xs-12 wow fadeInUp visibility-hidden" data-wow-delay="0s">
                        <div class="avatar">
                            <p class="bg-secondary">
                                {{ $tinder_contact->company }}
                            </p>
                        </div>
                        <div class="avatar">
                            <p class="bg-secondary">
                                2-execute
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 wow fadeInUp visibility-hidden" data-wow-delay="1.5s">
                        <div class="actions">
                            <a href="mailto:info@2-execute.net" class="btn btn-inversed btn-xl page-scroll wow fadeInUp visibility-hidden" data-wow-delay="2.0s" target="_blank">{{ trans('cta.send-us-a-message') }}</a>
                            <a href="{{ route('home') }}#mission" class="btn btn-inversed btn-xl page-scroll wow fadeInUp visibility-hidden" data-wow-delay="2.0s">{{ trans('cta.get-to-know-us') }}</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="wow fadeInDown visibility-hidden" data-wow-delay="1s">Bedankt!</h2>
                        <hr class="wow fadeInUp visibility-hidden" data-wow-delay="1s"></div>

                    <div class="wow fadeInUp visibility-hidden" data-wow-delay="1s">
                        <p>We hebben uw antwoorden goed ontvangen. We nemen spoedig contact met je op.</p>
                    </div>


                    <div class="col-xs-12 wow fadeInUp visibility-hidden" data-wow-delay="1.5s">
                        <div class="actions">
                            <a href="mailto:info@2-execute.net" class="btn btn-inversed btn-xl page-scroll wow fadeInUp visibility-hidden" data-wow-delay="2.0s" target="_blank">Stuur ons een bericht</a>
                            <a href="{{ route('home') }}#mission" class="btn btn-inversed btn-xl page-scroll wow fadeInUp visibility-hidden" data-wow-delay="2.0s">Leer ons beter kennen</a>
                        </div>
                    </div>
                </div>
            @endif
    </div>
</header>
@endsection