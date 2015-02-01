<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="index">
        <meta name="description" content="Web Designer, Web Developer">
        <meta name="keywords" content="HTML,HTML5,CSS,JavaScript,jQuery">
        <meta name="author" content="Nathan J. Hungate">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

        <title>Nathan J Hungate | Web Designer</title>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet'>
        <link rel="stylesheet" href="vendors/Skeleton-2.0.4/css/skeleton.css">
        <link rel="stylesheet" href="res/css/style.css">
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="#intro">Nathan H.</a>
            </div>
            <a href="#" class="slideout-menu-icon"><span class="icon-menu"></span></a>
            <nav class="desktop-nav">
                <ul>
                    <li><a href="#about">About</a></li>
                    <!-- <li><a href="#works">Works</a></li> -->
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul class="slideout-menu">
                    <li><a href="#about">About</a></li>
                    <!-- <li><a href="#works">Works</a></li> -->
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section class="intro">
            <div class="scroll-target" id="intro"></div>
            <img src="res/images/unsplash-desk-with-phone-dark.jpg" alt="Background for Introduction Page" class="intro-bg">
            <div class="intro-splash-container">
                <div class="intro-splash">
                    <h1>Nathan Hungate</h1>
                    <hr>
                    <h2>Web Design & Development</h2>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="scroll-target" id="about"></div>
            <div class="container">
                <div class="row section-title">
                    <h3>About</h3>
                </div>
                <h4>Located in sunny city of <b>Albuquerque, NM</b></h4>
                <div class="row">
                    <div class="seven columns">
                        <h5>Bio</h5>
                        <p>I was born and raised here in the Land of Enchantment. Web design has become a passion and a creative outlet for me. I specalize in creating simple, elegant designs.</p>
                        <h5>Skills</h5>
                        <ul>
                            <li>HTML/CSS</li>
                            <li>JavaScript/jQuery</li>
                            <li>PHP</li>
                            <li>Git/GitHub</li>
                        </ul>
                    </div>
                    <aside class="five columns about-picture">
                        <img src="http://placehold.it/300x400/" src="Placeholder image">
                    </aside>
                </div>
                <div class="row">
                </div>
            </div>
        </section>

        <section class="works">
            <div class="scroll-target" id="works"></div>
            <div class="container">
                <div class="row section-title">
                    <h3>Works</h3>
                </div>
                <h4>Here are some of my past projects</h4>
                <div class="row">
                    <div class="twelve columns">
                        <p>None yet! If you'd like to be here, check out the Contact section below.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="scroll-target" id="contact"></div>
            <div class="container">
                <div class="row section-title">
                    <h3>Contact</h3>
                </div>
                <h4>Interested? Let me know</h4>
                <div class="row contact-info-container">
                    <div class="twelve columns contact-info">
                        <ul>
                            <li><span class="icon-phone"></span> <a href="tel:505-818-8642">505.818.8642</a></li>
                            <li><span class="icon-mail2"></span> <a href="mailto:Nathan.J.Hungate@gmail.com">Nathan.J.Hungate@gmail.com</a></li>
                            <li><span class="icon-twitter"></span> <a href="https://www.twitter.com/NHungate">@NHungate</a></li>
                            <li><span class="icon-linkedin2"></span> <a href="http://www.linkedin.com/in/NathanHungate">NathanHungate</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            &copy; <?php echo date("Y") ?> Nathan J. Hungate
        </footer>

        <script src="res/js/custom.js"></script>
    </body>
</html>
