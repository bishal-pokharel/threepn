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
<div style="width: 100%">
    <div class="block-content bg-pattern" style="background-image: url('assets_admin/media/various/bg-pattern-inverse.png');">
        <div class="py-20 text-center">
            <h1 class="font-w700 mb-10">Dashboard</h1>
            <h2 class="h4 font-w400 text-muted">Welcome, {!! Auth::user()->name !!}</h2>
        </div>
    </div>
</div>
@endsection
@section('content') 
<div class="row">
    <div class="col-sm-4">
        <div class="block">
            <div class="block-content">
            <iframe src="https://www.hamropatro.com/widgets/calender-medium.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:295px; height:385px;" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="block">
            <div class="block-content">
                <p class="text-center py-100"><iframe sandbox="" frameBorder="0" frameBorder="0" src="https://kwize.com/quote-of-the-day/embed/&txt=0&font=&color=000000&background=ffffff&fid=0"></iframe></p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="block">
            <div class="block-content">
                <iframe src="https://www.ashesh.com.np/panchang/widget.php?header_title=Nepali Panchang&header_color=e6e5e2&api=941124n196" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:365px; border-radius:5px;" allowtransparency="true">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection

