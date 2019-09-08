@extends('english.layouts.master')

@section('page_title')
{{$course->title}}
@endsection

@section('content')
<!-- Top Header-Profile -->

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="{{asset('') . $course->image}}" alt="nature" style="height: 420px;">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="02-ProfilePage.html" ><i class="fas fa-eye"></i>Preview</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#edit-course"> <i class="fas fa-edit"></i>Edit</a>
									</li>

								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
                                        <a href="06-ProfilePage.html"> <i class="fas fa-file-alt"></i>Add survey</a>
									</li>
									<li>
                                        <a href="#" class="delete-course"><i class="fas fa-trash-alt"></i>Delete</a>
									</li>
								</ul>
							</div>
						</div>


					</div>
					<div class="top-header-author course-name">

						<div class="author-content">
							<a href="" class="h4 author-name">{{$course->title}}</a>
							<div class="country">{{$course->category->title}}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Top Header-Profile -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="ui-block">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item text-center" style="width:50%;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item text-center" style="width:50%;">
                        <a class="nav-link" id="stats-tab" data-toggle="tab" href="#stats" role="tab" aria-controls="stats" aria-selected="false">Stats</a>
                    </li>

                </ul>
						  <div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
										<div class=" col col-md-4 col-sm-12" >
												<div class="ui-block ">
													<!-- W-Action -->
													<a href="">
													<div class="widget catco" style="background-image: url('{{asset('assets')}}/img/bg-wethear.jpg');">

														<div class="content">

																<a href="#" class="btn btn-control" data-toggle="modal" data-target="#create-section">
																	<svg class="olymp-plus-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
																</a>

																<div class="author-content">
																	<a href="#" class="h5 author-name color-white" data-toggle="modal" data-target="#create-section">Add Sections</a>
																</div>

															</div>
													</div>
												</a>
													<!-- ... end W-Action -->
												</div>

											</div>
											<div class=" col col-md-4 col-sm-12" >
												<div class="ui-block ">
													<!-- W-Action -->
													<a href="">
													<div class="widget catco" style="background-image: url('{{asset('assets')}}/img/top-header7.png');">

														<div class="content">

																<a href="#" class="  btn btn-control" data-toggle="modal" data-target="#create-lesson">
																	<svg class="olymp-plus-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
																</a>

																<div class="author-content">
																	<a href="#" class="h5 author-name color-white">Add Lessons</a>

																</div>

															</div>
													</div>
												</a>
													<!-- ... end W-Action -->
												</div>

											</div>
											<div class=" col col-md-4 col-sm-12" >
												<div class="ui-block ">
													<!-- W-Action -->
													<a href="">
													<div class="widget catco" style="background-image: url('{{asset('assets')}}/img/bg-event-day.jpg');">

														<div class="content">

																<a href="#" class="  btn btn-control" data-toggle="modal" data-target="#create-quiz">
																	<svg class="olymp-plus-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
																</a>

																<div class="author-content">
																	<a href="#" class="h5 author-name color-white">Add Quizes</a>

																</div>

															</div>
													</div>
												</a>
													<!-- ... end W-Action -->
												</div>

											</div>
                                </div>

                                <div class="ui-block-title">
                                    <h6 class="title text-center">Curriculum For This Course</h6>
                                </div>

                                <div class="ui-block-content cumm course-curriculum">
                                    <div class="row">
                                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="table-responsive table-middle no-shadow">
                                                @foreach ($course->sections()->orderBy('order')->get() as $section)
                                                    <table class="table section-content-{{$section->id}}">
                                                        <thead>
                                                            <tr class="title-c">
                                                                <th>{{$section->title}}</th>
                                                                <th class="text-center" style="width:130px">{{$section->lessons()->count()}} Lessons</th>
                                                                <th class="text-center" style="width:130px"></th>
                                                                <th class="text-center" style="width:130px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($section->lessons()->orderBy('order')->get() as $lesson)
                                                                <tr class="lesson-content-{{$lesson->id}}">
                                                                    <td>{{$lesson->title}}</td>
                                                                    <td class="text-center" style="width:130px">{{$lesson->lessonType->title}}</td>
                                                                    <td class="text-center" style="width:130px"><a href="#" data-toggle="modal" data-target="#edit-lesson-{{$lesson->id}}"><i class="fas fa-edit" style="margin-right: 5px;"></i>Edit</a></td>
                                                                    <td class="text-center" style="width:130px"><a href="#" class="delete-lesson" data-lesson-id="{{$lesson->id}}"><i class="fas fa-trash-alt" style="margin-right: 5px;"></i>Delete</a></td>
                                                                </tr>
                                                                @include('english.coordinator.course.partials.lessons.edit_modal', ['lesson' => $lesson])
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="mg-bttn section-content-{{$section->id}}">
                                                        <div class="bttn-right d-flex justify-content-end">
                                                            <a class="btn btn-secondary bg-blue btn-lg  color-white m-1"  href="" data-toggle="modal" data-target="#edit-section-{{$section->id}}">Edit</a>
                                                            <a  class="btn  btn-secondary btn-lg color-white m-1 delete-section" data-section-id="{{$section->id}}">Delete</a>
                                                        </div>
                                                    </div>

                                                    <!-- Window-popup Edit section -->
                                                    <div class="modal fade" id="edit-section-{{$section->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-section-{{$section->id}}" aria-hidden="true">
                                                        <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                                                            <div class="modal-content">
                                                                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                                                                    <svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                                                </a>
                                                                <div class="modal-header">
                                                                    <h6 class="title">Edit Section | {{$section->title}}</h6>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form method="post" class="edit_section_form" id="edit-section-form-{{$section->id}}" data-section-id="{{$section->id}}" enctype="multipart/form-data">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Section title</label>
                                                                            <input class="form-control" placeholder="Section Title" type="text" value="{{$section->title}}" name="title" required>
                                                                        </div>

                                                                        <div class="form-group label-floating is-focused">
                                                                            <label class="control-label">Sort Order</label>
                                                                            <input class="form-control" placeholder="Sort Order" type="number" value="{{$section->order}}" name="order" required>
                                                                        </div>
                                                                        <button class="btn btn-blue btn-lg full-width">Edit section</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Window-popup Edit section -->

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

							</div>
							<div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                                <div class="ui-block">
                                    <div class="ui-block-title">
                                        <h6 class="title text-center">Enrolled Employees</h6>
                                    </div>

                                    <div class="ui-block-content cumm">
                                        <div class="row">
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="table-responsive table-middle no-shadow">
                                                    <table class="table">
                                                        <thead>
                                                            <tr class="title-c">
                                                                <th>Employee Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($course->users as $user)
                                                                <tr>
                                                                    <td>{{$user->name}}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							    </div>
							</div>

                        </div>
			</div>
		</div>
		<!-- Main Content -->




		<!-- ... end Main Content -->






	</div>
</div>




<!-- Window-popup Create section -->
<div class="modal fade" id="create-section" tabindex="-1" role="dialog" aria-labelledby="create-section" aria-hidden="true">
    <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Create Section</h6>
            </div>

            <div class="modal-body">
                <form method="post" id="create_section_form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group label-floating">
                        <label class="control-label">Section title</label>
                        <input class="form-control" placeholder="Section Title" type="text" name="title" required>
                    </div>

                    <div class="form-group label-floating is-focused">
                        <label class="control-label">Sort Order</label>
                        <input class="form-control" placeholder="Sort Order" type="number" name="order" required>
                    </div>
                    <button class="btn btn-blue btn-lg full-width">Create section</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Window-popup Create section -->


<!-- Window-popup Create  lesson -->
<div class="modal fade" id="create-lesson" tabindex="-1" role="dialog" aria-labelledby="create-lesson" aria-hidden="true">
    <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Create Lesson</h6>
            </div>

            <div class="modal-body">
                <div class="form-group label-floating is-focused">
                    <div id="tabs">
                        <ul>
                            @foreach ($lesson_types as $lesson_type)
                                <li><a href="#tabs-{{$lesson_type->id}}">{{$lesson_type->title}}</a></li>
                            @endforeach
                        </ul>

                        @include('english.coordinator.course.partials.lessons.text_form')
                        @include('english.coordinator.course.partials.lessons.image_form')
                        @include('english.coordinator.course.partials.lessons.text_and_image_form')
                        @include('english.coordinator.course.partials.lessons.file_form')
                        @include('english.coordinator.course.partials.lessons.external_content_form')
                        @include('english.coordinator.course.partials.lessons.internal_upload_form')
                        @include('english.coordinator.course.partials.lessons.scorm_form')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<!-- Window-popup Create  lesson -->

	<!-- Window-popup Create  quiz -->
<div class="modal fade" id="create-quiz" tabindex="-1" role="dialog" aria-labelledby="create-quiz" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
				<div class="modal-content">
					<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
						<svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
					</a>
					<div class="modal-header">
						<h6 class="title">Create quiz</h6>
					</div>

					<div class="modal-body">
						<form class="form-group label-floating">
							<label class="control-label">add Quistion</label>
							<input class="form-control" placeholder=""  type="text">
						</form>
						<a href="#" class="btn  btn-secondary btn-lg full-width">add another</a>


						<a href="#" class="btn btn-blue btn-lg full-width">Create lesson</a>
					</div>
				</div>
			</div>
	</div>

	<!-- Window-popup Create  quiz -->



<!-- Window-popup Edit course -->
<div class="modal fade" id="edit-course" tabindex="-1" role="dialog" aria-labelledby="edit-course" aria-hidden="true">
	<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Edit Course</h6>
			</div>

			<div class="modal-body">
				<form method="post" id="edit_course_form" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="control-label">Course title</label>
						<input class="form-control" placeholder="Course title"  type="text" name="title" value="{{$course->title}}" required>
					</div>

					<div class="form-group">
						<label class="control-label">Course description</label>
						<textarea class="form-control" placeholder="Course description"  type="text" name="description" required>{{$course->description}}</textarea>
					</div>

					<div class="form-group">
						<label class="control-label">Course Category</label>
						<select class="form-control category-select" name="category_id" required>
							@foreach ($categories as $category)
								<option value="{{$category->id}}" @if($course->category_id == $category->id) selected @endif>{{$category->title}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-label">Course Type</label>
						<select class="form-control" name="course_type_id" required>
							@foreach ($course_types as $course_type)
								<option value="{{$course_type->id}}" @if($course->course_type_id == $course_type->id) selected @endif>{{$course_type->type}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-label">Completion Criteria</label>
						<select class="form-control category-select" name="completion_criteria_id" required>
							@foreach ($completion_criterias as $completion_criteria)
								<option value="{{$completion_criteria->id}}" @if($course->completion_criteria_id == $completion_criteria->id) selected @endif>{{$completion_criteria->type}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label class="control-label">Course Langage</label>
						<select class="form-control" name="language" required>
							<option value="English"@if($course->language == 'English') selected @endif>English</option>
							<option value="Arabic"@if($course->language == 'Arabic') selected @endif>Arabic</option>
						</select>
					</div>

					<div class="form-group">
						<label class="control-label">Course Image</label>
						<img src="{{asset('') . $course->image}}" alt="nature" style="width: 100%;">
						<input class="form-control" placeholder="image" type="file" name="image" accept="image/*" >
					</div>

					<div class="form-group">
						<label class="control-label">Course Expiration Date</label>
						<input class="form-control" placeholder="image" type="date" name="expired_at" value="{{substr($course->expired_at,0,10)}}" required>
					</div>

					<button class="btn btn-blue btn-lg full-width">Edit Course</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('.category-select').select2();

        /*** Edit Course */
        $('#edit_course_form').on('submit', function(event){
            event.preventDefault();
            var formData = new FormData(document.querySelector('#edit_course_form'));
            formData.append('_method', 'PUT');

            $.ajax({
                url:"{{ route('en.coordinator.courses.update', [$course->slug]) }}",
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
        /*** Edit Course */

        /*** Delete Course */
        $('.delete-course').on('click', function(event){
            event.preventDefault();
            function deleteAjax(){
                $.ajax({
                    url:"{{ route('en.coordinator.courses.destroy', [$course->slug]) }}",
                    method:"POST",
                    data:{'_method' : 'DELETE'},
                    dataType:'JSON',
                    beforeSend: function(){
                        $(".overlay").toggleClass('hidden');
                    },
                    success:function(data)
                    {
                        swalNormal(data.swal);
                        $(".overlay").toggleClass('hidden');
                        window.location.replace(data.route);
                    }
                })
            }

            confirmDelete(deleteAjax);
        });
        /*** Delete Course */

        /*** Create Section */
        $('#create_section_form').on('submit', function(event){
            event.preventDefault();
            var formData = new FormData(document.querySelector('#create_section_form'));
            formData.append('course_id', '{{$course->id}}');
            $.ajax({
                url:"{{ route('en.coordinator.sections.store') }}",
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
                    $('#create-section').modal('hide');
                    $('.course-curriculum').html(data.curriculum);
                    swalNormal(data.swal);
                    $(".overlay").toggleClass('hidden');
                },
                error:function(data)
                {
                    sweetAlertErrorResponse(data);
                }
            })
        });
        /*** Create Section */

        /*** Delete Section */
        $(document).on('click', '.delete-section', function(event){
            event.preventDefault();
            var section_id = $( this ).data( "section-id" );
            var url = '{{ route("en.coordinator.sections.destroy", ":id") }}';
            url = url.replace(':id', section_id);

            function deleteAjax(){
                $.ajax({
                    url: url,
                    method:"POST",
                    data:{'_method' : 'DELETE'},
                    dataType:'JSON',
                    beforeSend: function(){
                        $(".overlay").toggleClass('hidden');
                    },
                    success:function(data)
                    {
                        swalNormal(data.swal);
                        $(".overlay").toggleClass('hidden');
                        $( '.section-content-' + data.section_id ).remove();
                    }
                })
            }

            confirmDelete(deleteAjax);
        });
        /*** Delete Section */

        /*** Edit Section */
        $(document).on('submit', '.edit_section_form', function(event){
            event.preventDefault();
            var section_id = $( this ).data( "section-id" );
            var url = '{{ route("en.coordinator.sections.update", ":id") }}';
            url = url.replace(':id', section_id);

            var formData = new FormData(document.querySelector( '#edit-section-form-' + section_id ));
            formData.append('_method', 'PUT');

            $.ajax({
                url:url,
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
                    $('#edit-section-1' + data.section_id).modal('hide');
                    /*
                    ** Clean defects of modal hide not working proberly
                    */
                    $(".modal-backdrop").remove();
                    $('body').removeClass('modal-open');
                    /******/
                    $('.course-curriculum').html(data.curriculum);
                    swalNormal(data.swal);
                    $(".overlay").toggleClass('hidden');
                },
                error:function(data)
                {
                    sweetAlertErrorResponse(data);
                }
            })

        });
        /*** Edit Section */

        /*** Create Lesson */
        $('.create_lesson_form').on('submit', function(event){
            event.preventDefault();
            var lesson_type_id = $( this ).data('lesson-type-id');
            var formData = new FormData(document.querySelector('#lesson-type-id-' + lesson_type_id));
            formData.append('lesson_type_id', lesson_type_id);

            $.ajax({
                url:"{{ route('en.coordinator.lessons.store') }}",
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
                    $('.course-curriculum').html(data.curriculum);
                    swalNormal(data.swal);
                    $(".overlay").toggleClass('hidden');
                },
                error:function(data)
                {
                    sweetAlertErrorResponse(data);
                }
            })
        });
        /*** Create Lesson */

        /*** Delete Lesson */
        $(document).on('click', '.delete-lesson', function(event){
            event.preventDefault();
            var lesson_id = $( this ).data( "lesson-id" );
            var url = '{{ route("en.coordinator.lessons.destroy", ":id") }}';
            url = url.replace(':id', lesson_id);

            function deleteAjax(){
                $.ajax({
                    url: url,
                    method:"POST",
                    data:{'_method' : 'DELETE'},
                    dataType:'JSON',
                    beforeSend: function(){
                        $(".overlay").toggleClass('hidden');
                    },
                    success:function(data)
                    {
                        $('.course-curriculum').html(data.curriculum);
                        $( '.lesson-content-' + data.lesson_id ).remove();
                        $(".overlay").toggleClass('hidden');
                        swalNormal(data.swal);
                    }
                })
            }

            confirmDelete(deleteAjax);
        });
        /*** Delete Lesson */

        /*** Edit Lesson */
        $(document).on('submit', '.edit_lesson_form', function(event){
            event.preventDefault();
            var lesson_id = $( this ).data( "lesson-id" );
            var url = '{{ route("en.coordinator.lessons.update", ":id") }}';
            url = url.replace(':id', lesson_id);

            var formData = new FormData(document.querySelector( '#edit-lesson-content-' + lesson_id ));
            formData.append('_method', 'PUT');

            $.ajax({
                url:url,
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
                    $('#edit-lesson-' + data.lesson_id).modal('hide');
                    /*
                    ** Clean defects of modal hide not working proberly
                    */
                    $(".modal-backdrop").remove();
                    $('body').removeClass('modal-open');
                    /******/
                    $('.course-curriculum').html(data.curriculum);
                    swalNormal(data.swal);
                    $(".overlay").toggleClass('hidden');
                    location.reload();
                },
                error:function(data)
                {
                    sweetAlertErrorResponse(data);
                }
            })

        });
        /*** Edit Lesson */

    });
</script>
@endsection
