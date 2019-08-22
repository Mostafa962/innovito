@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            Departments
            </h1>
            <ol class="breadcrumb">
            <li><a href="{{route('admin.home.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Departments</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
            | Your Page Content Here |
            -------------------------->
            <div class="col-md-12">
                <div class="box box-warning box-solid collapsed-box">
                    <div class="overlay hidden">
                            <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">Add new Department</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <form method="post" id="add_department_form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="box-body">

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="department title" name="title">
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- All departments -->
                <div class="box box-warning box-solid">
                    <div class="overlay hidden">
                            <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">All Departments</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody class="departments_body">
                                    @foreach ($departments as $department)
                                        <tr id="row{{$department->id}}">
                                            <td>{{$department->id}}</td>
                                            <td>{{$department->title}}</td>
                                            <td>
                                                <a  href="{{route('admin.departments.edit', [$department->id])}}" class="btn btn-primary" data-content="{{$department->id}}">
                                                    <i class="glyphicon glyphicon-edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger delete" data-content="{{$department->id}}">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </td>
                                        </tr>
                                        @php $counter++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
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
<script>
    $(document).ready(function(){

        var t = $('#example').DataTable({
            "order": [[ 0, "desc" ]]
        });
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#add_department_form').on('submit', function(department){
            event.preventDefault();
            $.ajax({
                url:"{{ route('admin.departments.store') }}",
                method:"POST",
                data:$("#add_department_form").serialize(),
                dataType:'JSON',
                beforeSend: function(){
                    $(".overlay").toggleClass('hidden');
                },
                success:function(data)
                {
                    if(data.errors == '')
                    {
                        alert(data.message);

                        var rowNode = t.row.add( [
                            data.department_id,
                            data.department_title,
                            '<a  href="' + data.department_link_edit +'" class="btn btn-primary" data-content="data.department_id"><i class="glyphicon glyphicon-edit"></i><span> Edit</span></a>',
                            '<button type="button" class="btn btn-danger delete" data-content="' + data.department_id + '"><i class="glyphicon glyphicon-trash"></i><span> Delete</span></button>'
                        ] ).draw().node();

                        $( rowNode )
                            .css( 'color', 'red' )
                            .attr('id', 'row' + data.department_id );
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

    $(document).ready(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#example').on('click', '.delete', function(){
            if(confirm('Are you sure you want to Delete ?'))
            {
                var content = $( this ).data( "content" );
                var url = '{{ route("admin.departments.destroy", ":content") }}';
                url = url.replace(':content', content);
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    beforeSend: function(){
                        $(".overlay").toggleClass('hidden');
                    },
                    success: function (data) {
                        var id= data.id;
                        $( '#row' + id ).html('');
                        $(".overlay").toggleClass('hidden');
                    }
                });
            }
        });
    });

</script>
@endsection
