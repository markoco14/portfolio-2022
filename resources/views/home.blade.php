<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mark O'Connor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
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
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
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
        <section class="grid grid-stack hero-grid">
            <div class="flex flex-column hero-content">
                <h1 class="hero-phrase">
                    I build things
                    people love using
                </h1>
                <p class="hero-name">Mark O'Connor</p>
                <p class="hero-job-title">Full-Stack Developer</p>
                <p class="hero-city">Taipei, Taiwan</p>
                <div class="hero-action-buttons">
                    <a href="#" class="hero-button button-orange">Contact Me</a>
                    <a href="#" class="hero-button button-blue">See Projects</a>
                </div>
            </div>
            <img class="hero-image" src="{{URL::asset("/images/screen_glow_1.png")}}" alt="Swirls of neon light glow from a screen in the night.">
            <img class="hero-image-mobile" src="{{URL::asset("/images/screen_glow_mobile_2.png")}}" alt="Swirls of neon light glow from a screen in the night.">
        </section>
        <section>
            Current project goes here
        </section>
        <section>
            About me goes here
        </section>
        <section>
            Contact(?) goes here.
        </section>
    </main>
    <footer>
        <p>Contact me</p>
        <p>Site map</p>
    </footer>
</body>
</html>