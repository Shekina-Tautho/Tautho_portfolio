<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans..." rel="stylesheet">
    @stack('css')
    <title>Portfolio</title>
</head>
<body class="d-flex flex-column vh-100 overflow-hidden">

@include('layouts.navbar')

<main class="flex-grow-1 d-flex align-items-end">
    @yield('content')
</main>

</body>
</html>
