@extends('admin.layout')

@section('content')
<a href="{{ url('admin/authors') }}" class="button"> < Back</a><br><br>
<form method="POST" action="{{ url('admin/authors') }}">
    {{ csrf_field() }}
    <div class="group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter blog post Title" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="group">
        <label for="url">URL</label>
        <input type="text" name="url" id="url" placeholder="Enter profile url" class="@error('url') is-invalid @enderror" value="{{ old('url') }}">
        @error('url')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="button">Save</button>
</form>
@endsection