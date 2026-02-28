<?php
    use App\Models\Navbar;
    $navbar_items = Navbar::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

<div class="container pt-4">
    <img
        src="{{ asset('images/gray-drawing-small.png') }}"
        alt="Logo"
        class="d-block mb-1"
    >
    <div class="d-flex flex-column gap-1">
        <div class="d-flex gap-3">
            @foreach ($navbar_items as $item)
                @if ($loop->index < 2)
                    <a
                        href="{{ url($item->route) }}"
                        class="item {{ trim($item->route, '/') === '' ? (request()->is('/') ? 'active' : '') : (request()->is(trim($item->route, '/')) ? 'active' : '') }}"
                    >
                        {{ $item->label }}
                    </a>
                @endif
            @endforeach
        </div>

        <div class="d-flex gap-2">
            @foreach ($navbar_items as $item)
                @if ($loop->index >= 2)
                    <a
                        href="{{ url($item->route) }}"
                        class="item {{ trim($item->route, '/') === '' ? (request()->is('/') ? 'active' : '') : (request()->is(trim($item->route, '/')) ? 'active' : '') }}"
                    >
                        {{ $item->label }}
                    </a>
                @endif
            @endforeach
        </div>

    </div>
</div>
