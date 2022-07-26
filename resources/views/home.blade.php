@extends('layout')
@section('title', 'Home Page')
@section('content')
    <div>
        <p class="fs-3 bg-warning">Book List</p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
            </tr>
            </thead>
            <tbody class="table-secondary">
                @forelse ($books as $book)
                    <tr>
                        <td><a href="/detail/{{$book->id}}" style="text-decoration: none; color:black" >{{$book->title}}</td>
                        <td>{{$book->detail->author}}</a></td>
                    </tr>
                @empty
                   <tr>  <td colspan="2"> <p class="bg-warning">No data... </p> </td> <tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="m-5 d-flex flex-row-reverse">
        {{$books->links('pagination::bootstrap-4')}}
    </div>
@endsection
