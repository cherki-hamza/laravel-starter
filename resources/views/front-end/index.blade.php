@extends('master.app')

@section('my-styles')
    <style>
        h1{
            color:gold;
        }
        .color_1{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            height: 2px;
        }
    </style>
@endsection

@section('title' , 'Home Site')

@section('content')

@if (Auth::user())
<div class="container card shadow my-5">
    <h1>welcome to cherki hamza this Page is just for Auth user ==> <span class="text-danger">{{Auth::user()->name}}</span></h1>
    <p class="text-danger">i'm a developper web full stack ):</p>
</div>
@else
<div class="container card shadow my-5">
    <h1>welcome to cherki hamza this page for not Auth user just for viewers</h1>
    <p class="text-danger">i'm a developper web full stack ):</p>
</div>
@endif


@endsection

@section('scripts')
    <script>
        console.log('welcome to Home Page :)');
    </script>
@endsection

