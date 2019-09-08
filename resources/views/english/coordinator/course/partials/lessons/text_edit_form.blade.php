<div class="modal fade" id="edit-lesson-{{$lesson->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-lesson-{{$lesson->id}}" aria-hidden="true">
    <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{asset('assets')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Edit Lesson | {{$lesson->title}}</h6>
            </div>

            <div class="modal-body">
                <form method="post" class="edit_lesson_form" data-lesson-id="{{$lesson->id}}" id="edit-lesson-content-{{$lesson->id}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group label-floating">
                        <label class="control-label">Lesson Title</label>
                        <input class="form-control" placeholder="Lesson Title" name="title" type="text" required value="{{$lesson->title}}">
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Lesson Description</label>
                        <textarea class="form-control" placeholder="Lesson Description" name="description" type="text" required>{{$lesson->description}}</textarea>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Lesson Section</label>
                        <select class="form-control category-select" name="section_id" required>
                            @foreach ($lesson->section->course->sections as $section)
                                <option value="{{$section->id}}" @if($lesson->section_id == $section->id)selected @endif>{{$section->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Lesson Order in Section</label>
                        <input class="form-control" placeholder="Lesson Order" type="number" name="order" min="1" required value="{{$lesson->order}}">
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Lesson Score When finished</label>
                        <input class="form-control" placeholder="Lesson Score" type="number" value="0" name="score" required value="{{$lesson->score}}">
                    </div>

                    <button class="btn btn-blue btn-lg full-width">Edit Lesson</button>
                </form>
            </div>
        </div>
    </div>
</div>

