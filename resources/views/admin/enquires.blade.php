@extends('layouts.app')
@section('title') Dashboard @endsection
@section('styles') 
<style>
    .np-month-sm-brand{
        display: none;
    }
</style>
@endsection
@section('breadcrumb') 
<a class="breadcrumb-item" href="{{route('admin.home')}}">Home</a>
<span class="breadcrumb-item active">Enquires</span>
@endsection
@section('content') 
<div class="block-header block-header-default">
    <h3 class="block-title">Enquires</h3>
    <div class="block-options">
    </div>
</div>
<div class="block-content block-content-full" style="width: 100% !important">
    <table class="display" style="width:100%"  id="data-table">
    <thead>
        <tr>  
            <th>Name</th>                    
            <th>Email</th>   
            <th>Phone</th>   
            <th>Subject</th>         
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        var viewUrl = "{{route('admin.enquires.view','tmp_ip')}}";
        table=$('#data-table').DataTable({
            processing: true,
            serverSide: true, 
            scrollX: true,
            stateSave: true,
            order: [[5, 'desc']],
            ajax: '{!! route('admin.enquires') !!}',
            columns: [     
                {data: 'name'},
                {data: 'email'},
                {data: 'phone',orderable: false},
                {data: 'subject',orderable: false},
                {data: 'message',orderable: false},
                { 
                    true: false,
                    data: null,
                    data: 'created_at',
                    render: function (data) {
                        console.log(data);
                        let d=new Date(data);
                        return d.toLocaleDateString();
                    },
                },
                { 
                    orderable: false,
                    data: null,
                    render: function (data) {
                        viewTmpUrl = viewUrl.replace('tmp_ip', data['id']);
                        return "<div style='display:flex'><a style='margin:2px' href='"+viewTmpUrl+"' class='btn btn-alt-success' role='button'>View</a></div>";
                    },
                }
            ]
        });
    });
</script>
@endsection

