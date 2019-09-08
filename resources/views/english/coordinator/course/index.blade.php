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
		{{-- <div class="col-12 ">
			<div class="filters row">
				<form action="#">
						<fieldset>
							<label>category:</label>
							<select name="speed">
                                <option>Slower</option>
                                <option>Slow</option>
                                <option selected="selected">Medium</option>
                                <option>Fast</option>
                                <option>Faster</option>
							</select>
						</fieldset>
						<fieldset>
							<label>Sort by:</label>
							<select name="speed">
								<option>Slower</option>
								<option>Slow</option>
								<option selected="selected">Medium</option>
								<option>Fast</option>
								<option>Faster</option>
							</select>
						</fieldset>

					</form>
			</div>




		</div> --}}
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

        @foreach (Auth::user()->courses as $course)
            <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="ui-block" data-mh="friend-groups-item">
                    <!-- Friend Item -->
                    <div class="friend-item friend-groups">
                        <div class="friend-header-thumb">
                            <img src="{{asset('') . $course->image}}" alt="Course-Image">
                        </div>
                        <div class="friend-item-content">
                            <div class="friend-avatar">
                                <div class="author-content">
                                    <a href="{{route('en.coordinator.courses.edit', [$course->slug])}}" class="h5 author-name">{{$course->title}}</a>
                                    <br>
                                    <br>
                                    <div class="country">{{$course->description}}</div>
                                </div>
                            </div>
                            <a href="{{route('en.coordinator.courses.edit', [$course->slug])}}"  class="btn btn-blue btn-md-2">Edit<div class="ripple-container"></div></a>
                        </div>
                    </div>
                    <!-- ... end Friend Item -->
                </div>
            </div>
        @endforeach

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
                        <form method="post" id="add_course_form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Course title</label>
                                <input class="form-control" placeholder="Course title"  type="text" name="title"  required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Course description</label>
                                <textarea class="form-control" placeholder="Course description"  type="text" name="description" required></textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Course Category</label>
                                <select class="form-control category-select" name="category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Course Type</label>
                                <select class="form-control" name="course_type_id" required>
                                    @foreach ($course_types as $course_type)
                                        <option value="{{$course_type->id}}">{{$course_type->type}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Completion Criteria</label>
                                <select class="form-control category-select" name="completion_criteria_id" required>
                                    @foreach ($completion_criterias as $completion_criteria)
                                        <option value="{{$completion_criteria->id}}">{{$completion_criteria->type}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Course Langage</label>
                                <select class="form-control" name="language" required>
                                    <option value="English">English</option>
                                    <option value="Arabic">Arabic</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Course Image</label>
                                <input class="form-control" placeholder="image" type="file" name="image" accept="image/*" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Course Expiration Date</label>
                                <input class="form-control" placeholder="image" type="date" name="expired_at" required>
                            </div>

                            <div class="form-group label-floating is-select">
                                <svg class="olymp-happy-face-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                <label class="control-label">Add Employees</label>
                                <select class="selectpicker form-control style-2 show-tick" multiple data-max-options="10" data-live-search="true" name="employees[]" multiple>
                                    @foreach ($employees as $employee)
                                        <option value="{{$employee->id}}" title="{{$employee->name}}" data-content='<div class="inline-items">
                                            <div class="author-thumb">
                                                <img src="{{asset('') . $employee->image}}" alt="employee" style="width:20px; height:20px">
                                            </div>
                                                <div class="h6 author-title">{{$employee->name}}</div>

                                            </div>'> {{$employee->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-blue btn-lg full-width">Create Course</button>
                        </form>
					</div>
				</div>
			</div>
	</div>

	<!-- Window-popup Create  course -->

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.category-select').select2();
        $('#add_course_form').on('submit', function(event){
            event.preventDefault();
            var formData = new FormData(document.querySelector('#add_course_form'));
            $.ajax({
                url:"{{ route('en.coordinator.courses.store') }}",
                method:"POST",
                processData: false, // important
                contentType: false, // important
                data:formData,
                dataType:'JSON',
                beforeSend: function(){
                    $(".overlay").toggleClass('hidden');
                },
                success:function(data)
                {
                    swalNormal(data.swal);
                    $(".overlay").toggleClass('hidden');
                    window.location.replace(data.route);
                },
                error:function(data)
                {
                    sweetAlertErrorResponse(data);
                }
            })
        });

    });
</script>
@endsection
