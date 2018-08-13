<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Demolaravel</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/my.css" rel="stylesheet">
</head>

<body>
<!-- new bootstrap 4 syntax -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My first Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Kontakt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/imprint">Impressum</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">

    <div id="test">TEST</div>
    @yield('content')

</div><!-- /.container -->

<script src="/js/app.js"></script>
</body>
</html>