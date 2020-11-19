<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('sitename') - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css" />

</head>
<body>
@include('inc.header')

@if(Request::is('/'))
@include('inc.topslider')
@endif

<main class="container">
 
    @yield('content')
 
</main>

@include('inc.footer') 
</body>
</html>