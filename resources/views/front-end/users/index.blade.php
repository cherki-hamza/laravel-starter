@extends('master.app')

@section('my-styles')
    <style>
        .color_1{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            height: 2px;
        }
    </style>
@endsection

@section('title' , 'Users Page')

@section('content')

@if (Auth::user())
<div class="container card shadow my-5">
    <div class="card my-2 shadow">
        <h1 class="card-title my-2 shadow">All <span class="text-success">Users</span></h1>
        <div class="card-body my-2 shadow">
            <span class="text-danger">this is all Users </span>
        </div>
    </div>


</div>
@else
<div class="container card shadow my-5">
    <span class="my-auto mx-auto text-danger">Oops No Permession to show All Users</span>
</div>
@endif


@endsection

@section('scripts')

@endsection

