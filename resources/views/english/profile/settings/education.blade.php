@extends('english.layouts.master')

@section('page_title')
Your Account | Education
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
    <img class="img-bottom" src="img/account-bottom.png" alt="friends">
</div>

<!-- ... end Main Header Account -->

<!-- Your Account Personal Information -->

<div class="container">
    <div class="row">
        <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Your Education History</h6>
                </div>
                <div class="ui-block-content">


                    <!-- Education History Form -->

                    <form>
                        <div class="row">

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title or Place</label>
                                    <input class="form-control" placeholder="" type="text" value="The New College of Design">
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Period of Time</label>
                                    <input class="form-control" placeholder="" type="text" value="2001 - 2006">
                                </div>
                            </div>

                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" placeholder=""  >Bachelor of Interactive Design in the New College. It was a five years intensive career. Average: A+
                                                    </textarea>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title or Place</label>
                                    <input class="form-control" placeholder="" type="text" value="Rembrandt Institute">
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Period of Time</label>
                                    <input class="form-control" placeholder="" type="text" value="2008">
                                </div>
                            </div>

                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" placeholder=""  >Five months Digital Illustration course. Professor: Leonardo Stagg.
                                                    </textarea>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Title or Place</label>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Period of Time</label>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>

                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" placeholder=""  >
                                                    </textarea>
                                </div>

                                <a href="#" class="add-field">
                                    <svg class="olymp-plus-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                                    <span>Add Education Field</span>
                                </a>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button class="btn btn-secondary btn-lg full-width">Cancel</button>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button class="btn btn-primary btn-lg full-width">Save all Changes</button>
                            </div>
                        </div>
                    </form>

                    <!-- ... end Education History Form -->
                </div>
            </div>
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Your Employement History</h6>
                </div>
                <div class="ui-block-content">


                    <!-- Employement History Form -->

                    <form>
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title or Place</label>
                                    <input class="form-control" placeholder="" type="text" value="Digital Design Intern">
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Period of Time</label>
                                    <input class="form-control" placeholder="" type="text" value="2006 - 2008">
                                </div>
                            </div>

                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" placeholder=""  >Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.
                                                    </textarea>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title or Place</label>
                                    <input class="form-control" placeholder="" type="text" value="UI/UX Designer">
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Period of Time</label>
                                    <input class="form-control" placeholder="" type="text" value="2008 - 2013">
                                </div>
                            </div>

                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" placeholder=""  >UI/UX Designer for the “Daydreams” agency.
                                                    </textarea>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Title or Place</label>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Period of Time</label>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                            </div>

                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" placeholder=""  >
                                                    </textarea>
                                </div>

                                <a href="#" class="add-field">
                                    <svg class="olymp-plus-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                                    <span>Add Education Field</span>
                                </a>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button class="btn btn-secondary btn-lg full-width">Cancel</button>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button class="btn btn-primary btn-lg full-width">Save all Changes</button>
                            </div>
                        </div>
                    </form>

                    <!-- ... end Employement History Form -->
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
                                        <svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                                    </a>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <ul class="your-profile-menu">
                                    <li>
                                        <a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
                                    </li>

                                    <li>
                                        <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                                    </li>
                                    <!-- <li>
                                        <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
                                    </li> -->
                                    <li>
                                        <a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
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

@endsection
