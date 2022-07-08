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
                <div class="action-button-container">
                    <a 
                        href="#about" 
                        class="button button-orange"
                    >
                        About Me</a>
                    <a 
                        href="#" 
                        class="button button-blue"
                    >
                        My Projects</a>
                </div>
            </div>
            <img 
                src="{{URL::asset("/images/screen_glow_1.png")}}" 
                alt="Swirls of neon light glow from a screen in the night."
                class="hero-image" 
            >
            <img 
                src="{{URL::asset("/images/screen_glow_mobile_2.png")}}" 
                alt="Swirls of neon light glow from a screen in the night."
                class="hero-image-mobile" 
            >
        </section>
        <section style="min-height: 500px;">
            Current project goes here
        </section>
        <section id="about" class="bg-dark">
            <article class="flex container about-container">
                <h2 class="about-heading">About <span>Mark</span></h2>
                <div class="about-image-container">
                    <img 
                        class="about-picture"
                        src="{{URL::asset("/images/profilePicColor.jpg")}}" 
                        alt="A picture of Mark smiling with a twinkle in his eye"
                    >
                    <div class="flex action-button-container about-action-mobile">
                        <a href="#contact" class="button button-orange">Contact Me</a>
                        <a href="#about" class="button button-blue">Learn More</a>
                    </div>
                </div>
                <article class="flex about-description-container">
                    <x-aboutstats></x-aboutstats>
                    <div class="flex action-button-container about-action-large ">
                        <a href="#contact" class="button button-orange">Contact Me</a>
                        <a href="#about" class="button button-blue">Learn More</a>
                    </div>
                </article>
            </article>
        </section>
        <section id="contact" style="min-height: 500px;">
            <article class="container">
                <h2>Contact Me</h2>
                <p>Explanation goes here</p>
                <p>Build a form</p>
            </article>
        </section>
    </main>
    <footer>
        <p>Contact me</p>
        <p>Site map</p>
    </footer>
</body>
</html>