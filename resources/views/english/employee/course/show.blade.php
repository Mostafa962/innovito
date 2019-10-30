@extends('english.layouts.master')

@section('page_title')
{{$course->title}}
@endsection

@section('content')
<!-- Main Header Groups -->
<div class="row course-header" >
    <div class="col col-lg-12 m-auto col-md-12 col-sm-12 col-12">
        <div class="main-header-content text-left">
            <!-- <h4 class="title">{{$course->title}}</h4> -->
            <h1 class="title">Introduction To Python Programming</h1>
            <h4> A Quick and Easy Intro into Python Programming </h4>
            <div class="rates">
                <ul class="stars">  
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                </ul>
                <p>4.4 (30,495 ratings)</p>
                <p>342,337 Employees enrolled</p>
            </div>
            <div class="rates">
                <p>Created by Avinash Jain</p>
                <p>Last updated 7/2018</p>
            </div>
           

        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-top">
        
        <div class="col-lg-4 col-md-12 order-lg-12 order-md-1 stick">
                <div class="ui-block ">
                        <!-- W-Action -->
                        <div class="widget w-action">
                            <img src="{{asset('') . $course->image}}" alt="{{$course->title}}">
                            <div class="content">
                               
                                {{-- <span>THE BEST SOCIAL NETWORK THEME IS HERE!</span> --}}
                                <a href="{{route('en.employee.courses.content', [$course->slug])}}" class="btn btn-bg-secondary btn-md">Enroll Now!</a>
                            </div>
                        </div>
                        <!-- ... end W-Action -->
                    </div>
                    <div class="ui-block">
                        <ul class="clear-list block-list content-block">
                            <li data-field="length">
                                <span class="block-list__label">
                                    <span aria-hidden="true" class="fas fa-user  fa-lg"></span>
                                    Employees:
                                </span>
                                <span class="block-list__desc">{{$course->users()->count()}}</span>
                            </li>
                            <li data-field="length">
                                <span class="block-list__label">
                                <span aria-hidden="true" class="far fa-clock  fa-lg"></span>
                                Section:
                                </span>
                                <span class="block-list__desc">{{$course->sections()->count()}} sections</span>
                            </li>
                            <li data-field="school">
                                <span class="block-list__label">
                                <span aria-hidden="true" class="fa fa-university fa-lg"></span>
                                Type:
                                </span>
                                <span class="block-list__desc">
                                    <!-- <a href="">Self Paced</a> -->
                                    <span class="block-list__desc">{{$course->type->type}}</span>
                                </span>
                            </li>
                            <li data-field="subject">
                                <span class="block-list__label">
                                    <span aria-hidden="true" class="fa fa-graduation-cap fa-lg"></span>
                                    Category:
                                </span>
                                <span class="block-list__desc">
                                    <span class="uppercase">  {{$course->category->title}}</span>
                                </span>
                            </li>
                            {{-- <li data-field="subject">
                                <span class="block-list__label">
                                    <span aria-hidden="true" class="fas fa-map-marker-alt fa-lg"></span>
                                    Location:
                                </span>
                                <span class="block-list__desc">
                                    <span class="uppercase">shobra</span>
                                </span>
                            </li> --}}
                            <li data-field="language">
                                <span class="block-list__label">
                                    <span aria-hidden="true" class="far fa-comment fa-lg"></span>
                                    Language:
                                </span>
                                <span class="block-list__desc">
                                    <span lang="en">{{$course->language}}</span>
                                </span>
                            </li>
                        </ul>
                    </div>

        </div>
        <div class="col-lg-8 col-md-12  order-lg-1 order-md-12 header-h">
                    <div class="ui-block">
                            <div class="ui-block-title">
                                <h6 class="title">About</h6>
                            </div>
                            <div class="ui-block-content">
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                            <p class="text">{!!$course->description!!}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <div class="ui-block">
                            <div class="ui-block-title">
                                <h6 class="title">Curriculum For This Course</h6>
                            </div>
                            <div class="ui-block-content cumm">
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">

                                        @foreach ($course->sections as $section)
                                            <ul class="clear-list block-list content-block content-list ">
                                                <li class="title-c">
                                                
                                                    <span class="block-list__label">
                                                    <i class="fas fa-plus  colaps-icon" ></i>
                                                        {{$section->title}}
                                                    </span>
                                                    <span class="block-list__desc text-right">
                                                        {{$section->lessons()->count()}} Lessons
                                                    </span>
                                                </li>
                                                @foreach ($section->lessons as $lesson)
<<<<<<< HEAD
                                                    <li >
                                                        <span class="block-list__label">
                                                            <i class="far fa-play-circle fa-lg"></i>
                                                            {{$lesson->title}}
                                                        </span>
                                                        <span class="block-list__desc text-right">{{$lesson->content->video_duration}}</span>
                                                    </li>
=======
                                                    @if($lesson->lesson_type_id == 8)
                                                        <li>
                                                            <span class="block-list__label">
                                                                <i class="far fa-question-circle fa-lg"></i>
                                                                {{$lesson->title}}
                                                            </span>
                                                            <span class="block-list__desc text-right">{{$lesson->quiz->time_limit}}</span>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <span class="block-list__label">
                                                                <i class="far fa-play-circle fa-lg"></i>
                                                                {{$lesson->title}}
                                                            </span>
                                                            <span class="block-list__desc text-right">{{$lesson->content->video_duration}}</span>
                                                        </li>
                                                    @endif
>>>>>>> 12c0e8d92b9e2dd6994b0b52827478839499ca90
                                                @endforeach
                                            </ul>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="ui-block">
                        <div class="ui-block-title">
                            <h6 class="title">About The Instructor</h6>
                        </div>
                        <div class="ui-block-content">
                            <div class="row">
                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                        <ul class="widget w-personal-info item-block">
                                            <li>
                                                <span class="title" >{{$course->coordinator->name}}</span>
                                                <br>
                                                <br>
                                                <p class="text">{{ strip_tags($course->coordinator->bio)}}</p>

                                            </li>
                                        </ul>
                                </div>

                            </div>
                        </div>
                    </div>
        </div>

    </div>
</div>

@endsection
