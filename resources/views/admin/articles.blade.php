@extends('admin.layout')

@section('content')
<a href="{{ url('admin/articles/create') }}" class="button">+ Add new Article</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Date</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td><a href="#">{{ $article->title }}</a></td>
            <td>{{ $article->created_at }}</td>
            <td>Rosa Aguiar</td>
        </tr>
        @endforeach
</tbody>
</table>
@endsection