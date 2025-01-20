<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="container">
    <div class="row">
      <nav>
        <ul class="nav nav-underline">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('main.index') }}">Main</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about.index') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
    </div>
  </header>
  @yield('content')
</body>
</html>