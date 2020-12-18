@extends('layouts.app')

@section('content')

{{-- Banner --}}

<section style="background: url({{ asset('img/banner.jpg') }}) center / cover no-repeat;">
    <div class="container pt-5 pb-5">
        <div class="row" style="min-height: 80vh;">
            <div class="col-md-6 text-right align-self-center">
                <h1 style="color: #2c344c; font-family: Raleway, sans-serif; font-weight: 900">{{ __('MVL Law Firm LLC') }}</h1>
                <p class="text-right" style="font-size: 1.4rem;color: #2c344c;text-shadow: 0 1px 4px #ffffff;">
                    {{ __('An Immigration Law Firm.') }}
                </p>
                <a class="btn btn-lg btn-mvl" type="button" href="{{ route('contact') }}">
                    {{ __('REQUEST A CONSULTATION') }}
                </a>
            </div>
        </div>
    </div>
</section>

{{-- About excerpt --}}

<div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img class="rounded w-100" src="{{ asset('img/mercedes.jpg') }}">
            </div>
            <div class="col-md-6 align-self-center py-4">
                <h2 style="font-weight: 700;color: #2c344c;">{{ __('About me') }}</h2>
                <p style="font-size: 1.2rem;color: #2c344c;">
                    {{ __("Ms. Lorduy's practice is dedicated to helping her clients obtain lawful immigration status by receiving employment authorizations, Lawful Permanent Residency and other immigration relief and to ultimately naturalize as U.S Citizens.") }}
                </p>
                <a class="learn-more" style="font-size: 1.2rem" href="{{ route('about') }}">
                    {{ __('Learn more »') }}
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Services --}}

<div class="features-boxed" style="font-family: Raleway, sans-serif;background: #f4f4f4;">
    <div class="container">

        <div class="intro" id="services">
            <h2 class="text-center" style="font-family: Raleway, sans-serif;color: rgb(44,52,76);">{{ __('How can we help?') }}</h2>
            <p class="text-center" style="color: #2c344c;font-size: 1.2rem;">{{__('MVL Law firm represents clients in immigration matters. Call our office for a consultation on any of the matters listed below or any other immigration matter not listed here.')}}</p>
        </div>

        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-balance-scale icon" style="color: rgb(177,148,83);"></i>
                    <h3 class="name">{{ __('Family Immigration')}}</h3>
                    <p class="description">{{ __('Are you a US Citizen or Lawful Permanent Resident and want to petition for your spouse, children or your parents?')}}</p>
                    <button class="btn btn-link" data-toggle="modal" data-target="#family_immigration">{{ __('Learn more »')}}</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-balance-scale icon" style="color: rgb(177,148,83);"></i>
                    <h3 class="name">VAWA</h3>
                    <p class="description">{{ __('Have you been a victim of domestic violence, including but not limited to physical abuse, emotional abuse...')}}</p>
                    <button class="btn btn-link" data-toggle="modal" data-target="#vawa">{{ __('Learn more »')}}</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-balance-scale icon" style="color: rgb(177,148,83);"></i>
                    <h3 class="name">{{ __('Provisional Waivers')}}</h3>
                    <p class="description">{{ __('Did you enter the US without inspection and/or accrue unlawful presence? You may not be aware that you are eligible...')}}</p>
                    <button class="btn btn-link" data-toggle="modal" data-target="#provisional_waivers">{{ __('Learn more »')}}</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-balance-scale icon" style="color: rgb(177,148,83);"></i>
                    <h3 class="name">U-Visas</h3>
                    <p class="description">{{ __('Have you been the victim of a violent crime? Were you helpful in the investigation by providing a statement...')}}</p>
                    <button class="btn btn-link" data-toggle="modal" data-target="#uvisas">{{ __('Learn more »')}}</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-balance-scale icon" style="color: rgb(177,148,83);"></i>
                    <h3 class="name">DACA</h3>
                    <p class="description">{{ __('Were you a child when you entered the US? You may be eligible to stay in the US under the Deferred Action for...')}}</p>
                    <button class="btn btn-link" data-toggle="modal" data-target="#daca">{{ __('Learn more »')}}</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-balance-scale icon" style="color: rgb(177,148,83);"></i>
                    <h3 class="name">{{__('Citizenship/Naturalization')}}</h3>
                    <p class="description">{{__('Are you ready to become a US Citizen? Do you have questions about becoming a US Citizen?')}}</p>
                    <button class="btn btn-link" data-toggle="modal" data-target="#citizenship">{{ __('Learn more »')}}</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-balance-scale icon" style="color: rgb(177,148,83);"></i>
                    <h3 class="name">{{ __('Employment Authorizations')}}</h3>
                    <button class="btn btn-link" data-toggle="modal" data-target="#employment_authorizations">{{ __('Learn more »')}}</button>
                </div>
            </div>

        </div>
    </div>
</div>

@include('website.cta')

@include('website.modals')

@endsection
