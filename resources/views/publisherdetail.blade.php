@extends('Details.layout')

@section('title', 'PublisherDetail')
@section('container')

<div class="d-flex justify-content-center align-items-center py-4">
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$publisher->image}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Publisher Name: {{$publisher->name}}</h5>
            <h6 class="card-text">Address: {{$publisher->address}} </h6>
            <h6 class="card-text">Phone: {{$publisher->phone}} </h6>
            <h6 class="card-text">Email: {{$publisher->email}} </h6>
            <br>
            <a href="{{route('publisher')}}" class="btn btn-primary">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="d-flex flex-wrap justify-content-center m-4 gap-4">
@foreach ($publisher->books as $book)
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
