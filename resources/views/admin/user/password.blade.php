@extends('layouts.admin.app')
@section('title') Password @endsection
@section('styles') 
@endsection
@section('breadcrumb') 
<a class="breadcrumb-item" href="{{route('home')}}">Home</a>
<span class="breadcrumb-item active">Password</span>
@endsection
@section('content') 
<div class="block-header block-header-default">
    <h3 class="block-title">Update Password</h3>
    <div class="block-options">
        
    </div>
</div>
<div class="block-content block-content-full   animated fadeIn">
    <div class="row justify-content-center py-20">
        <div class="col-xl-6">
           <form action="{{route('user.password')}}" method="post" >
            @csrf
                <div class="form-group">
                    <div class="form-material">
                        <input required type="password" class="form-control" id="password" name="password" placeholder="Enter Current Password">
                        <label for="password">Current Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-material">
                        <input required type="password" class="form-control" id="new_password" name="new_password" placeholder="Choose a safe one..">
                        <label for="new_password">New Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-material">
                        <input required type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="..and confirm it!">
                        <label for="confirm_password">Confirm Password</label>
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
</script>
@endsection

