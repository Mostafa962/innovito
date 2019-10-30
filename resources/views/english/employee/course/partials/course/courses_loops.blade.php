@foreach ($courses as $course)
<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 course-container">
    <div class="ui-block" data-mh="friend-groups-item">
        <!-- Friend Item -->
        <div class="friend-item friend-groups">
            <div class="friend-header-thumb">
                <img src="{{asset('') . $course->image}}" alt="Course-Image">
            </div>
            <div class="friend-item-content">
                <div class="friend-avatar">
                    <div class="author-content">
                        <a href="{{route('en.employee.courses.show', [$course->slug])}}" class="h5 author-name">{{$course->title}}</a>
                        <br>
                        <br>
                        <div class="country">{{$course->description}}</div>
                    </div>
                </div>
                <a href="{{route('en.employee.courses.show', [$course->slug])}}"  class="btn btn-blue btn-md-2">Join<div class="ripple-container"></div></a>
            </div>
        </div>
        <!-- ... end Friend Item -->
    </div>
    
</div>
@endforeach
