@extends('layouts.app')
@section('title') Enquiry @endsection
@section('styles') 
@endsection
@section('breadcrumb') 
<a class="breadcrumb-item" href="{{route('admin.home')}}">Home</a>
<a class="breadcrumb-item" href="{{route('admin.enquires')}}">Enquiry</a>
<span class="breadcrumb-item active">view Enquiry</span>
@endsection
@section('content') 
<div class="block-header block-header-default">
    <h3 class="block-title">view Enquiry </h3>
    <div class="block-options">
        
    </div>
</div>
<div class="block-content block-content-full   animated fadeIn">
    <div class="row justify-content-center py-20">        
        <div class="col-md-8">
            <h2>{{$enquiry->subject}}</h2>
            <span>- {{$enquiry->email}}</span>&nbsp; &nbsp; &nbsp;
            <span>{{$enquiry->name}}</span><br>
            <span>{{$enquiry->phone}}</span>

            <p style="margin: 10px 0">
                {!!$enquiry->message!!}
            </p>
        </div>
    </div>
</div>
@endsection
@section('script') 
<script>
</script>
@endsection

