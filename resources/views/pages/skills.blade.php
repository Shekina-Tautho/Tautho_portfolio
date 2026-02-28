@extends('layouts.content')

@section('title', 'about')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/skills.css') }}">
@endpush

@section('content')
    <div class="container w-100 h-100">
        <div class="row h-100 w-100 g-0">
            <div class="col-6 d-flex flex-column mt-5 px-5 pt-5 align-items-center">
                <div class="row d-flex justify-content-center px-5">
                    @foreach ($skills as $skill)
                        <h1 class="header red px-5">{{ $skill->header1}}</h1>
                        <h1 class="header light-gray px-5">{{ $skill->header2}}<span class="header dark-gray">{{ $skill->header3}}</span></h1>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <div class="col-8">
                        @foreach ($skills as $skill)
                            <p class="description mx-auto">{{ $skill->description }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex align-items-start">
                <div class="row w-100">
                    <div class="col-6 flex-column justify-content-center px-5">
                        @foreach ($skills as $skill)
                            <p class="item tech pt-3">{{ $skill->tech}}</p>
                        @endforeach
                    </div>
                    <div class="col-6 flex-column justify-content-center mt-5">
                        @foreach ($skills as $skill)
                            <p class="item tool pt-3">{{ $skill->tool}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection