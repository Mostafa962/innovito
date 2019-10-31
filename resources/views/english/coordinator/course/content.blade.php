@extends('english.layouts.master')

@section('page_title')
My Courses
@endsection

@section('content')
<!-- Main Header Groups -->

<!-- Your Account Personal Information -->




<div id="course-panel" class="container">
    <div id="tabs">
	    <div class="row">
          <div class="col col-xl-3  col-lg-3  col-md-12  col-sm-12 col-12">
			<div class="ui-block">

				<!-- Your Profile  -->

				<div class="your-profile">
					<div class="ui-block-title ">
						<h6 class="title">Your Course</h6>
					</div>
                    <ul>
                        <li><a href="#tabs-1">course info</a></li>
                        <li><a href="#tabs-2">plan you content</a></li>
                        <li><a href="#tabs-3">add some learners</a></li>
					</ul>
					<div class="ui-block-title ">
						<button class="btn btn-primary  full-width">submit</button>
					</div>
					
				</div>

				<!-- ... end Your Profile  -->

			</div>
		</div>
		<div class="col col-xl-9 col-lg-9 col-md-12  col-sm-12 col-12">     
			<div id="tabs-1" class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">course Information</h6>
				</div>
				<div class="ui-block-content">


					<!-- Personal Information Form  -->

					<form id="personal-info-form" method="POST">
						<div class="row">

							<div class="col  col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Course title</label>
									<input class="form-control" placeholder="" type="text" name="first_name" value="{{Auth::user()->first_name}}">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Write a little description about you</label>
                                    <textarea class="form-control" placeholder="" name="little_description">{{Auth::user()->little_description}}</textarea>
								</div>


								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Course Expiration Date</label>
									<input name="datetimepicker" value="{{Auth::user()->birthday}}" />
									<span class="input-group-addon">
                                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
                                    </span>
								</div>
						

								<div class="form-group label-floating">
									<label class="control-label">Course Image</label>
									<input class="form-control" placeholder="image" type="file" name="image" accept="image/*" required>
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Course Category</label>
									<select class="form-control category-select" name="category_id" required>
									
											<option value="">1231</option>
									
									</select>
								</div>
								<div class="form-group label-floating">
                                <label class="control-label">Completion Criteria</label>
                                <select class="form-control category-select" name="completion_criteria_id" required>
                                  
                                    <option value="">2519</option>
                               
                                </select>
                            </div>
						
						
							</div>
						</div>
					</form>

					<!-- ... end Personal Information Form  -->
				</div>
			</div>
			<div id="tabs-2" class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Course Content</h6>
				</div>
				<div class="ui-block-content">


					
				</div>
			</div>
			<div id="tabs-3" class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Add learners</h6>
				</div>
				<div class="ui-block-content">
					<div class="form-group label-floating is-select">
                               
                                <label class="control-label">Add Employees</label>
                                <select class="selectpicker form-control  show-tick" multiple data-max-options="10" data-live-search="true" name="employees[]" multiple>
                                
                                        <option value="" title="" data-content='<div class="inline-items">
                                            <div class="author-thumb">
                                                <img src=""  lt="employee" style="width:20px; height:20px">
                                            </div>
                                                <div class="h6 author-title">fareed</div>

                                            </div>'>
                                        </option>
                                 
                                </select>
                            </div>

					
				</div>
			</div>
		</div>

        </div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->



<a class="back-to-top" href="#">
	<img src="{{asset('assets')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

	

@endsection

@section('script')
<script>
    $(document).ready(function() {
        
        
     
    });
</script>
@endsection
