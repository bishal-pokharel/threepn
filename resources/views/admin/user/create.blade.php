@extends('layouts.app')
@section('title') Add User @endsection
@section('styles') 
<style>
</style>
@endsection
@section('breadcrumb') 
<a class="breadcrumb-item" href="{{route('admin.home')}}">Home</a>
<a class="breadcrumb-item" href="{{route('admin.users.index')}}">user</a>
<span class="breadcrumb-item active">Add User</span>
@endsection
@section('content') 
<div class="block-header block-header-default">
    <h3 class="block-title">Add User</h3>
    <div class="block-options">
        
    </div>
</div>
<div class="block-content block-content-full   animated fadeIn">
    <div class="row justify-content-center py-20">
        <div class="col-xl-6">
           <form action="{{route('admin.users.create')}}" method="post">
            @csrf
                <div class="form-group">
                    <div class="form-material">
                        <input value="{{ old('name') }}" required type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-material">
                        <input value="{{ old('email') }}" required type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script') 
<script>
    $(document).ready(function(){
        $('.selectpicker').select2();
    });
</script>
@endsection

