@extends('layouts.content')

@section('title', 'about')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
    <div class="container w-100 h-100">
        <div class="row h-100 w-100 mt-5 pt-5">
            
            <div class="col-6">
                @php
                    $leftProjects = $projects->take(2);
                @endphp

                @foreach ($leftProjects as $project)
                    <h1 class="header mb-5">{{ $project->header }}</h1>
                    <div class="row px-2">
                        <div class="col-6 mt-3">
                            <h3 class="title gray">{{ $project->title }}</h3>
                        </div>
                        <div class="col-6">
                            <p class="desc gray mt-3">{{ $project->description }}</p>
                        </div>
                        <hr style="width: 93%;">
                    </div>
                @endforeach
            </div>
            <div class="col-6">
                @php
                    $rightProjects = $projects->skip(2);
                @endphp

                @foreach ($rightProjects as $project)
                    <h1 class="header">{{ $project->header }}</h1>
                    <div class="row px-2">
                        <div class="col-6">
                            <h3 class="title gray mt-3">{{ $project->title }}</h3>
                        </div>
                        <div class="col-6">
                            <p class="desc gray mt-3">{{ $project->description }}</p>
                        </div>
                        <hr style="width: 95%;">
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection