@extends('admin.layout')

@section('content')
<a href="{{ url('admin/articles') }}" class="button"> < Back</a><br><br>
<form method="POST" action="{{ url('admin/articles') }}">
    {{ csrf_field() }}
    <div class="group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Enter article Title" class="@error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="group">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" class="@error('content') is-invalid @enderror">{{ old('content') }}</textarea>
        @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="button">Save</button>
</form>
@endsection