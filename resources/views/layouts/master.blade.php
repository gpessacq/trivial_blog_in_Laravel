<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <link rel="stylesheet" href="/css/app.css">
</head>

<body>
  @include('partials.nav')
  <div class="container">
    @yield('content')
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
  
</body>
</html>
