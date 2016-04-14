<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Insert title here</title>
<link href="styles.css?d=<?php echo time();?>" rel="stylesheet"
	type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Abel'
	rel='stylesheet' type='text/css'>

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
				<li id="hamburger-item"><a href="#" title="Menu" id="hamburger-link"><i
						class="fa fa-bars"></i></a></li>
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
				src="https://scontent-dfw1-1.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/945577_642333795781634_371620598_n.jpg?oh=1a038a6cd79fd5693c37f25d5ac878d9&oe=577BDB44"
				alt="avatar" />
			<div id="about-text">
				<p>My name is Joseph and I love computer programming.</p>
				<br />
				<p>
					As a Software Developer, I enjoy formulating algorithms from user
					requirements and transforming them into computer programs for
					desktop, web, and mobile platforms. I love open source software and
					technologies, <a href="https://getfedora.org/" target="_blank">Fedora</a>
					being my favorite.
				</p>
			</div>

			<ul id="social-icons">
				<li><a
					href="https://www.linkedin.com/in/joseph-unworried-25531442?trk=nav_responsive_tab_profile"
					target="_blank" title="LinkedIn"><i
						class="fa fa-linkedin-square fa-3x"></i></a></li>
				<li><a href="https://github.com/josephx86" target="_blank"
					title="GitHub"><i class="fa fa-github-square fa-3x"></i></a></li>
				<li><a href="http://fancyridez.tumblr.com/" target="_blank"
					title="Tumblr"><i class="fa fa-tumblr-square fa-3x"></i></a></li>
			</ul>
		</div>

		<section id="portfolio-section" class="section-box">
			<p>Portfolio</p>
		</section>

		<section id="contact-section" class="section-box">
			<p>Contact</p>
		</section>

		<script src="https://code.jquery.com/jquery-1.12.3.min.js"
			type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
	</div>

</body>
</html>