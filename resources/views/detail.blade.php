@extends('layout')
@section('title', 'Book Detail Page')
@section('content')
    <div>
        <p class="fs-3 bg-warning">Book Detail</p>
        <p>Title : {{$books->title}}</p>
        <p>Author : {{$books->detail->author}}</p>
        <p>Publisher : {{$books->detail->publisher}}</p>
        <p>Year : {{$books->detail->publisher}}</p>
        <p>Description : </p>
        <p>{{$books->detail->description}}</p>
    </div>
@endsection
