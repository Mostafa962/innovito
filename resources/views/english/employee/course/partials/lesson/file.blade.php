<div class="ui-block">
    <div class="ui-block-title">
        <h6 class="title">useful link /ppt/pdf</h6>
    </div>
    <div class="ui-block-content">
        <div class="row">
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <ul class="widget w-personal-info item-block">
                    <li>
                        <span class="title" >{{$lesson->title}}</span>
                        <a href="{{asset('') . $lesson->content->localvideo_link}}" target="_blank">{{$lesson->content->video_filename}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
