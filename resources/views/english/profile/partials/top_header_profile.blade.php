<!-- Top Header-Profile -->

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="top-header">
                    <div class="top-header-thumb">
                        <img id="top-header-picture" src="{{asset('') . Auth::user()->header_image}}" alt="nature">
                    </div>
                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="{{route('en.profile.index')}}" class="active">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="{{route('en.profile.about')}}">About</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                            <a href="06-ProfilePage.html">Friends</a>
                                    </li>
                                    <li>
                                        <div class="more">
                                            <svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                            <ul class="more-dropdown more-with-triangle">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#update-profile-photo">Update Profile Photo</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('en.profile.personal_info')}}">Account Settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="top-header-author">
                        <a href="#" class="author-thumb">
                            <img id="top-header-profile-picture" src="{{asset('') . Auth::user()->image}}" alt="author">
                        </a>
                        <div class="author-content">
                            <a href="#" class="h4 author-name">{{Auth::user()->name}}</a>
                            {{-- <div class="country">San Francisco, CA</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Top Header-Profile -->

<!-- Window-popup Update Profile Photo -->

<div class="modal fade" id="update-profile-photo" tabindex="-1" role="dialog" aria-labelledby="update-profile-photo" aria-hidden="true">
    <div class="modal-dialog window-popup update-header-photo" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Update Profile Photo</h6>
            </div>

            <div class="modal-body ">
                <form id="upload-profile-photo" enctype="multipart/form-data" style="display:none">
                    @csrf
                    <input id="profile-photo-input" type="file" name="profile_picture" style="display:none"/>
                </form>
                <a href="#" class="upload-photo-item">
                <svg class="olymp-computer-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

                <h6>Upload Photo</h6>
                <span>Browse your computer.</span>
            </a>


            </div>
        </div>
    </div>
</div>


<!-- ... end Window-popup Update Profile Photo -->

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
    <div class="modal-dialog window-popup update-header-photo" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Update Header Photo</h6>
            </div>

            <div class="modal-body ">
                <form id="upload-header-photo" enctype="multipart/form-data" style="display:none">
                    @csrf
                    <input id="header-photo-input" type="file" name="header_picture" style="display:none"/>
                </form>
                <a href="#" class="upload-header-item">
                <svg class="olymp-computer-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

                <h6>Upload Photo</h6>
                <span>Browse your computer.</span>
            </a>


            </div>
        </div>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
    <div class="modal-dialog window-popup choose-from-my-photo" role="document">

        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="modal-body">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo1.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo2.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo3.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo4.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo5.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo6.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo7.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo8.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="{{asset('assets/')}}/img/choose-photo9.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{asset('assets/')}}/img/choose-photo10.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">South America Vacations</a>
                                    <span>Last Added: 2 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{asset('assets/')}}/img/choose-photo11.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Photoshoot Summer 2016</a>
                                    <span>Last Added: 5 weeks ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{asset('assets/')}}/img/choose-photo12.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Street Food</a>
                                    <span>Last Added: 6 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{asset('assets/')}}/img/choose-photo13.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Graffity & Street Art</a>
                                    <span>Last Added: 16 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{asset('assets/')}}/img/choose-photo14.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Landscapes</a>
                                    <span>Last Added: 13 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="{{asset('assets/')}}/img/choose-photo15.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">The Majestic Canyon</a>
                                    <span>Last Added: 57 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


@section('script')
<script>
    $(".upload-photo-item").on('click', function(e){
        e.preventDefault();
        $("#profile-photo-input:hidden").trigger('click');
    });

    $(".upload-header-item").on('click', function(e){
        e.preventDefault();
        $("#header-photo-input:hidden").trigger('click');
    });

    // $("#profile-photo-input").change(function(){
        // $("#upload-profile-photo").trigger('submit');
    // });

    // $('#upload-profile-photo').on('submit', function(event){
    //     console.log('hihi');
    //     event.preventDefault();
    //     var formData = new FormData($(this)[0]);
    //     $.ajax({
    //         url:"{{route('en.profile.uploadProfileImage')}}",
    //         method:"POST",
    //         processData: false,
    //         contentType: false,
    //         data: formData,
    //         dataType:'JSON',
    //         beforeSend: function(){
    //             $(".overlay").toggleClass('hidden');
    //         },
    //         success:function(data)
    //         {
    //             // if(data.status)
    //             // {
    //             //     window.location.href = data.route;
    //             // }
    //             // else{
    //             //     Swal.fire({
    //             //         title: 'Error',
    //             //         text: data.message,
    //             //         type: 'error',
    //             //         confirmButtonText: 'Ok'
    //             //     })
    //             // }
    //             $(".overlay").toggleClass('hidden');
    //         }
    //     });
    // });

/* Profile Image Upload */
function beforesendUploadProfile()
{
    $(".overlay").toggleClass('hidden');
}
function successUploadProfile(data)
{
    Swal.fire({
        title: data.title,
        text: data.message,
        type: data.type,
        confirmButtonText: 'Ok'
    })
    if(data.status)
    {
        $("#update-profile-photo").modal('hide');
        $('#top-header-profile-picture').attr('src', data.image);
    }
    $(".overlay").toggleClass('hidden');

}
var profile_selector = "#profile-photo-input", profile_image = "profile_picture", profile_route = "{{route('en.profile.uploadProfileImage')}}";
ajaxUploadFileFromInput(profile_selector, profile_image, profile_route, beforesendUploadProfile, successUploadProfile);
/* Profile Image Upload */

/* Header Image Upload */
var header_selector = "#header-photo-input", header_image = "header_picture", header_route = "{{route('en.profile.uploadProfileHeaderImage')}}";
function beforesendUploadHeader()
{
    $(".overlay").toggleClass('hidden');
}
function successUploadHeader(headerData)
{
    Swal.fire({
        title: headerData.title,
        text: headerData.message,
        type: headerData.type,
        confirmButtonText: 'Ok'
    })
    if(headerData.status)
    {
        $("#update-header-photo").modal('hide');
        $('#top-header-picture').attr('src', headerData.image);
    }
    $(".overlay").toggleClass('hidden');

}
ajaxUploadFileFromInput(header_selector, header_image, header_route, beforesendUploadHeader, successUploadHeader);
/* Header Image Upload */

</script>
@endsection
