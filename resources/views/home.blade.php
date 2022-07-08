<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mark O'Connor</title>
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- coding icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    {{-- project styles --}}
    <link rel="stylesheet" href="{{URL::asset("/css/style.css")}}">
</head>
<body>
    <div class="mobile-logo">
        Markodevo
    </div>
    <header class="navbar fixed flex">
        <div class="large-screen-logo">
            Markodevo
        </div>
        <nav>
            <ul class="nav-list flex">
                <li>
                    <a href="#home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="https://www.cakeresume.com/mark-o-connor" target="_blank" rel="noopener noreferrer">
                        Resume
                    </a>
                    </li>
                <li>
                    <a href="#">
                        Projects
                    </a>
                    </li>
                <button class="nav-button">
                    H
                </button>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home" class="grid grid-stack hero-grid">
            <div class="flex flex-column hero-content">
                <h1 class="hero-phrase">
                    I build things
                    people love using
                </h1>
                <p class="hero-name">Mark O'Connor</p>
                <p class="hero-job-title">Full-Stack Developer</p>
                <p class="hero-city">Taipei, Taiwan</p>
                <div class="hero-action-buttons">
                    <a href="#about" class="hero-button button-orange">
                        About Me</a>
                    <a href="#" class="hero-button button-blue">
                        My Projects</a>
                </div>
            </div>
            <img class="hero-image" src="{{URL::asset("/images/screen_glow_1.png")}}" alt="Swirls of neon light glow from a screen in the night.">
            <img class="hero-image-mobile" src="{{URL::asset("/images/screen_glow_mobile_2.png")}}" alt="Swirls of neon light glow from a screen in the night.">
        </section>
        <section>
            Current project goes here
        </section>
        <section id="about" class="grid about-grid-stack about-section">
            {{-- <div class="flex about-container"> --}}
                <article class="flex about-container">
                    <h2 class="about-heading">About <span>Mark</span></h2>
                    {{-- <div class="flex about-overview"> --}}
                    <div class="about-pic-container">
                        <img 
                            class="about-picture"
                            src="{{URL::asset("/images/profilePicColor.jpg")}}" 
                            alt="A picture of Mark smiling with a twinkle in his eye"
                        >
                        <a href="#contact" class="about-contact hero-button button-orange">Contact Me</a>
                    </div>
                    <article class="about-description">
                        <p class="stat-heading">Status</p>
                        <div class="tech-stack-container">
                            <p>Ready to work</p>
                        </div>
                        <p class="stat-heading">What I Do</p>
                        <div class="tech-stack-container">
                            <p>Front-End, Back-End, UX</p>
                        </div>
                        <p class="stat-heading">Experience</p>
                        <div class="tech-stack-container">
                            @php
                                $today = \Carbon\Carbon::today('Asia/Taipei');
                            @endphp 
                            <p>{{$today->diffInDays('2020-12-13')}} days</p>
                            
                        </div>
                        <p class="stat-heading">Interested In</p>
                        <div class="tech-stack-container">
                            <p>
                                Remote Office Both
                            </p>
                        </div>
                        <p class="stat-heading">Tech Stack</p>
                        <x-techstack></x-techstack>
                    </article>
                    {{-- </div> --}}
                   <x-longbio></x-longbio>
                </article>
                {{-- <article>
                    <h2>Contact Me</h2>
                    <p>Contact(?) goes here.</p>

                    
                </article> --}}
            {{-- </div> --}}
        </section>
        <section id="contact">
            Contact Section goes here
        </section>
    </main>
    <footer>
        <p>Contact me</p>
        <p>Site map</p>
    </footer>
</body>
</html>