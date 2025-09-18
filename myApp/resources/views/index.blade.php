@extends('layouts.portfolio')

@section('title', 'Portfolio - ' . $portfolio['name'])

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
    <h2><i class="fas fa-code"></i>Skills</h2>
    <ul>
        @foreach ($portfolio['skills'] as $skill)
            <li>
                @switch(strtolower($skill))
                    @case('laravel')
                        <i class="fab fa-laravel"></i>
                        @break
                    @case('php')
                        <i class="fab fa-php"></i>
                        @break
                    @case('javascript')
                        <i class="fab fa-js"></i>
                        @break
                    @case('html5')
                        <i class="fab fa-html5"></i>
                        @break
                    @case('css3')
                        <i class="fab fa-css3-alt"></i>
                        @break
                    @default
                        <i class="fas fa-star"></i>
                @endswitch
                {{ $skill }}
            </li>
        @endforeach
    </ul>
</section>
    

    <section>
        <h2><i class="fas fa-briefcase"></i> Experience</h2>
       @foreach ($portfolio['experiences'] as $experience)
            <div class="experience">
                <h3><i class="fas fa-building"></i>{{ $experience['profession'] }} at {{ $experience['company'] }}</h3>
                <p><i class="fas fa-calendar-alt"></i> {{ $experience['duration'] }}</p>
            </div>
        @endforeach
    </section>

        <section>
        <h2><i class="fas fa-graduation-cap"></i>Education</h2>
        @foreach ($portfolio['education'] as $education)
            <div class="education">
                <h3><h3><i class="fas fa-school"></i>{{ $education['school'] }}</h3>
                <p><i class="fas fa-calendar-alt"></i>{{ $education['date'] }}</p>
            </div>
        @endforeach
    </section>

    <section>
    <h2><i class="fas fa-project-diagram"></i>Projects</h2>
    @foreach ($portfolio['projects'] as $project)
        <div class="project">
            <h3><i class="fas fa-desktop"></i>{{ $project['name'] }}</h3>
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
        <h2><i class="fas fa-address-book"></i> Contact & Social Media</h2>
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