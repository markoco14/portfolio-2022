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
    {{-- slick css --}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    {{-- font-awesome --}}
    <script src="https://kit.fontawesome.com/d0c81e3c08.js" crossorigin="anonymous"></script>
    {{-- alpine js --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <header class="header fixed flex">
        <div class="mobile-logo">
            Mark O'Connor
        </div>
        <div class="large-screen-logo">
            Mark O'Connor
        </div>
        <nav role="primary-navigation" class="navbar">
            <ul 
                role="list" 
                class="grid primary-nav-list"
            >
                <li class="desktop-one">
                    <a href="#">
                        <i class="fas fa-home"></i> 
                        <span>Home</span>
                    </a>
                </li>
                <li class="desktop-two">
                    <a href="https://www.cakeresume.com/mark-o-connor" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-file-alt"></i> 
                        <span>Resume</span>
                    </a>
                    </li>
                <li class="desktop-three">
                    <a href="#projects">
                        <i class="fas fa-folder-open"></i> 
                        <span>Projects</span>
                    </a>
                </li>
                <li class="desktop-four-mob-one" role="secondary-navigation-toggle">
                    <button 
                        id="nav-menu-button"
                        class="nav-button"
                    >
                        <i class="fas fa-bars" style="color: white;"></i>
                    </button>
                </li>
            </ul>
        </nav>
        <nav role="secondary-navigation" id="secondary-nav" class="secondary-nav-hidden">
            {{-- <span id="close-secondary-nav" class="absolute secondary-nav-close"><i class="fas fa-times"></i></span> --}}
            <ul 
                role="list" 
                class="secondary-nav-list"
            >
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#projects">
                        <i class="fas fa-folder-open"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <i class="fas fa-user-circle"></i>
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <i class="fas fa-comment-alt"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a 
                        href="https://www.cakeresume.com/mark-o-connor"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <i class="fas fa-file-alt"></i>
                        <span>Resume</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="relative" style="width:100%;">
            @if(Session::has('success'))
                    <p 
                        x-data="{ show: true }"
                        x-init="setTimeout(() => show = false, 5000)"
                        x-show='show'
                        class="contact-success"
                    >
                        {{ Session::get('success') }}
                    </p>
                @endif
        </div>
        <section id="home" class="grid grid-stack hero-grid">
            <div class="container flex flex-column">
                <article class="hero-content">
                    <div style="margin-bottom: 1rem;">
                        <h1 class="hero-tagline">
                            I build fast, scalable 
                            solutions for your business needs
                        </h1>
                        {{-- <h1 class="hero-tagline">
                            I build products people love using
                        </h1>
                        <h2 class="hero-phrase"> 
                            Engaging user experiences, fast performance, and scalability &#8212; Elegant solutions for your business needs.
                        </h2> --}}
                    </div>
                    <div>
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
                                href="#projects" 
                                class="button button-blue"
                            >
                                My Projects</a>
                        </div>
                    </div>
                </article>
            </div>
            <img 
                src="{{URL::asset("/images/desktop_screen_glow.jpg")}}" 
                alt="Swirls of neon light glow from a screen in the night."
                class="hero-image" 
            >
            <img 
                src="{{URL::asset("/images/screen_glow_mobile_2.png")}}" 
                alt="Swirls of neon light glow from a screen in the night."
                class="hero-image-mobile" 
            >
        </section>
        <section id="projects" class="section">
            <x-projects_carousel></x-projects_carousel>
        </section>
        <section id="about" class="bg-dark relative" style="padding: 5rem 0;">
            <article class="flex container about-container">
                <h2 class="heading about-heading">About</h2>
                <div class="about-image-container">
                    <img 
                        class="about-picture"
                        src="{{URL::asset("/images/profilePicColor.jpg")}}" 
                        alt="A picture of Mark smiling with a twinkle in his eye"
                    >
                    <div class="flex action-button-container about-action-mobile">
                        <a href="#contact" class="button button-orange">Contact Me</a>
                        {{-- <a href="#about" class="button button-blue">Learn More</a> --}}
                    </div>
                </div>
                <article class="flex about-description-container">
                    <x-about_short_bio></x-about_short_bio>
                    <div class="flex action-button-container about-action-large ">
                        <a href="#contact" class="button button-orange">Contact Me</a>
                        {{-- <a href="#about" class="button button-blue">Learn More</a> --}}
                    </div>
                </article>
            </article>
        </section>
        <section id="contact" class="grid grid-stack section-image-bg">
            <x-contact_section></x-contact_section>
        </section>
    <x-footer></x-footer>