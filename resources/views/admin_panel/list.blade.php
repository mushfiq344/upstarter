@extends('admin_panel.layouts.layout_for_list') @section('header') {{--datatables--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection @section('content')
<div class="container">
    <h2 class="text-center">{{str_replace("_"," ",ucfirst($type))}}</h2>
    @include('admin_panel.forms.upload.partials.alert_message')
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                @include('admin_panel.layouts.list.coulmn_name')
            </tr>
        </thead>
        <tbody>
            @foreach($objects as $object)
            <tr id="{{'row_'.$object->id}}">

                @if($type=='opportunity_type')
                <td>{{$object->type}}</td>
                @endif @if($type=='region')
                <td>{{$object->type}}</td>
                @endif @if($type=='degree_type')
                <td>{{$object->type}}</td>
                @endif @if($type=='opportunity')
                <td>{{$object->title}}</td>
                @endif

                <!-- common columns for all -->
                <td>{{$object->created_at}}</td>
                <td>
                    @include('admin_panel.layouts.list.action_column')
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                @include('admin_panel.layouts.list.coulmn_name')
            </tr>
        </tfoot>
    </table>
</div>
@endsection @section('footer')
<script>
    function delete_object(type, id) {

        $.ajax({
            data: {
                type: type,
                id: id
            },
            type: "GET",
            url: "{{route('delete_object')}}",
            cache: false,
            success: function(resp) {
                document.getElementById("row_" + id).remove();
                console.log(resp);
            }
        });

    }
</script>
@endsection