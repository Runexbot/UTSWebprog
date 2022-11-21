@extends('Details.layout')

@section('title', 'CategoryDetail')
@section('container')

<div class="d-flex flex-wrap justify-content-center m-5 gap-3">
    @foreach ($category->books as $book)
                <div class="d-flex flex-column card" style="width: 18rem; height: 100%;">
                    <img src="{{$book->image}}" class="card-img-top" alt="...">
                    <div class="card-body flex-grow-1">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <h6 class="card-text"> {{$book->author}} </h6>
                    <a href="{{ route('bookdetail', ['id'=>$book->id]) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
    @endforeach
</div>
@endsection
