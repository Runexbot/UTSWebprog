@extends('Details.layout')

@section('title', 'Home')
@section('container')

@foreach ($books->chunk(5) as $chunk)
    <div class="card-group">
        @foreach ($chunk as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{$book->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <h6 class="card-text"> {{$book->author}} </h6>
                <a href="{{ route('bookdetail', ['id'=>$book->id]) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
@endsection
