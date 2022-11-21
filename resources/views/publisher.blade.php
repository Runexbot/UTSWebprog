@extends('Details.layout')

@section('title', 'Publisher')
@section('container')

@foreach ($publishers->chunk(5) as $chunk)
    <div class="card-group">
        @foreach ($chunk as $publisher)
            <div class="card" style="width: 18rem;">
                <img src="{{$publisher->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$publisher->name}}</h5>
                <h6 class="card-text"> {{$publisher->address}} </h6>
                <a href="{{ route('publisherdetail', ['id'=>$publisher->id])}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
@endsection
