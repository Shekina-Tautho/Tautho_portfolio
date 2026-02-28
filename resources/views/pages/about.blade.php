@extends('layouts.content')

@section('title', 'about')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <div class="container w-100 h-100">
        <div class="row h-100 w-100 g-0">
            <div class="col-7 d-flex align-items-start pt-3 mt-5">
                <div>
                    <div class="row mb-0">
                        @foreach ($about as $item)
                            @php
                                $words = explode(' ', $item->header1);
                                $firstWord = $words[0];
                                $rest = implode(' ', array_slice($words, 1));
                            @endphp
                            <h1 class="header">{{ $firstWord }}</h1>
                            <h1 class="header">{{ $rest }}</h1>
                        @endforeach
                    </div>

                    <div class="row mt-0">
                        <div class="col-6 d-flex align-items-start">
                            @foreach ($about as $item)
                                <h1 class="header red">{{ $item->header2 }}</h1>
                            @endforeach ($about as $item)
                        </div>
                        <div class="col-6 d-flex flex-column align-items-start justify-content-start px-5 py-3">
                            @foreach ($about as $item)
                                <p class="px-3">{{ $item->description}}</p>
                            @endforeach ($about as $item)
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 d-flex align-items-end justify-content-end">
                <img src="{{ asset('images/gray-drawing-big.png') }}" alt="big logo" class="big-image">
            </div>
        </div>
    </div>
@endsection