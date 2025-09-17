@extends('layouts.portfolio')

@section('content')
<div class="container mt-5">
    <header>
        <img src="{{ asset($portfolio['profile_image']) }}" alt="{{ $portfolio['name'] }}" class="profile-img">
        <h1>{{ $portfolio['name'] }}</h1>
        <p>{{ $portfolio['title'] }}</p>
        <p>{{ $portfolio['bio'] }}</p>
        <p>Location: {{ $portfolio['location'] }}</p>
    </header>
    
    <section>
        <h2>Skills</h2>
        <ul>
            @foreach ($portfolio['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Experience</h2>
       @foreach ($portfolio['experiences'] as $experience)
            <div class="experience">
                <h3>{{ $experience['profession'] }} at {{ $experience['company'] }}</h3>
                <p>{{ $experience['duration'] }}</p>
            </div>
        @endforeach
    </section>

        <section>
        <h2>Education</h2>
        @foreach ($portfolio['education'] as $education)
            <div class="education">
                <h3>{{ $education['school'] }}</h3>
                <p>{{ $education['date'] }}</p>
            </div>
        @endforeach
    </section>

    <section>
    <h2>Projects</h2>
    @foreach ($portfolio['projects'] as $project)
        <div class="project">
            <h3>{{ $project['name'] }}</h3>
            <img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }}" style="max-width: 200px; height: auto; margin-bottom: 10px;">
            <p>{{ $project['description'] }}</p>
            <a href="{{ $project['demo_url'] }}" target="_blank">View Demo</a>
            @if(isset($project['github_url']))
                | <a href="{{ $project['github_url'] }}" target="_blank">View on GitHub</a>
            @endif
        </div>
    @endforeach
</section>

    <section>
        <h2>Contact & Social Media</h2>
        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:{{ $portfolio['contacts']['email'] }}">{{ $portfolio['contacts']['email'] }}</a></p>
        <p><i class="fas fa-phone"></i> Phone: {{ $portfolio['contacts']['phone'] }}</p>
        <p><i class="fab fa-github"></i> GitHub: <a href="{{ $portfolio['contacts']['github'] }}">{{ $portfolio['contacts']['github'] }}</a></p>
        <p><i class="fab fa-facebook"></i> Facebook: <a href="{{ $portfolio['contacts']['facebook'] }}">{{ $portfolio['contacts']['facebook'] }}</a></p>
    </section>
   <footer>
        <p>&copy; {{ date('Y') }} {{ $portfolio['name'] }}</p>
    </footer>
</div>
@endsection