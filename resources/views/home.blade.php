@extends('layout')

@section('content')

<h2>Latest posts</h2>
<div class="home-top-container">
    <div class="main-post">
        <img src="https://picsum.photos/540/320" alt="" class="img">
        <div class="post-heading">
            <div class="category-name">> Well-being</div>
            <div>Loremw lopes ipsum dolor sit amet consectetur adipisicing elit. Quos sequi eius beatae quam ex quisquam.</div> 
        </div>
    </div>
    <div class="last-posts-c">
    @foreach ($latest_posts as $post)
        <div>
            <a href="#">
                <img src="https://picsum.photos/300/160" alt="" class="img">
                <div class="category-name">> {{ $post['category_name'] }}</div>
                <div>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, vel!
                </div>
            </a>
        </div>
    @endforeach
    </div>
</div>



@foreach ($categories as $category)
<div class="category-container">
    <h3>> {{$category}}</h3>
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
</div>
@endforeach
@endsection