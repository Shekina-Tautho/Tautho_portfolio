@extends('layouts.content')

@section('title', 'about')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
    <div class="container w-100 h-100">
        <div class="row h-100 w-100 d-flex justify-content-center">
            <div class="row mt-5 d-flex justify-content-center">
                @foreach ($contacts as $item)
                    <h1 class="header red mb-5">{{ $item->header}}</h1>
                @endforeach
            </div>
            <div class="row d-flex flex-column align-items-center">
                @foreach ($contacts as $item)
                    <p class="desc gray mt-5">{{ $item->link }}</p>
                @endforeach
            </div>
        </div>
        
    </div>
@endsection