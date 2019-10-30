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
					<h1>Courses Administration</h1>
					<p>
                        Welcome to your friends groups! Do you wanna know what your close friends have been up to? Groups
                        will let you easily manage your friends and put the into categories so when you enter you’ll only
                        see a newsfeed of those friends that you placed inside the group. Just click on the plus button below and start now!
                    </p>
				</div>
			</div>
		</div>
	</div>

	<img class="{{asset('assets')}}/img-bottom" src="{{asset('assets')}}/img/group-bottom.png" alt="friends">
</div>

<!-- ... end Main Header Groups -->

<!-- Main Content Groups -->

<div class="container">
	<div class="row page-container">
		<div class="col-12 ">
			<div class="filters row">
				<form action="#">
                    <fieldset>
                        <label>Category:</label>
                        <select class="category-select" name="category_filter">
                            <option value="all">All</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Sort By:</label>
                        <select class="category-select" name="sort_filter">
                            <option value = "ASC">A -> Z</option>
                            <option value = "DESC">Z -> A</option>
                        </select>
                    </fieldset>
                </form>
			</div>
		</div>

        @foreach (Auth::user()->enrolledCourses as $course)
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 course-container">
            
                <div class="ui-block" data-mh="friend-groups-item">
                    <!-- Friend Item -->
                    <div class="friend-item friend-groups courses-item">
                        <div class="friend-header-thumb" style="background:url({{asset('') . $course->image}}) center center no-repeat;">
                            <!-- <img src="{{asset('') . $course->image}}" alt="Course-Image"> -->
                        </div>
                        <div class="friend-item-content">
                            <div class="friend-avatar">
                                <div class="author-content">
                                    <a href="{{route('en.employee.courses.show', [$course->slug])}}" class="h5 author-name">{{$course->title}}</a>
                                    <!-- <br>
                                    <br> -->
                                    <!-- <div class="country">{{$course->description}}</div> -->
                                </div>
                            </div>
                            <a href="{{route('en.employee.courses.show', [$course->slug])}}" data-target="{{ $course->id }}" class="btn btn-blue btn-md-2"><span class="btn-txt">Join</span><div class="ripple-container"></div></a>
                        </div>
                    </div>
                    <!-- ... end Friend Item -->
                </div>
            </div>
        @endforeach

        <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 course-container">
            
                <div class="ui-block" data-mh="friend-groups-item">
                    <!-- Friend Item -->
                    <div class="friend-item friend-groups courses-item">
                        <div class="friend-header-thumb" style="background:url({{asset('') . $course->image}}) center center no-repeat;">
                            <!-- <img src="{{asset('') . $course->image}}" alt="Course-Image"> -->
                        </div>
                        <div class="friend-item-content">
                            <div class="friend-avatar">
                                <div class="author-content">
                                    <a href="{{route('en.employee.courses.show', [$course->slug])}}" class="h5 author-name">{{$course->title}}</a>
                                    <!-- <br>
                                    <br> -->
                                    <!-- <div class="country">{{$course->description}}</div> -->
                                </div>
                            </div>
                            <a href="{{route('en.employee.courses.show', [$course->slug])}}" data-target="{{ $course->id }}" class="btn btn-blue btn-md-2"><span class="btn-txt">Join</span><div class="ripple-container"></div></a>
                        </div>
                    </div>
                    <!-- ... end Friend Item -->
                </div>
            </div>
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 course-container">
            
                <div class="ui-block" data-mh="friend-groups-item">
                    <!-- Friend Item -->
                    <div class="friend-item friend-groups courses-item">
                        <div class="friend-header-thumb" style="background:url({{asset('') . $course->image}}) center center no-repeat;">
                            <!-- <img src="{{asset('') . $course->image}}" alt="Course-Image"> -->
                        </div>
                        <div class="friend-item-content">
                            <div class="friend-avatar">
                                <div class="author-content">
                                    <a href="{{route('en.employee.courses.show', [$course->slug])}}" class="h5 author-name">{{$course->title}}</a>
                                    <!-- <br>
                                    <br> -->
                                    <!-- <div class="country">{{$course->description}}</div> -->
                                </div>
                            </div>
                            <a href="{{route('en.employee.courses.show', [$course->slug])}}" data-target="{{ $course->id }}" class="btn btn-blue presrnt btn-md-2"><span class="btn-txt">50%</span><div class="ripple-container"></div></a>
                        </div>
                    </div>
                    <!-- ... end Friend Item -->
                </div>
            </div>
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 course-container">
            
                <div class="ui-block" data-mh="friend-groups-item">
                    <!-- Friend Item -->
                    <div class="friend-item friend-groups courses-item">
                        <div class="friend-header-thumb" style="background:url({{asset('') . $course->image}}) center center no-repeat;">
                            <!-- <img src="{{asset('') . $course->image}}" alt="Course-Image"> -->
                        </div>
                        <div class="friend-item-content">
                            <div class="friend-avatar">
                                <div class="author-content">
                                    <a href="{{route('en.employee.courses.show', [$course->slug])}}" class="h5 author-name">{{$course->title}}</a>
                                    <!-- <br>
                                    <br> -->
                                    <!-- <div class="country">{{$course->description}}</div> -->
                                </div>
                            </div>
                            <a href="{{route('en.employee.courses.show', [$course->slug])}}" data-target="{{ $course->id }}" class="btn btn-blue completed btn-md-2"><span class="btn-txt">completed</span><div class="ripple-container"></div></a>
                        </div>
                    </div>
                    <!-- ... end Friend Item -->
                </div>
            </div>

        @include('english.layouts.partials.overlay')
	</div>
</div>

<!-- ... end Main Content Groups -->


<a class="back-to-top" href="#">
	<img src="{{asset('assets')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>


			</div>
	</div>


@endsection

@section('script')
<script>
    $(document).ready(function() {

        /*** Filter Courses */
        $(' .page-container ').on('change', 'select[name="category_filter"], select[name="sort_filter"]', function () {
            var category_id = $('select[name="category_filter"]').val();
            var order_type  = $('select[name="sort_filter"]').val();
            $.ajax({
                url:"{{ route('en.employee.courses.filter') }}",
                method:"POST",
                data:{'category_id': category_id, 'order_type': order_type},
                dataType:'JSON',
                beforeSend: function(){
                    $(".overlay").toggleClass('d-none');
                },
                success:function(data)
                {
                    $( '.course-container' ).hide(); //***** Need FIX ******//
                    $(' .page-container ').append(data.courses);
                    $(".overlay").toggleClass('d-none');
                },
            })

        });
        /*** Filter Courses */
    });
</script>

 <script>

$(document).ready(function() {





    var course_id = $(".btn-blue ").data("target");


    

$.ajax({

url : "{{ url('/button/') }}" ,
type: "get" ,
success: function(res){


console.log(res);

$('.btn-blue ').append('<style>.courses-item .btn-blue:before{width:' + res + '% !important;}</style>');
}
});
}); 

</script> 
@endsection
