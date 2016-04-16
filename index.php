<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Joseph - Personal Personal Portfolio</title>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'
    type='text/css'>
<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous">
<link href="styles.css?d<?php echo time();?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <nav id="top-nav">
        <div>
            <h3 id="site-heading">
                <a href="#about-section" class="local-link">Joseph</a>
            </h3>
            <ul id="social" class="nav-list">
                <li><a
                    href="https://www.linkedin.com/in/joseph-unworried-25531442?trk=nav_responsive_tab_profile"
                    target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/josephx86" target="_blank"
                    title="GitHub"><i class="fa fa-github"></i></a></li>
                <li><a href="http://fancyridez.tumblr.com/" target="_blank"
                    title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                <li id="hamburger-item"><a href="#" title="Menu"
                    id="hamburger-link"><i class="fa fa-bars"></i></a></li>
            </ul>
            <ul id="menu" class="nav-list">
                <li><a href="#about-section" class="local-link">About</a></li>
                <li><a href="#portfolio-section" class="local-link">Portfolio</a></li>
                <li><a href="#contact-section" class="local-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <ul id="vertical-menu" class="vertical-menu-list">
        <li><a href="#about-section" class="local-link">About</a></li>
        <li><a href="#portfolio-section" class="local-link">Portfolio</a></li>
        <li><a href="#contact-section" class="local-link">Contact</a></li>
    </ul>
    <div id="content">
        <section id="top-of-page"></section>
        <div id="about-section" class="section-box">
            <img id="avatar"
                src="https://raw.githubusercontent.com/josephx86/freecodecamp-personal-portfolio-webpage/master/img/avatar_monochrome.jpg"
                alt="avatar" />
            <div id="about-text">
                <p>My name is Joseph and I love computer programming.</p>
                <br />
                <p>
                    As a Software Developer, I enjoy formulating algorithms from
                    user requirements and transforming them into computer
                    programs for desktop, web, and mobile platforms. I love open
                    source software and technologies, <a class="underlined"
                        href="https://getfedora.org/" target="_blank">Fedora</a>
                    being my favorite.
                </p>
            </div>
            <div id="about-social">
                <a
                    href="https://www.linkedin.com/in/joseph-unworried-25531442?trk=nav_responsive_tab_profile"
                    target="_blank" title="LinkedIn"><i
                    class="fa fa-linkedin-square fa-3x"></i></a> <a
                    href="https://github.com/josephx86" target="_blank"
                    title="GitHub"><i class="fa fa-github-square fa-3x"></i></a>
                <a href="http://fancyridez.tumblr.com/" target="_blank"
                    title="Tumblr"><i class="fa fa-tumblr-square fa-3x"></i></a>
            </div>
        </div>
        <section id="portfolio-section" class="section-box">
            <p class="section-title">Portfolio</p>
            <div class="separator"></div>
            <div class="row">
                <div class="col-xs-6">
                    <figure>
                        <a href="http://www.tornadodome.com" target="_blank"> <img
                            class="img-responsive" alt="Tornado Dome"
                            src="https://raw.githubusercontent.com/josephx86/freecodecamp-personal-portfolio-webpage/master/img/tornado.png">
                        </a>
                        <figcaption>
                            <a href="http://www.tornadodome.com" target="_blank">
                                <span>Tornado Dome</span> <br /> <small>tornadodome.com
                            </small>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-6">
                    <figure>
                        <a href="http://www.backyardscienceimprint.com/"
                            target="_blank"> <img class="img-responsive"
                            alt="Houdini and the Magic Molt"
                            src="https://raw.githubusercontent.com/josephx86/freecodecamp-personal-portfolio-webpage/master/img/houdini.png"></a>
                        <figcaption>
                            <a href="http://www.backyardscienceimprint.com/"
                                target="_blank"><span>Houdini and the Magic Molt</span><br />
                                <small>backyardscienceimprint.com</small></a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-xs-6">
                    <figure>
                        <a href="http://www.pixispace.com" target="_blank"> <img
                            class="img-responsive" alt="Pixispace"
                            src="https://raw.githubusercontent.com/josephx86/freecodecamp-personal-portfolio-webpage/master/img/pixispace.jpg">
                        </a>
                        <figcaption>
                            <a href="http://www.pixispace.com" target="_blank">
                                <span>Pixispace</span> <br /> <small>pixispace.com
                            </small>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-6">
                    <figure>
                        <a href="http://codepen.io/josephx86/full/XdaGpm/"
                            target="_blank"> <img class="img-responsive"
                            alt="Houdini and the Magic Molt"
                            src="https://raw.githubusercontent.com/josephx86/freecodecamp-personal-portfolio-webpage/master/img/diana.jpg"></a>
                        <figcaption>
                            <a href="http://codepen.io/josephx86/full/XdaGpm/"
                                target="_blank"><span>Diana</span><br /> <small>codepen.io/josephx86/full/XdaGpm</small></a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <section id="contact-section" class="section-box">
            <p class="section-title">Contact</p>
            <div class="separator"></div>
            <p class="text-center padded-row">If you like my work, or maybe you
                have a question to ask, feel free to send me a message below.</p>
            <form>
                <div class="row">
                    <div class="col-xs-1">Name:</div>
                </div>
                <div class="row padded-row">
                    <div class="col-xs-6">
                        <input type="text" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1">Email:</div>
                </div>
                <div class="row padded-row">
                    <div class="col-xs-6">
                        <input type="email" class="form-control" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1">Message:</div>
                </div>
                <div class="row padded-row">
                    <div class="col-xs-11">
                        <textarea id="message-box" rows="6"
                            placeholder="Type your message here..." required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1 right-div"></div>
                    <div class="col-xs-4 right-div">
                        <button type="submit" class="btn btn-block btn-default">
                            <span> Send <i class="fa fa-paper-plane"></i></span>
                        </button>
                    </div>
                </div>
            </form>
        </section>
        <footer>
            <p class="text-center">Copyright &copy; 2016 - Joseph
            
            
            <p class="text-center">
                Free images from <a class="underlined"
                    href="http://www.gratisography.com/" target="_blank">gratisography.com</a>
            </p>
        </footer>
        <script src="https://code.jquery.com/jquery-1.12.3.min.js"
            type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
    </div>
</body>
</html>