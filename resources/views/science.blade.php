@extends('layout')
@section('title', 'Category Page')
@section('content')
    <div>
        <p class="fs-3 bg-warning">Science</p>
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
@endsection
