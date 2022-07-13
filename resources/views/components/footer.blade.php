</main>
<footer class="footer bg-dark-light">
    <div class="container grid footer-content">
        <article class="three flex footer-bio">
            <div class="footer-bio-top">
                <h2>Mark O'Connor</h2>
                <p>Full-Stack Developer</p>
                <p class="footer-text-small">Taipei, Taiwan</p>
                <a 
                    href="#contact" 
                    class="footer-text-small"
                >
                    Contact Me
                </a>
            </div>
        </article>
        <article class="one">
            <ul 
                role="list" 
                aria-label="onsite-links" 
                class="footer-list blue-hover"
            >
                <li>
                    <a href="#">        
                        Home
                    </a>
                </li>
                <li>
                    <a href="#projects">        
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#about">        
                        About
                    </a>
                </li>
                <li>
                    <a href="#contact">        
                        Contact
                    </a>
                </li>
            </ul>
        </article>
        <article class="two">
            <ul 
                role="list" 
                aria-label="offsite-links" 
                class="footer-list orange-hover"
            >
                <li>
                    <a 
                        href="https://www.cakeresume.com/me/mark-o-connor"
                        target="_blank"
                        rel="noopenner noreferrer"
                    >
                        Profile
                    </a>
                </li>
                <li>
                    <a 
                        href="https://github.com/markoco14"
                        target="_blank"
                        rel="noopenner noreferrer"
                    >
                        Github
                    </a>
                </li>
            </ul>
        </article>
        <article class="four footer-bio-bottom">
            <p>Copyright Mark O'Connor 2022</p>
            <p>All Rights Reserved</p>
        </article>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script async type="text/javascript">
    $(document).ready(function(){
            $('.carousel-container').slick({
                dots: true,
                arrows: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 500,
                        settings: {
                            arrows: false,
                        }
                    }
                ]
            });
        });
</script>
</body>
</html>