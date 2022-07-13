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
</head>
<body>
    <header class="navbar fixed flex">
        <div class="mobile-logo">
            Markodevo
        </div>
        <div class="large-screen-logo">
            Markodevo
        </div>
        <nav>
            <ul class="nav-list flex" role="list">
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
            <div class="container flex flex-column">
                <article class="hero-content">
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
                            href="#projects" 
                            class="button button-blue"
                        >
                            My Projects</a>
                    </div>
                </article>
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
        <section id="projects" class="section">
            <x-projects_carousel></x-projects_carousel>
        </section>
        <section id="about" class="bg-dark relative" style="padding: 5rem 0;">
            <article class="flex container about-container">
                <h2 class="heading about-heading">About <span>Mark</span></h2>
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
                    <x-aboutstats></x-aboutstats>
                    <div class="flex action-button-container about-action-large ">
                        <a href="#contact" class="button button-orange">Contact Me</a>
                        {{-- <a href="#about" class="button button-blue">Learn More</a> --}}
                    </div>
                </article>
            </article>
        </section>
        <section id="contact" class="grid grid-stack section-image-bg">
            <article class="flex container contact-container">
                <h2 class="heading heading-margin contact-heading">
                    <span>Contact</span> Me
                </h2>  
                <div class="grid contact-grid">
                    <div class="flex contact-phrase-container contact-two">
                        <p class="contact-phrase">
                            Let's have a conversation about how 
                            I can help you reach your goals.
                        </p>
                    </div>
                    <div class="contact-one">
                        <form 
                            action="contact-me" 
                            method="POST"
                            class="contact-form"
                        >    
                            @if(Session::has('success'))
                            <p>{{ Session::get('success') }}</p>
                            @endif
                            @csrf
                            <div class="flex control-group">
                                <label class="text-highlight" for="name">Name</label>
                                <input id="name" name="name" type="text">
                                @error('name')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex control-group">
                                <label class="text-highlight" for="email">Email</label>
                                <input id="email" name="email" type="text">
                                @error('email')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex control-group">
                                <label class="text-highlight" for="message">Message</label>
                                <textarea id="message" name="message" cols="30" rows="10"></textarea>
                                @error('message')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex control-group">
                                <button 
                                    type="submit"
                                    class="button button-blue"
                                >
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </article>
            <img 
                src="{{URL::asset("/images/contact_image.png")}}" 
                alt="A pair of outstretched hands hover over the keys; wondering what to write next."
                class="contact-image"
            >
            </div>
        </section>
    <x-footer></x-footer>