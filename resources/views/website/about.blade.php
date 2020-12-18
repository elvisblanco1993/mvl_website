@extends('layouts.app')

@section('content')
<div class="border-bottom py-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="mb-0" style="font-weight: 700;color: rgb(44,52,76);">{{__('About Us')}}</h2>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container my-5">
        <div class="row" style="font-size: 1.2rem;color: #2c344c;font-family: Raleway, sans-serif;">
            <div class="col-md-12">
                <p class="text-justify">
                    {{__('Ms. Lorduy received her Doctor of Jurisprudence from St. Thomas University School of Law in 2004 and a Bachelor of Science in Social Science in 1997. She represents individuals with immigration matters. She takes a personal approach to provide her clients the best possible outcome.')}}
                </p>
                <p class="text-justify">
                    {{__('Born in the United States to immigrant parents from South America, Ms. Lorduy feels fortunate and proud of her Hispanic American culture. She comes from a loving and close family, she has a passion to help the most vulnerable both in the United States and abroad. With over 21 years of experience, Ms. Lorduy has worked with immigrant victims of domestic violence and sexual assault at different levels of victim assistance. She has represented battered immigrant survivors in family and civil court, before the Department of Homeland Security’s Bureaus of Citizenship and Immigration Services, Immigration and Customs Enforcement, and the Executive Office for Immigration Review.')}}
                </p>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <img class="rounded img-fluid w-100" src="{{ asset('img/lady-justice.jpg') }}">
            </div>
            <div class="col py-1">
                <p class="text-justify">
                    Her passion to fight for human rights and compassion to help the most vulnerable&nbsp;drive her to be an active member of the community and beyond. She was a faculty member for state and national training conferences offered by Florida Coalition Against Domestic Violence (FCADV) and the National Immigrant Women’s Advocacy Project (NIWAP).&nbsp;She has conducted “Know Your Rights” presentations in the community. She assisted in the creation and development of a training manual and video offered to train advocates in the state, “Improving Access to Justice for Immigrant Survivors”.&nbsp;Ms. Lorduy conducts training for law enforcement, judges, advocates, attorneys and social service providers on the intersection of immigration, domestic violence, sexual assault, child abuse and human trafficking on a local, national and international level.&nbsp;She has also trained and provided technical assistance internationally to organizations that work with victims of domestic violence and sexual violence. </p>
                <p class="text-justify" style="font-size: 1.2rem;color: #2c344c;">
                    Ms. Lorduy's practice is dedicated to helping her clients obtain lawful immigration status by receiving&nbsp;employment authorizations, Lawful Permanent Residency and other immigration relief and to ultimately naturalize as U.S Citizens. </p>
            </div>
        </div>
    </div>
</div>

@include('website.cta')
@endsection
