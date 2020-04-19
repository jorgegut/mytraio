@extends('admin.layout')

@section('content')
<a href="{{ url('admin/categories') }}" class="button"> < Back</a><br><br>
<form method="POST" action="{{ url('admin/categories') }}">
    {{ csrf_field() }}
    <div class="group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Category name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="button">Save</button>
</form>
@endsection