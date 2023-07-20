@extends('layouts.admin.app')
@section('title') User @endsection
@section('styles') 
@endsection
@section('breadcrumb') 
<a class="breadcrumb-item" href="{{route('home')}}">Home</a>
<a class="breadcrumb-item" href="{{route('users.index')}}">user</a>
<span class="breadcrumb-item active">view User</span>
@endsection
@section('content') 
<div class="block-header block-header-default">
    <h3 class="block-title">view User</h3>
    <div class="block-options">
        
    </div>
</div>
<div class="block-content block-content-full   animated fadeIn">
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
                <tr>
                    <th style="width: 30%">Sn</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{($user->email)}}</td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script') 
<script>
</script>
@endsection

