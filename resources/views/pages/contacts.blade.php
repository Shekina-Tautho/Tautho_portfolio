@extends('layouts.content')

@section('title', 'about')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
@endpush

@section('content')
    <div class="container w-100 h-100">
        <div class="row d-flex flex-column align-items-center">
            <div class="row mt-5 d-flex justify-content-center">
                @foreach ($contacts as $item)
                    <h1 class="header red mb-5 mt-5 text-center">{{ $item->header }}</h1>
                @endforeach
            </div>
            <div class="row justify-content-center text-center">
                @foreach ($contacts as $item)
                    <div class="col-auto">
                        <span class="desc gray">
                            {{ $item->link }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection