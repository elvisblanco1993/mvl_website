@extends('layouts.app')

@section('content')

<div class="border-bottom py-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="mb-0" style="font-weight: 700;color: rgb(44,52,76);">{{__('Contact Us')}}</h2>
            </div>
        </div>
    </div>
</div>

<div class="mb-4">
    <div class="container">
        <div class="row">

            <div class="col align-self-lg-center" style="color: rgb(44,52,76);">
                <p style="font-size: 1.2rem;">{{__('MVL Law firm represents clients in immigration matters. Call our office for a consultation, or fill out this form and we will call you back as soon as we can.')}}</p>
                <div class="mt-4">
                    <p style="font-size: 1.2rem;font-family: Montserrat, sans-serif;">
                        <i class="fa fa-phone mr-4" style="color: #2c344c;"></i>
                        +1 (786) 410-5853
                    </p>
                    <p style="font-size: 1.2rem;font-family: Montserrat, sans-serif;">
                        <i class="fa fa-fax mr-4"></i>
                        +1 (786) 601-3866
                    </p>
                    <p style="font-size: 1.2rem;font-family: Montserrat, sans-serif;">
                        <i class="fa fa-whatsapp mr-4"></i>
                        +1 (305) 930-3732
                    </p>
                    <p style="font-size: 1.2rem;font-family: Montserrat, sans-serif;">
                        <i class="fa fa-envelope mr-4"></i>
                        info@merceylaw.com
                    </p>
                    <p style="font-size: 1.2rem;font-family: Montserrat, sans-serif;">
                        <i class="fa fa-map mr-4"></i>
                        26031 S Dixie Hwy Naranja, FL 33032
                    </p>
                </div>
                <hr>
                <iframe
                    allowfullscreen=""
                    frameborder="0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAYM2qsg9prJ8Tu6PDsgF8qfnBw2H4QpnU&amp;q=26031+S+Dixie+Hwy%2C+Naranja%2C+Fl+33032&amp;zoom=12"
                    width="100%"
                    height="200">
                </iframe>
            </div>
            <div class="col-md-6" style="color: #2c344c;">

                {{-- Recaptcha Scripting --}}
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <script>
                    function onSubmit(token) {
                        document.getElementById("form").submit();
                    }
                </script>

                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                            {{ session('message') }}
                    </div>
                @endif

                <form action="{{ route('contact-submit') }}" method="POST" id="form">
                    @csrf

                    <div class="form-group">
                      <label for="name">{{ __('Full Name') }}</label>
                      <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="" aria-describedby="helpName">
                      @error('name')
                        <small id="helpName" class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">{{ __('Email') }}</label>
                      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="" aria-describedby="helpEmail">
                      @error('email')
                        <small id="helpEmail" class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="tel">{{ __('Phone') }}</label>
                      <input type="tel" name="phone" id="tel" class="form-control @error('phone') is-invalid @enderror" placeholder="" aria-describedby="helpPhone">
                      @error('phone')
                        <small id="helpPhone" class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">{{ __('How can we assist you today?') }}</label>
                        <select name="subject" id="subject" class="custom-select @error('subject') is-invalid @enderror" aria-describedby="helpSubject">
                            {{-- Make this dynamic on the database --}}
                            @forelse (App\Models\Subject::all() as $subject)
                                <option value="{{ $subject->value }}">{{ $subject->name }}</option>
                            @empty
                                <option value="" disabled>{{__('Error: No subjects available. Please contact the site owner.')}}</option>
                            @endforelse
                        </select>
                        @error('name')
                            <small id="helpSubject" class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="msg">{{ __('Message') }}</label>
                        <textarea name="message" id="msg" class="form-control @error('message') is-invalid @enderror" cols="30" rows="10" aria-describedby="helpMessage"></textarea>
                        @error('message')
                            <small id="helpMessage" class="text-danger">{{ $message }}</small>
                        @else
                            <small id="helpMessage" class="text-muted">{{__('Allows for a maximum of 500 characters.')}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button
                            class="g-recaptcha btn btn-success text-uppercase"
                            data-sitekey="{{ config('services.recaptcha.key') }}"
                            data-callback="onSubmit">
                            <i class="fa fa-paper-plane mr-2"></i>
                            {{ __('Submit Inquiry') }}
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
