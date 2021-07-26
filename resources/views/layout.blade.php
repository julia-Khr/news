<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="theme-color" content="#7952b3">


    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.0/examples/blog/blog.css" rel="stylesheet">

    <style>
        a{
            text-decoration: none;

        }
    </style>

  </head>
  <body>
<div class="container">
<h1>@yield('title')</h1>

<main class="container">
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>

    @endif

 @yield('content')
</main>

</div>
  </body>
</html>
