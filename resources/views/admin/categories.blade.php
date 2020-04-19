@extends('admin.layout')

@section('content')
<a href="{{ url('admin/categories/create') }}" class="button">+ Add new Category</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td><a href="#">{{ $category->name }}</a></td>
            <td>{{ $category->created_at }}</td>
        </tr>
        @endforeach
</tbody>
</table>
@endsection