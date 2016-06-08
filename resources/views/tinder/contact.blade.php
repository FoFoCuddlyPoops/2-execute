@extends('master')

@section('content')
<header id="tinder">
    <div class="container tinder tinder-contact">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="wow fadeInDown visibility-hidden" data-wow-delay="0.3s">Before we can get started we need to get to know you better.</h2>
                <hr class="wow fadeInUp visibility-hidden" data-wow-delay="0.5s"></div>

            <div class="wow fadeInUp visibility-hidden" data-wow-delay="0.5s">
                <p>Please fill out the form below.</p>
            </div>

            <div class="col-xs-12 col-sm-offset-3 col-sm-6 wow fadeInUp visibility-hidden" data-wow-delay="1.5s">
                <form class="" action="{{ route('tinder.contact') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset class="bg-primary">
                        <label>Naam &amp; Voornaam</label>
                        <input type="text" name="NAME" value="" placeholder="">
                        <label>Werk email</label>
                        <input type="email" name="EMAIL" value="" placeholder="">
                        <label>Telefoon nummer</label>
                        <input type="tel" name="PHONE" value="" placeholder="">
                        <label>Bedrijf</label>
                        <input type="text" name="COMPANY" value="" placeholder="">
                        <label>Functie</label>
                        <input type="text" name="FUNCTION" value="" placeholder="">

                        <button type="submit" class="btn btn-tinder btn-xl">Let's get to matching!</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</header>
@endsection