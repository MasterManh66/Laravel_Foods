<!DOCTYPE html>
<html lang="en">
<header>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('scss/app.scss') }}">
</header>
<body>
    <ul class="pagination">
        <li class="page-item"><a class="page-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
        <li class="page-item"><a class="page-link {{ request()->is('about') ? 'active' : '' }}" href="about">About</a></li>
        <li class="page-item"><a class="page-link" href="#">Contact</a></li>
        <li class="page-item"><a class="page-link" href="#">Login</a></li>
        <li class="page-item"><a class="page-link" href="#">Cart</a></li>
    </ul>
    <div style="background-color: aquamarine; height: 100px;">Header</div>