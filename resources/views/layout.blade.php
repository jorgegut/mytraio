<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Blog</title>
</head>
<body>
    <header id="header">
        <a href="/"><img src="../img/logo-5.svg" alt="Logo" id="logo"></a>
        <nav>
            <ul>
                @foreach($categories as $category_slug => $category)
                <li><a href="/{{$category_slug}}">{{$category}}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer id="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </nav>
        </div>
        
    </footer>
</body>
</html>