<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact Us - Crank Creations - Web Design &amp; Development - London </title>
        <meta name="description" content="Crank Creations are a small web design &amp; development company located in London, UK.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="web design, web development, website design, website development, ux design, user experience design, user experience, crank, crank creations, crankcreations, london, london web, london web design, e-commerce, ecommerce, cms, content management, new media ">

        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/grid.css">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    </head>
    <body id="contact">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <a href="index.html"><img class="top-logo" src="img/final-logo.svg"/></a>
        </header>

        <nav class="navigation">
        <br/>
            <div class="row">
                <a href="index.html" id="homenav">Home</a>
                <a href="work.html" id="worknav">Work</a>
                <a href="services.html" id="servicenav">Services</a>
                <a href="about-us.html" id="aboutnav">About us</a>
                <a href="#" id="contactnav">Contact</a>
            </div>
            <div id="line"><a href="index.html"><img class="short-logo" src="img/logo-short.png"/></a></div>
        </nav>

        <section class="contact-main">
            <h1>Contact us.</h1>
                <h2>Get in touch by using the contact form below</h2>

        </section>

        <section class="contact-gif">

            <a href="#contact-area"><img id="message-gif" src="img/contact.gif"/></a>
            <div class="line"></div>

        </section>

        <section class="contact-form">

            <h2 id="contact-area">Contact us below</h2>
            <p>Feel free to email us regarding any sized project</p>
            <form action="contact.php#contact-area" method="post">
                <div class="row">
                    <div class="contact-text-fields">
                        <span class="fa fa-user"></span>
                        <input class="col-2" type="text" placeholder="Full name" name="name" required/>
                    </div>
                    <div class="contact-text-fields">
                        <span class="fa fa-globe"></span>
                        <input class="col-2" type="text" placeholder="Email" name="email" required/>
                    </div>
                    <div class="contact-text-fields">
                        <span class="fa fa-cog"></span>
                        <input class="col-2" type="text" placeholder="Subject" name="subject" required/>
                    </div>
                    <div class="contact-text-fields">
                        <span class="fa fa-envelope"></span>
                        <textarea class="col-4" placeholder="Message" name="message" required></textarea>
                    </div>

                </div>

                    <button type="submit" value="Send">Enquire now</button>
<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $header = "From: $email\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $header.= "X-Priority: 1\r\n";

    $to = "jamiemillman1992@hotmail.co.uk";

    mail ($to, $subject, $message, $header);

    if(isset($email)){
        echo "<p style='color:#7495d7;'>" ."Message sent!". "</p>";
    }


?>
            </form>

        </section>

        <footer class="footer">
            <h2>If you are interested <a href="#"><span>contact us</span></a></h2>
            <p>hello@crankcreations.com</p>
            <div class="footer-social">
                <a target="_blank" href="https://www.facebook.com/crankcreations/home?ref=page_internal"><img src="img/footer-fb.png"/></a>
                <a target="_blank" href="https://twitter.com/Crank_Creations"><img src="img/footer-twitter.png"/></a>
                <a target="_blank" href="https://www.linkedin.com/company/crank-creations"><img src="img/footer-li.png"/></a>
            </div>
            <div class="copyright">
                <p> <span>&copy;</span> 2017 Crank Creations</p>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        <script src="js/feature.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script>
            if (feature.webGL) {
                console.log("WebGL supported");
            } else {
                console.log("WebGL not supported");
            }
        </script>
    </body>
</html>
