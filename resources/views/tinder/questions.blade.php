@extends('master')

@section('content')
<header id="tinder">
        <div class="container tinder tinder-questions">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="wow fadeInDown visibility-hidden" data-wow-delay="0.3s">Question time</h2>
                    <hr class="wow fadeInUp visibility-hidden" data-wow-delay="0.5s"></div>

                <div class="wow fadeInUp visibility-hidden" data-wow-delay="0.5s">
                    <p>Please answer the questions below.</p>
                </div>

                <div class="col-xs-12 wow fadeInUp visibility-hidden" data-wow-delay="1.5s">
                    <form class="" action="{{ route('tinder.questions') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset class="bg-primary">
                            <h3>Vraag 1</h3>
                            <p>
                                Beschikt uw firma over meerdere voorraadpunten (intern – extern)?
                            </p>
                            <label class="radio-inline">
                                <input type="radio" name="question1" id="question1-1" checked value="1">Ja</label>
                            <label class="radio-inline">
                                <input type="radio" name="question1" id="question1-0" value="0">Nee</label>
                            <hr>

                            <h3>Vraag 2</h3>
                            <p>
                                Is uw bedrijf verantwoordelijk voor transportactiviteiten (inbound – outbound)?
                            </p>
                            <label class="radio-inline">
                                <input type="radio" name="question2" id="question2-1" checked value="1">Ja</label>
                            <label class="radio-inline">
                                <input type="radio" name="question2" id="question2-0" value="0">Nee</label>
                            <hr>

                            <h3>Vraag 3</h3>
                            <p>
                                Maakt u gebruikt van logistieke dienstverleners?
                            </p>
                            <label class="radio-inline">
                                <input type="radio" name="question3" id="question3-1" checked value="1">Ja</label>
                            <label class="radio-inline">
                                <input type="radio" name="question3" id="question3-0" value="0">Nee</label>
                            <hr>

                            <h3>Vraag 4</h3>
                            <p>
                                Zijn er retourstromen aanwezig?
                            </p>
                            <label class="radio-inline">
                                <input type="radio" name="question4" id="question4-1" checked value="1">Ja</label>
                            <label class="radio-inline">
                                <input type="radio" name="question4" id="question4-0" value="0">Nee</label>
                            <hr>

                            <h3>Vraag 5</h3>
                            <p>
                                Heeft u tools voor prestatiemeeting ter beschikking?
                            </p>
                            <label class="radio-inline">
                                <input type="radio" name="question5" id="question5-1" checked value="1">Ja</label>
                            <label class="radio-inline">
                                <input type="radio" name="question5" id="question5-0" value="0">Nee</label>
                            <hr>

                            <h3>Vraag 6</h3>
                            <p>
                                Wat is het aantal actieve SKU’s (stock keeping units)?
                            </p>
                            <input type="text" name="SKUS" value="500" placeholder="">
                            <hr>

                            <h3>Vraag 7</h3>
                            <p>
                                Is leverbetrouwbaarheid, flexibiliteit en snelheid een verkoopsargument dat gebruikt kan worden bij de klanten?
                            </p>
                            <label class="radio-inline">
                                <input type="radio" name="question7" id="question7-1" checked value="1">Ja</label>
                            <label class="radio-inline">
                                <input type="radio" name="question7" id="question7-0" value="0">Nee</label>
                            <hr>

                            <h3>Vraag 8</h3>
                            <p>
                                Heeft u nood aan een reactieve supply chain?
                            </p>
                            <label class="radio-inline">
                                <input type="radio" name="question8" id="question8-1" checked value="1">Ja</label>
                            <label class="radio-inline">
                                <input type="radio" name="question8" id="question8-0" value="0">Nee</label>

                            <button type="submit" class="btn btn-tinder btn-xl" disabled>Find out if we're a match!</button>
                        </fieldset>
                    </form>
                </div>
            </div>
    </div>
</header>
@endsection