@extends('layouts.content')

@section('title', 'about')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
    <div class="container h-100 w-100">
        <div class="row d-flex mt-5">
            <div class="col-8">
                <h1 class="header light-gray">
                    i'm a<br>
                    <span class="red">computer<br>science</span>
                    student
                </h1>
                @foreach ($education as $item)
                    <p class="desc">{{ $item->subtext}}</p>
                @endforeach
            </div>
            <div class="col-4">
                @foreach ($education as $item)
                    <p class="desc red mt-5">{{ $item->organization}}</p>
                    <p class="desc gray">{{ $item->description}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection