@extends('layouts.app')
@section('title') Users @endsection
@section('styles') 
@endsection
@section('breadcrumb') 
<a class="breadcrumb-item" href="{{route('admin.home')}}">Home</a>
<span class="breadcrumb-item active">Users</span>
@endsection
@section('content') 
<div class="block-header block-header-default">
    <h3 class="block-title">Users</h3>
    <div class="block-options">
        <a  class="btn btn-success" role="button" href="{{route('admin.users.create')}}">Add User</a>
        
    </div>
</div>
<div class="block-content block-content-full" style="width: 100% !important">
    <table class="display" style="width:100%"  id="data-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>         
            <th>Last Login</th>            
            <th>Action</th>
        </tr>
    </thead>
</table>
</div>

@endsection
@section('script') 
<script>
    var table;
    var DeleteUrl = "{{route('admin.users.delete','tmp_ip')}}";
    var ActivateUrl = "{{route('admin.users.activate','tmp_ip')}}";
    $(document).ready(function() {
        table=$('#data-table').DataTable({
            processing: true,
            serverSide: true, 
            scrollX: true,
            stateSave: true,
            ajax: '{!! route('admin.users.index') !!}',
            columns: [
                { data: 'name', name: 'name', className: 'editable' },
                { data: 'email', name: 'email' },
                { data: 'last_login', name: 'last_login', "orderable": false},
                { 
                    orderable: false,
                    data: null,
                    render: function (data) {
                        DeleteTmpUrl = DeleteUrl.replace('tmp_ip', data['id']);
                        ActivateTmpUrl = ActivateUrl.replace('tmp_ip', data['id']);
                        let delTxt='Deactivate';
                        let delClass='btn-alt-danger';
                        let delUrl=DeleteTmpUrl;
                        if(data['deleted_at']){
                            delTxt = 'Activate';
                            delClass = 'btn-alt-success';
                            delUrl = ActivateTmpUrl;
                        }
                        return "<div style='display:flex'><a style='margin:2px' href='"+delUrl+"' class='btn "+delClass+"' role='button'>"+delTxt+"</a></div>";

                    },
                }
            ]
        });
    });
</script>
@endsection

