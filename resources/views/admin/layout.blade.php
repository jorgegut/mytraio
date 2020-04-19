<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blog posts</title>
    <link rel="stylesheet" href="/css/admin/styles.css">
</head>
<body>
    <div class="admin-container">
        <div class="panel menu">
            <ul>
                <li><a href="{{ url('admin/articles') }}">Articles</a></li>
                <li><a href="{{ url('admin/authors') }}">Authors</a></li>
                <li><a href="{{ url('admin/categories') }}">Categories</a></li>
            </ul>
        </div>
        <div class="panel">
            <div class="top-menu">
                <ul>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="section-header">
                    <strong>{{ $title }}</strong>
                </div>
                <div class="section-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>