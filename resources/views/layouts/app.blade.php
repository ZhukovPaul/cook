<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&laquo;Cooking Teacher&raquo; - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css" />

</head>
<body class="d-flex flex-column h-100">
@include('inc.header')

@if(Request::is('/'))
@include('inc.topslider')
@endif

<main class="container">
 
    @yield('content',View::make('layouts.uncomplete'))
 
</main>

@include('inc.footer') 
</body>
</html>