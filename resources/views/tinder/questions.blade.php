@extends('master')

@section('content')
<header id="tinder">
    <div class="container tinder tinder-questions">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="wow fadeInDown visibility-hidden" data-wow-delay="0.3s">{{ trans('content.tinder.questions.title') }}</h2>
                <hr class="wow fadeInUp visibility-hidden" data-wow-delay="0.5s"></div>

            <div class="wow fadeInUp visibility-hidden" data-wow-delay="0.5s">
                <p>{{ trans('content.tinder.questions.subtitle') }}</p>
            </div>

            <div class="col-xs-12 wow fadeInUp visibility-hidden" data-wow-delay="1.5s">
                <form class="" action="{{ route('tinder.questions') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset class="bg-primary">
                        <h3>{{ trans('content.tinder.questions.1.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.1.text') }}</p>
                        <label class="radio-inline">
                            <input type="radio" name="answer1" id="question1-1" checked value="1">{{ trans('content.tinder.questions.yes') }}</label>
                        <label class="radio-inline">
                            <input type="radio" name="answer1" id="question1-0" value="0">{{ trans('content.tinder.questions.no') }}</label>
                        <hr>

                        <h3>{{ trans('content.tinder.questions.2.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.2.text') }}</p>
                        <label class="radio-inline">
                            <input type="radio" name="answer2" id="question2-1" checked value="1">{{ trans('content.tinder.questions.yes') }}</label>
                        <label class="radio-inline">
                            <input type="radio" name="answer2" id="question2-0" value="0">{{ trans('content.tinder.questions.no') }}</label>
                        <hr>

                        <h3>{{ trans('content.tinder.questions.3.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.3.text') }}</p>
                        <label class="radio-inline">
                            <input type="radio" name="answer3" id="question3-1" checked value="1">{{ trans('content.tinder.questions.yes') }}</label>
                        <label class="radio-inline">
                            <input type="radio" name="answer3" id="question3-0" value="0">{{ trans('content.tinder.questions.no') }}</label>
                        <hr>

                        <h3>{{ trans('content.tinder.questions.4.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.4.text') }}</p>
                        <label class="radio-inline">
                            <input type="radio" name="answer4" id="question4-1" checked value="1">{{ trans('content.tinder.questions.yes') }}</label>
                        <label class="radio-inline">
                            <input type="radio" name="answer4" id="question4-0" value="0">{{ trans('content.tinder.questions.no') }}</label>
                        <hr>

                        <h3>{{ trans('content.tinder.questions.5.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.5.text') }}</p>
                        <label class="radio-inline">
                            <input type="radio" name="answer5" id="question5-1" checked value="1">{{ trans('content.tinder.questions.yes') }}</label>
                        <label class="radio-inline">
                            <input type="radio" name="answer5" id="question5-0" value="0">{{ trans('content.tinder.questions.no') }}</label>
                        <hr>

                        <h3>{{ trans('content.tinder.questions.6.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.6.text') }}</p>
                        <input type="text" name="answer6" value="500" placeholder="">
                        <hr>

                        <h3>{{ trans('content.tinder.questions.7.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.7.text') }}</p>
                        <label class="radio-inline">
                            <input type="radio" name="answer7" id="question7-1" checked value="1">{{ trans('content.tinder.questions.yes') }}</label>
                        <label class="radio-inline">
                            <input type="radio" name="answer7" id="question7-0" value="0">{{ trans('content.tinder.questions.no') }}</label>
                        <hr>

                        <h3>{{ trans('content.tinder.questions.8.title') }}</h3>
                        <p>{{ trans('content.tinder.questions.8.text') }}</p>
                        <label class="radio-inline">
                            <input type="radio" name="answer8" id="question8-1" checked value="1">{{ trans('content.tinder.questions.yes') }}</label>
                        <label class="radio-inline">
                            <input type="radio" name="answer8" id="question8-0" value="0">{{ trans('content.tinder.questions.no') }}</label>

                        <button type="submit" class="btn btn-tinder btn-xl">Find out if we're a match!</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</header>
@endsection