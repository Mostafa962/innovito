<div class="form-group">
    <label for="exampleInputPassword1">{{ucfirst($title)}}</label><br>
    <div class="col-md-12">
        <div class="col-md-4">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default-{{$name}}">
                Choose {{$title}}
            </button>
        </div>
        <div class="col-md-8">
            <p class="{{$name}}_chosen"><a target='_blank' href='{{asset('')}}{{$current->$relation_name->link}}'>{{$current->$relation_name->original_name}}</a></p>
        </div>
    </div>
    <br>
    <!-- Add {{$title}} Modal -->
    <div class="modal fade" id="modal-default-{{$name}}">
        <div class="modal-dialog" style="width:80%">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Choose {{ucfirst($title)}}</h4>
            </div>
            <div class="modal-body">
                <select class="media_{{$name}}_select form-control col-md-12" name="{{$name}}">
                        <option value=""></option>
                        @foreach ($media as $one)
                            <option @if($current->$name == $one->id){{'selected'}} @endif data-img-label="<a target='_blank' href='{{asset('')}}{{$one->link}}'>{{$one->original_name}}</a>'" data-img-src="{{asset('')}}{{$one->link}}" data-img-class="custom-image" value="{{$one->id}}">{{$one->original_name}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>
