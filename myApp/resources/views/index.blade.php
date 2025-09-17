<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio['name'] }}'s Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
</head>
<body>
    <header>
        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}">
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
        <h2>Projects</h2>
        @foreach ($portfolio['projects'] as $project)
            <div class="project">
                <h3>{{ $project['name'] }}</h3>
                <p>{{ $project['description'] }}</p>
                <a href="{{ $project['demo_url'] }}">View Project</a>
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
    <section>
        <ul>
            @foreach ($portfolio['contacts'] as $platform => $link)
                <li><a href="{{ $link }}">{{ ucfirst($platform) }}</a></li>
            @endforeach
        </ul>
    </section>
    <footer>
        <p>&copy; {{ date('Y') }} {{ $portfolio['name'] }}</p>
    </footer>
</body>
</html>