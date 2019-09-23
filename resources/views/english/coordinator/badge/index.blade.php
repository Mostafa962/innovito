@extends('english.layouts.master')

@section('page_title')
My Badges
@endsection

@section('content')
<!-- Top Header-Profile -->

<div class="main-header">
    <div class="content-bg-wrap bg-badges"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                <div class="main-header-content">
                    <h1>Collect your Badges!</h1>
                    <p>Welcome to your badge collection! Here you’ll find all the badges you can unlock to show on your profile.
     Learn how to achive the goal to adquire them and collect them all. Some have leveled tiers and other don’t.
     You can challenge your friends to see who gets more and let the fun begin!</p>
                </div>
            </div>
        </div>
    </div>

    <img class="img-bottom" src="{{asset('assets')}}/img/badges-bottom.png" alt="friends">
</div>

<!-- Friends -->

<div class="container">
<div class="row">
    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="ui-block" data-mh="friend-groups-item" >

                    <!-- Friend Item -->

                    <div class="friend-item friend-groups">

                        <div class="friend-item-content">

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img style="width: 100%;" src="{{asset('assets')}}/img/badge1.png" alt="Olympus">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">badge name</a>
                                    <div class="date">25 april 2019</div>
                                </div>
                            </div>




                        </div>
                    </div>

                    <!-- ... end Friend Item -->
            </div>

    </div>

    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="ui-block" data-mh="friend-groups-item" >

                    <!-- Friend Item -->

                    <div class="friend-item friend-groups ">

                        <div class="friend-item-content">

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img style="width: 100%;" src="{{asset('assets')}}/img/badge2.png" alt="Olympus">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">badge name</a>
                                    <div class="date">25 april 2019</div>
                                </div>
                            </div>




                        </div>
                    </div>

                    <!-- ... end Friend Item -->
            </div>

    </div>

    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="ui-block" data-mh="friend-groups-item" >

                    <!-- Friend Item -->

                    <div class="friend-item friend-groups unearned">

                        <div class="friend-item-content">

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img style="width: 100%;" src="{{asset('assets')}}/img/badge3.png" alt="Olympus">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">badge name</a>
                                    <div class="date">25 april 2019</div>
                                </div>
                            </div>




                        </div>
                    </div>

                    <!-- ... end Friend Item -->
            </div>

    </div>

    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="ui-block" data-mh="friend-groups-item " >

                    <!-- Friend Item -->

                    <div class="friend-item friend-groups unearned ">

                        <div class="friend-item-content">

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img style="width: 100%;" src="{{asset('assets')}}/img/badge4.png" alt="Olympus">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">badge name</a>
                                    <div class="date">25 april 2019</div>
                                </div>
                            </div>




                        </div>
                    </div>

                    <!-- ... end Friend Item -->
            </div>

    </div>

</div>
</div>

<!-- ... end Friends -->

@endsection

@section('script')
<script>
</script>
@endsection
