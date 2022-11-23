@extends('Details.layout')

@section('title', 'BookDetail')
@section('container')

<div class="d-flex justify-content-center align-items-center p-5 m-5">
    <div class="card" style="width: 18rem;">
        <img src=" {{$book->image}} " class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Book Title : {{$book->title}}</h5>
        <h6 class="card-text">Book Author: {{$book->author}} </h6>
        <h6 class="card-text">Synopsis: </h6>
        <p class="card-text">{{$book->synopsis}}</p>
        <a href="{{route('home')}}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
@endsection
