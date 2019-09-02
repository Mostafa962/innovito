@extends('english.layouts.master')

@section('page_title')
My Courses
@endsection

@section('content')
<!-- Main Header Groups -->

<div class="main-header">
	<div class="content-bg-wrap bg-group"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1> Courses Administration</h1>
					<p>Welcome to your friends groups! Do you wanna know what your close friends have been up to? Groups
	will let you easily manage your friends and put the into categories so when you enter you’ll only
	see a newsfeed of those friends that you placed inside the group. Just click on the plus button below and start now!</p>
				</div>
			</div>
		</div>
	</div>

	<img class="{{asset('assets')}}/img-bottom" src="{{asset('assets')}}/img/group-bottom.png" alt="friends">
</div>

<!-- ... end Main Header Groups -->

<!-- Main Content Groups -->

<div class="container">
	<div class="row">
		<div class="col-12 ">
			<div class="filters row">
				<form action="#">
						<fieldset>
							<label for="speed">category:</label>
							<select name="speed" id="speed">
							<option>Slower</option>
							<option>Slow</option>
							<option selected="selected">Medium</option>
							<option>Fast</option>
							<option>Faster</option>
							</select>
						</fieldset>
						<fieldset>
							<label for="speed">Sort by:</label>
							<select name="speed" id="speed">
								<option>Slower</option>
								<option>Slow</option>
								<option selected="selected">Medium</option>
								<option>Fast</option>
								<option>Faster</option>
							</select>
						</fieldset>

					</form>
			</div>




		</div>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

            <!-- Course Item -->

            <div class="friend-item friend-groups create-group" data-mh="friend-groups-item" style="height: 382.5px;">

                <a href="#" class=" full-block" data-toggle="modal" data-target="#create-course"></a>
                <div class="content">

                    <a href="#" class="  btn btn-control bg-blue" data-toggle="modal" data-target="#create-course">
                        <svg class="olymp-plus-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                    </a>

                    <div class="author-content">
                        <a href="#" class="h5 author-name">Add Course</a>

                    </div>

                </div>

            </div>

            <!-- ... end Course Item -->
        </div>

		{{-- <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block" data-mh="friend-groups-item">

				<!-- Friend Item -->

				<div class="friend-item friend-groups">
						<div class="friend-header-thumb">
								<img src="{{asset('assets')}}/img/friend1.jpg" alt="friend">
							</div>
					<div class="friend-item-content">


						<div class="friend-avatar">

							<div class="author-content">
								<a href="#" class="h5 author-name">course name</a>
								<br>
								<br>
								<div class="country">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti deleniti error reiciendis sed, commodi blanditiis quasi. Sunt consectetur culpa doloribus quaerat vel temporibus quia possimus, quidem earum, maxime officiis aspernatur!</div>
							</div>
						</div>


								<a href="#"  class="btn btn-blue btn-md-2">Enroll<div class="ripple-container"></div></a>



					</div>
				</div>

				<!-- ... end Friend Item -->			</div>
		</div> --}}
	</div>
</div>

<!-- ... end Main Content Groups -->


<a class="back-to-top" href="#">
	<img src="{{asset('assets')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

<!-- Window-popup Create  course -->
<div class="modal fade" id="create-course" tabindex="-1" role="dialog" aria-labelledby="create-course" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
				<div class="modal-content">
					<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
						<svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
					</a>
					<div class="modal-header">
						<h6 class="title">Create Course</h6>
					</div>

					<div class="modal-body">
                        <form>
							<label class="control-label">Course title</label>
							<input class="form-control" placeholder="" value="Highschool Friends" type="text">

							<label class="control-label">Course Short Description</label>
                            <input class="form-control" placeholder="" value="Highschool Friends" type="text">

                            <label class="control-label">Course description</label>
                            <textarea class="form-control" placeholder="" value="Highschool Friends" type="text"></textarea>
                            
							<label class="control-label">Course Category</label>
							<select class="form-control category-select" id="speed">
								<option>none</option>
								<option>Slower</option>
								<option>Slow</option>
								<option >Medium</option>
								<option>Fast</option>
								<option>Faster</option>
                            </select>

							<label class="control-label">Group Image</label>
							<input class="form-control" placeholder="avatar image" value="Group Avatar (120x120px min)"type="file">


						{{-- <form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							<label class="control-label">add learners</label>
							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
													<div class="author-thumb">
														<img src="{{asset('assets')}}/img/avatar52-sm.jpg" alt="author">
													</div>
														<div class="h6 author-title">Green Goo Rock</div>

													</div>'> Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
														<div class="author-thumb">
															<img src="{{asset('assets')}}/img/avatar74-sm.jpg" alt="author">
														</div>
														<div class="h6 author-title">Mathilda Brinker</div>
													</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
														<div class="author-thumb">
															<img src="{{asset('assets')}}/img/avatar48-sm.jpg" alt="author">
														</div>
														<div class="h6 author-title">Marina Valentine</div>
													</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
														<div class="author-thumb">
															<img src="{{asset('assets')}}/img/avatar75-sm.jpg" alt="author">
														</div>
														<div class="h6 author-title">Dave Marinara</div>
													</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
														<div class="author-thumb">
															<img src="{{asset('assets')}}/img/avatar76-sm.jpg" alt="author">
														</div>
														<div class="h6 author-title">Rachel Howlett</div>
													</div>'>Rachel Howlett
								</option>

							</select>
						</form> --}}

                            <a href="#" class="btn btn-blue btn-lg full-width">Create Course</a>
                        </form>
					</div>
				</div>
			</div>
	</div>

	<!-- Window-popup Create  course -->

@endsection

@section('script')
<script>
    $('.category-select').select2();
</script>
@endsection
