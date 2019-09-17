@extends('english.layouts.master')

@section('page_title')
{{$course->title}}
@endsection

@section('content')
<!-- Main Header Groups -->

<div class="container">
    <div class="row margin-top">
        <div class="col-lg-4 col-md-12 order-lg-12 order-md-1">
            <div class="ui-block map ">
                <div id="accordion">
                    @foreach ($course->sections as $section)
                        <h3 class="accordion-header">{{$section->title}}</h3>
                        <div>
                            <ul class="lessons">
                                @foreach ($section->lessons as $lesson)
                                    @if ($course->getLastSeenLessonId() == $lesson->id)
                                        <a class="lesson-id now" data-lesson-id="{{$lesson->id}}" onclick="event.preventDefault()"><li><i class="fas fa-play-circle"></i>{{$lesson->title}}</li></a>
                                    @elseif ($lesson->status)
                                        <a class="lesson-id done" data-lesson-id="{{$lesson->id}}"><li><i class="fas fa-check-circle"></i>{{$lesson->title}}</li></a>
                                    @else
                                        <a class="lesson-id locked" data-lesson-id="{{$lesson->id}}" onclick="event.preventDefault()"><li><i class="fas fa-lock"></i>{{$lesson->title}}</li></a>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-12  order-lg-1 order-md-12 header-h lesson-content">
            {!! $lesson_text !!}
            <div class="lesson-footer ">
                <button class="btn btn-primary btn-md-2 navsh "><i class="fas fa-arrow-left"></i> prev</button>

                <button class="btn btn-primary btn-md-2 lesson-check"><i class="fas fa-check-circle"></i> done</button>

                <button class="btn btn-primary btn-md-2 navsh nomore">next <i class="fas fa-arrow-right"></i></button>
            </div>

        </div>



    </div>
    @include('english.layouts.partials.overlay')
</div>
<!-- ... end Main Content Groups -->

@endsection
@section('script')
<script>
    $(document).ready(function() {
        const player = new Plyr('#player');
        /*** Filter Lessons */
        $(document).on('click', '.lesson-id', function () {
            var lesson_id = $( this ).data('lesson-id');
            $.ajax({
                url:"{{ route('en.employee.lessons.filter') }}",
                method:"POST",
                data:{'lesson_id': lesson_id},
                dataType:'JSON',
                beforeSend: function(){
                    $(".overlay").toggleClass('d-none');
                },
                success:function(data)
                {
                    $( '.ui-block' ).not('.map').remove();
                    $(' .lesson-content ').prepend(data.lesson);
                    $(".overlay").toggleClass('d-none');
                },
            });
        });
        /*** Filter Lessons */

        /*** Make Lesson Done */
        $(document).on('click', '.lesson-check', function () {
            var lesson_id = $(' .now ').data('lesson-id');

            $.ajax({
                url:"{{ route('en.employee.lessons.check') }}",
                method:"POST",
                data:{'lesson_id': lesson_id},
                dataType:'JSON',
                beforeSend: function(){
                    $(".overlay").toggleClass('d-none');
                },
                success:function(data)
                {
                    $( '.ui-block' ).not( '.map' ).remove();
                    $(' .lesson-content ').prepend(data.lesson);
                    $(".overlay").toggleClass('d-none');
                },
            });
        });
        /*** Make Lesson Done */
    });

</script>
@endsection
