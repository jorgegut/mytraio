@extends('layout')

@section('content')
<h3>> {{$category_name}}</h3>
<div class="article-list">
    @for ($i = 0; $i < 4; $i++)
    <div class="b-card">
        <a href="#">
            <img src="https://picsum.photos/180/160" alt="" class="img">
            <div class="post-heading">
                Loremw lopes ipsum dolor sit amet consectetur adipisicing elit. Tempore, molestiae!
            </div>
        </a>
    </div>
    @endfor
</div>
@endsection