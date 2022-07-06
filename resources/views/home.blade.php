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
    <header class="navbar fixed flex">
        <div>
            MarkoDevo
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
        <section class="grid hero-grid">
            <div class="flex hero-content">
                <h1 class="hero-phrase">I build things that <br class="hero-break"> people love using</h1>
                <h2 class="hero-name">Mark O'Connor</h2>
                <p class="hero-job-title">Full-stack Developer</p>
                <p>Taipei, Taiwan</p>
                <div class="hero-action-buttons">
                    <a href="#" class="hero-contact-button">Contact Me</a>
                    <a href="#" class="hero-projects-button">See Projects</a>
                </div>
            </div>
            <img class="hero-image" src="{{URL::asset("/images/screen_glow_1.png")}}" alt="Swirls of neon light glow from a screen in the night.">
            <img class="hero-image-mobile" src="{{URL::asset("/images/screen_glow_mobile.png")}}" alt="Swirls of neon light glow from a screen in the night.">
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