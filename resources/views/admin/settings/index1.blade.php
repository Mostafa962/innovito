@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            Settings
            </h1>
            <ol class="breadcrumb">
            <li><a href="{{route('admin.home.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Settings</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
            | Your Page Content Here |
            -------------------------->
            <div class="col-md-12">
                <div class="box box-warning box-solid">
                    <div class="overlay hidden">
                            <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$current->website_title}}</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <form method="post" id="update_setting_form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Website Title" name="website_title" value="{{$current->website_title}}">
                                    </div>

                                    @include('admin.layouts.partials.media_modal', ['title' => 'logo', 'relation_name' => 'logo', 'name' => 'logo_id'])

                                    @include('admin.layouts.partials.media_modal', ['title' => 'fav', 'relation_name' => 'fav', 'name' => 'fav_id'])

                                    @include('admin.layouts.partials.media_modal', ['title' => 'Employee Image', 'relation_name' => 'employeeImage', 'name' => 'default_image_employee_id'])

                                    @include('admin.layouts.partials.media_modal', ['title' => 'Coordinator Image', 'relation_name' => 'coordinatorImage', 'name' => 'default_image_coordinator_id'])

                                    @include('admin.layouts.partials.media_modal', ['title' => 'Employee Header', 'relation_name' => 'employeeHeader', 'name' => 'default_header_employee_id'])

                                    @include('admin.layouts.partials.media_modal', ['title' => 'Coordinator Header', 'relation_name' => 'coordinatorHeader', 'name' => 'default_header_coordinator_id'])

                                </div>
                                <!-- /.box-body -->
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
@section('js')
@include('admin.layouts.partials.media_modal_script', ['name' => 'logo_id'])
@include('admin.layouts.partials.media_modal_script', ['name' => 'fav_id'])
@include('admin.layouts.partials.media_modal_script', ['name' => 'default_image_employee_id'])
@include('admin.layouts.partials.media_modal_script', ['name' => 'default_image_coordinator_id'])
@include('admin.layouts.partials.media_modal_script', ['name' => 'default_header_employee_id'])
@include('admin.layouts.partials.media_modal_script', ['name' => 'default_header_coordinator_id'])
<script>
    $(document).ready(function(){

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#update_setting_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"{{route('admin.settings.update', [$current->id])}}",
                method:"PUT",
                data:$("#update_setting_form").serialize(),
                dataType:'JSON',
                beforeSend: function(){
                    $(".overlay").toggleClass('hidden');
                },
                success:function(data)
                {
                    if(data.errors == '')
                    {
                        alert(data.message);
                    }
                    else{
                        var errors_message = '';
                        $.each(data.errors, function( index, value ) {
                            errors_message += value + '  ......  ';
                        });
                            alert( errors_message );
                    }
                    $(".overlay").toggleClass('hidden');
                }
            })
        });
    });

</script>
<style>
    li.custom-image
    {
        width:18.5%;
    }
    img.custom-image
    {
        height: 200px
    }
    span.select2
    {
        width: 100% !important;
    }
</style>
@endsection
