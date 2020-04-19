@extends('admin.layout')

@section('content')
<a href="{{ url('admin/authors/create')}}" class="button">+ Add new Author</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Author</th>
            <th>URL</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td><a href="#">{{ $author->name }}</a></td>
            <td>{{ $author->url }}</td>
            <td>{{ $author->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection