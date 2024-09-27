@extends('layouts.layout')

@section('title', 'SAAS GALLERY - Home')

@section('content')
    <div class="container">
        <h1>Welcome to SAAS GALLERY</h1>
        <p>Discover the best SaaS applications to enhance your productivity and efficiency.</p>

        <h2>Featured Applications</h2>
        <div class="featured-apps">
            <ul>
                @foreach($featuredApplications as $application)
                    <li>
                        <a href="{{ route('applications.show', $application->id) }}">
                            <h3>{{ $application->name }}</h3>
                            <p>{{ Str::limit($application->description, 100) }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <h2>All Applications</h2>
        <div class="all-apps">
            <ul>
                @foreach($applications as $application)
                    <li>
                        <a href="{{ route('applications.show', $application->id) }}">
                            <h3>{{ $application->name }}</h3>
                            <p>{{ Str::limit($application->description, 100) }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
