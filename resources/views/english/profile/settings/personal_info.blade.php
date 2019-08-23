@extends('english.layouts.master')

@section('page_title')
Your Account | Personal Information
@endsection

@section('content')
<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Your Account Dashboard</h1>
					<p>Welcome to your account dashboard! Here you’ll find everything you need to change your profile
	information, settings, read notifications and requests, view your latest messages, change your pasword and much
	more! Also you can create or manage your own favourite page, have fun!</p>
				</div>
			</div>
		</div>
	</div>
	<img class="img-bottom" src="{{asset('assets/')}}/img/account-bottom.png" alt="friends">
</div>

<!-- ... end Main Header Account -->


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">


					<!-- Personal Information Form  -->

					<form id="personal-info-form" method="POST">
						<div class="row">

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input class="form-control" placeholder="" type="text" name="first_name" value="{{Auth::user()->first_name}}">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Your Email</label>
									<input class="form-control" placeholder="" type="email" name="email" value="{{Auth::user()->email}}">
								</div>

								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Your Birthday</label>
									<input name="datetimepicker" value="{{Auth::user()->birthday}}" />
									<span class="input-group-addon">
                                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
                                    </span>
								</div>
							</div>

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input class="form-control" placeholder="" type="text" name="last_name" value="{{Auth::user()->last_name}}">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Your Website</label>
									<input class="form-control" placeholder="" type="text" name="website" value="{{Auth::user()->website}}">
								</div>


								<div class="form-group label-floating is-empty">
									<label class="control-label">Your Phone Number</label>
									<input class="form-control" placeholder="" name="phone" type="text" value="{{Auth::user()->phone}}">
								</div>
							</div>

							{{-- <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your Country</label>
									<select class="selectpicker form-control" name="country">
										<option value="egypt">Egypt</option>
										<option value="ksa">KSA</option>
									</select>
								</div>
							</div> --}}
							<!-- <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your State / Province</label>
									<select class="selectpicker form-control">
										<option value="CA">California</option>
										<option value="TE">Texas</option>
									</select>
								</div>
							</div> -->
							{{-- <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your City</label>
									<select class="selectpicker form-control" name="city">
										<option value="nasr">Nasr City</option>
										<option value="NY">Tahrir</option>
									</select>
								</div>
							</div> --}}
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Write a little description about you</label>
                                    <textarea class="form-control" placeholder="" name="little_description">{{Auth::user()->little_description}}</textarea>
								</div>

								{{-- <div class="form-group label-floating is-select">
									<label class="control-label">Your Gender</label>
									<select class="selectpicker form-control">
										<option value="MA">Male</option>
										<option value="FE">Female</option>
									</select>
								</div> --}}

								<!-- <div class="form-group label-floating is-empty">
									<label class="control-label">Religious Belifs</label>
									<input class="form-control" placeholder="" type="text">
								</div> -->
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Your Birthplace</label>
									<input class="form-control" placeholder="" name="birthplace" type="text" value="{{Auth::user()->birthplace}}">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Your Occupation</label>
									<input class="form-control" placeholder="" type="text" name="occupation" value="{{Auth::user()->occupation}}">
								</div>

								{{-- <div class="form-group label-floating is-select">
									<label class="control-label">Status</label>
									<select class="selectpicker form-control">
										<option value="MA">Married</option>
										<option value="FE">Not Married</option>
									</select>
								</div> --}}

								<!-- <div class="form-group label-floating">
									<label class="control-label">Political Incline</label>
									<input class="form-control" placeholder="" type="text" value="Democrat">
								</div> -->
							</div>
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Facebook Account</label>
                                <input class="form-control" type="text" name="facebook" value="{{Auth::user()->facebook}}">
									<i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Twitter Account</label>
									<input class="form-control" type="text" name="twitter" value="{{Auth::user()->twitter}}">
									<i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Your LinkedIn Account</label>
									<input class="form-control" type="text" name="linkedin" value="{{Auth::user()->linkedin}}">
									<i class="fa linkedin c-linked-in" aria-hidden="true"></i>
								</div>
								<!-- <div class="form-group with-icon label-floating">
									<label class="control-label">Your Dribbble Account</label>
									<input class="form-control" type="text" value="www.dribbble.com/thecowboydesigner">
									<i class="fab fa-dribbble c-dribbble" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Your Spotify Account</label>
									<input class="form-control" type="text">
									<i class="fab fa-spotify c-spotify" aria-hidden="true"></i>
								</div> -->
							</div>
							{{-- <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
							</div> --}}
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
							</div>

						</div>
					</form>

					<!-- ... end Personal Information Form  -->
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->

				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>

					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
									</a>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="#">Personal Information</a>
									</li>

									<li>
										<a href="{{route('en.profile.password.edit')}}">Change Password</a>
									</li>
									<!-- <li>
										<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
									</li> -->
									<li>
										<a href="{{route('en.profile.education.edit')}}">Education and Employement</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- ... end Your Profile  -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->

@endsection

@section('script')
<script>
    $('#personal-info-form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:"{{route('en.profile.personal_info.save')}}",
            method:"POST",
            data:$("#personal-info-form").serialize(),
            dataType:'JSON',
            beforeSend: function(){
                $(".overlay").toggleClass('hidden');
            },
            success:function(data)
            {
                Swal.fire({
                    title: data.title,
                    text: data.message,
                    type: data.type,
                    confirmButtonText: 'Ok'
                })
                $(".overlay").toggleClass('hidden');
            }
        })
    });

</script>
@endsection
