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

            <!-- Course Item -->

            <div class="friend-item friend-groups create-group" data-mh="friend-groups-item" style="height: 490.781px;">

                <a href="#" class=" full-block" data-toggle="modal" data-target="#create-badge"></a>
                <div class="content">

                    <a href="#" class="  btn btn-control bg-blue" data-toggle="modal" data-target="#create-badge">
                        <svg class="olymp-plus-icon"><use xlink:href="http://127.0.0.1:8000/assets/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                    </a>

                    <div class="author-content">
                        <a href="#" class="h5 author-name">Add badge</a>
                    </div>

                </div>

            </div>

            <!-- ... end Course Item -->
        </div>
    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="ui-block" data-mh="friend-groups-item" >

                    <!-- Friend Item -->

                    <div class="friend-item friend-groups">

                        <div class="friend-item-content">

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img class="centeeeer" style="width: 100%;" src="{{asset('assets')}}/img/badge1.png" alt="Olympus">
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
                                    <img class="centeeeer" style="width: 100%;" src="{{asset('assets')}}/img/badge2.png" alt="Olympus">
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
                                    <img class="centeeeer" style="width: 100%;" src="{{asset('assets')}}/img/badge3.png" alt="Olympus">
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
                                    <img  class="centeeeer" style="width: 100%;" src="{{asset('assets')}}/img/badge4.png" alt="Olympus">
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

<!-- Window-popup Create  badge -->
<div class="modal fade" id="create-badge" tabindex="-1" role="dialog" aria-labelledby="create-badge" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
				<div class="modal-content">
					<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
						<svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
					</a>
					<div class="modal-header">
						<h6 class="title">Create badge</h6>
					</div>

					<div class="modal-body">
                        <form method="post" id="add_course_form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Badge title</label>
                                <input class="form-control" placeholder="Course title"  type="text" name="title"  required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Badge Image</label>
                                <input class="form-control" placeholder="image" type="file" name="image" accept="image/*" required>
                            </div>

                        
                            <button class="btn btn-blue btn-lg full-width">Create Badge</button>
                        </form>
					</div>
				</div>
			</div>
	</div>

	<!-- Window-popup Create  course -->

<!-- ... end Friends -->

@endsection

@section('script')
<script>
</script>
@endsection
