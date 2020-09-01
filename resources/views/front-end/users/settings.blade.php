@extends('master.app')

@section('my-styles')
    <style>
        .color_1{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            height: 2px;
        }
    </style>
@endsection

@section('title' , 'Settings Page')

@section('content')

@if (Auth::user())
<div class="container card shadow my-5">
    <div class="card my-2 shadow">
        <h1 class="card-title my-2 shadow">Settings for<span class="text-success">{{Auth::user()->name}}</span></h1>
        <div class="card-body my-2 shadow">
            <span class="text-danger">this is all settings for profile {{Auth::user()->name}}</span>
        </div>
    </div>


</div>
@else
<div class="container card shadow my-5">
    <span class="my-auto mx-auto text-danger">Oops No Permession to show Settings</span>
</div>
@endif


@endsection

@section('scripts')
    <script>
        console.log('welcome to Home Page :)');
    </script>
@endsection

