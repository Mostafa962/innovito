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
                                    <a class="lesson-id" data-lesson-id="{{$lesson->id}}"><li>{{$lesson->title}}</li></a>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-12  order-lg-1 order-md-12 header-h lesson-content">
            {!! $lesson_text !!}
        </div>

        @include('english.layouts.partials.overlay')

    </div>
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
                    $(' .lesson-content ').append(data.lesson);
                    $(".overlay").toggleClass('d-none');
                },
            })

        });
        /*** Filter Lessons */
    });

</script>
@endsection
