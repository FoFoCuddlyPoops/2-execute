@extends('master')

@section('content')
<header id="tinder">
    <div class="container tinder tinder-contact">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="" data-wow-delay="0.3s">{{ trans('content.tinder.contact.title') }}</h2>
                <hr class="" data-wow-delay="0.5s"></div>

            <div class="" data-wow-delay="0.5s">
                <p>{{ trans('content.tinder.contact.subtitle') }}</p>
            </div>

            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 " data-wow-delay="1.5s">
                <form class="" action="{{ route('tinder.contact') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <fieldset class="bg-primary">
                        <label class="@if ($errors->get('name')) has-error @endif">{{ trans('content.tinder.contact.name') }} <sup>*</sup></label>
                        <input type="text" name="name" value="{{ old('name') }}" class="@if ($errors->get('name')) has-error @endif">

                        <label class="@if ($errors->get('email')) has-error @endif">{{ trans('content.tinder.contact.email') }} <sup>*</sup></label>
                        <input type="email" name="email" value="{{ old('email') }}" class="@if ($errors->get('email')) has-error @endif">

                        <label class="@if ($errors->get('company')) has-error @endif">{{ trans('content.tinder.contact.company') }} <sup>*</sup></label>
                        <input type="text" name="company" value="{{ old('company') }}" class="@if ($errors->get('company')) has-error @endif">

                        <label class="@if ($errors->get('function')) has-error @endif">{{ trans('content.tinder.contact.function') }}</label>
                        <input type="text" name="function" value="{{ old('function') }}" class="@if ($errors->get('function')) has-error @endif">

                        <label class="@if ($errors->get('telephone_number')) has-error @endif">{{ trans('content.tinder.contact.telephone_number') }}</label>
                        <input type="tel" name="telephone_number" value="{{ old('telephone_number') }}" class="@if ($errors->get('telephone_number')) has-error @endif">

                        <p class="required-text"><sup>*</sup> {{ trans('content.tinder.contact.required') }}</p>

                        <button type="submit" class="btn btn-tinder btn-xl">Let's get to matching!</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</header>
@endsection