@extends('english.layouts.master')

@section('page_title')
Profile page | About
@endsection

@section('content')

<!-- Top Header Profile -->
@include('english.profile.partials.top_header_profile')
<!-- Top Header Profile -->

<div class="container">
    <div class="row">
        <div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Education and Employement</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                            <!-- W-Personal-Info -->

                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">The New College of Design</span>
                                    <span class="date">2001 - 2006</span>
                                    <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
                                </li>
                                <li>
                                    <span class="title">Rembrandt Institute</span>
                                    <span class="date">2008</span>
                                    <span class="text">Five months Digital Illustration course. Professor: Leonardo Stagg.</span>
                                </li>
                                <li>
                                    <span class="title">The Digital College </span>
                                    <span class="date">2010</span>
                                    <span class="text">6 months intensive Motion Graphics course. After Effects and Premire. Professor: Donatello Urtle. </span>
                                </li>
                            </ul>

                            <!-- ... end W-Personal-Info -->

                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                            <!-- W-Personal-Info -->

                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">Digital Design Intern</span>
                                    <span class="date">2006-2008</span>
                                    <span class="text">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</span>
                                </li>
                                <li>
                                    <span class="title">UI/UX Designer</span>
                                    <span class="date">2008-2013</span>
                                    <span class="text">UI/UX Designer for the “Daydreams” agency. </span>
                                </li>
                                <li>
                                    <span class="title">Senior UI/UX Designer</span>
                                    <span class="date">2013-Now</span>
                                    <span class="text">Senior UI/UX Designer for the “Daydreams” agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients.</span>
                                </li>
                            </ul>

                            <!-- ... end W-Personal-Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Personal Info</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">


                    <!-- W-Personal-Info -->

                    <ul class="widget w-personal-info">
                        <li>
                            <span class="title">About Me:</span>
                            <span class="text">{{Auth::user()->little_description}}</span>
                        </li>
                        <li>
                            <span class="title">Birthday:</span>
                            <span class="text">{{date('F j Y',strtotime(str_replace("/","-",Auth::user()->birthday)  . " 00:00:00"))}}</span>
                        </li>
                        <li>
                            <span class="title">Birthplace:</span>
                            <span class="text">{{Auth::user()->birthplace}}</span>
                        </li>
                        {{-- <li>
                            <span class="title">Lives in:</span>
                            <span class="text">San Francisco, California, USA</span>
                        </li> --}}
                        <li>
                            <span class="title">Occupation:</span>
                            <span class="text">{{Auth::user()->occupation}}</span>
                        </li>
                        <li>
                            <span class="title">Joined:</span>
                            <span class="text">{{date('F j Y',strtotime(Auth::user()->created_at))}}</span>
                        </li>
                        {{-- <li>
                            <span class="title">Gender:</span>
                            <span class="text">Male</span>
                        </li> --}}
                        {{-- <li>
                            <span class="title">Status:</span>
                            <span class="text">Married</span>
                        </li> --}}
                        <li>
                            <span class="title">Email:</span>
                            <a href="#" class="text">{{Auth::user()->email}}</a>
                        </li>
                        <li>
                            <span class="title">Website:</span>
                            <a href="https://{{Auth::user()->website}}" class="text">{{Auth::user()->website}}</a>
                        </li>
                        <li>
                            <span class="title">Phone Number:</span>
                            <span class="text">{{Auth::user()->phone}}</span>
                        </li>
                        <!-- <li>
                            <span class="title">Religious Belifs:</span>
                            <span class="text">-</span>
                        </li>
                        <li>
                            <span class="title">Political Incline:</span>
                            <span class="text">Democrat</span>
                        </li> -->
                    </ul>

                    <!-- ... end W-Personal-Info -->
                    <!-- W-Socials -->

                    <div class="widget w-socials">
                        <h6 class="title">Other Social Networks:</h6>
                        <a href="https://{{Auth::user()->facebook}}" class="social-item bg-facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            Facebook
                        </a>
                        <a href="https://{{Auth::user()->twitter}}" class="social-item bg-twitter">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            Twitter
                        </a>
                        <a href="https://{{Auth::user()->linkedin}}" class="social-item bg-linked">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                            LinkedIn
                        </a>
                    </div>


                    <!-- ... end W-Socials -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection
