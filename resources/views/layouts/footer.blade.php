<div class="footer-dark" style="background: rgb(44,52,76);">
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-6 item text">
                    <h3>Mercedes V. Lorduy Law Firm, LLC</h3>
                    <p>{{__("Ms. Lorduy's practice is dedicated to helping her clients obtain lawful immigration status by receiving employment authorizations, Lawful Permanent Residency and other immigration relief and to ultimately naturalize as U.S Citizens.")}}</p>
                </div>

                <div class="col-sm-6 col-md-3 item">
                    <h3>{{__('Company')}}</h3>
                    <ul>
                        <li>
                            <a href="https://secure.lawpay.com/pages/mercedesvlorduylawfirmllc/operating " target="_blank">{{__('Payment Center')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}">{{__('Login')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('home').'?#services' }}">{{__('Terms of Service')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('resources') }}">{{__('Privacy Policy')}}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-3 item">
                    <h3>{{__('Contact Information')}}</h3>
                    <ul>
                        <li>
                            <a href="tel:17864105853">
                                <i class="fa fa-phone mr-2"></i>
                                {{__('+1 (786) 410-5853')}}
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/13059303732">
                                <i class="fa fa-whatsapp mr-2"></i>
                                {{__('+1 (305) 930-3732')}}
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-fax mr-2"></i>
                                {{__('+1 (786) 601-3866')}}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@merceylaw.com">
                                <i class="fa fa-envelope mr-2"></i>
                                {{__('info@merceylaw.com')}}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col item social mt-5">
                    {{-- <a href="#">
                        <i class="fa fa-youtube"></i>
                    </a> --}}
                    <a href="https://www.facebook.com/MerceyLaw" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/Merceylaw" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
            </div>
            <p class="copyright">Mercedes V. Lorduy Law Firm, LLC © {{ Carbon\Carbon::now()->year }}</p>
        </div>
    </footer>
</div>
