<?php
// temp hack till i can fix at domain record level
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'guitarlessonslongbeach.com') {
	header('Location: '.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],true,301);
	exit;
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Get guitar and bass lessons in the Long Beach area. James Kee has over 15 years experience with electric, acoustic and stand-up strings." />
<meta name="keywords" content="guitar lessons, bass lessons, long beach, long beach area, lakewood, rossmoor, los altos, cerritos, la palma, james kee, kee" />
<title>Long Beach Guitar and Bass Lessons by James Kee</title>
<link rel="stylesheet" type="text/css" href="resources/main.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="resources/main.js"></script>
<!-- google analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17686896-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- end google analytics -->
</head>
<body>

<div id="page_cont">
	<img id="frame_top" src="resources/frame_top.png" alt="" /><img id="frame_bottom" src="resources/frame_bottom.png" alt="" />
	<ul id="nav">
		<li class="l_home selected">
			<img class="up" src="resources/nav1_home-0.png" alt="home" />
			<img class="over" src="resources/nav1_home-1.png" alt="home" />
		</li>
		<li class="l_experience">
			<img class="up" src="resources/nav1_experience-0.png" alt="experience" />
			<img class="over" src="resources/nav1_experience-1.png" alt="experience" />
		</li>
		<li class="l_current">
			<img class="up" src="resources/nav1_current-0.png" alt="current" />
			<img class="over" src="resources/nav1_current-1.png" alt="current" />
		</li>
		<li class="l_contact">
			<img class="up" src="resources/nav1_contact-0.png" alt="contact" />
			<img class="over" src="resources/nav1_contact-1.png" alt="contact" />
		</li>
	</ul>

	<div id="home" class="page">
		<img src="resources/page1.jpg" alt="Guitar and bass lessons by James Kee. Teaching talent for over 8 years." />
	</div>

	<div id="experience" class="page">
		<img class="left_img" src="resources/page2_img1.jpg" alt="" />
		<div class="right_stuff">
			<h2>Experience</h2>
			<div class="articles">
				<div class="article">
					<h3 class="article1_header">15 years performing</h3>
					<p>James Kee has been in several bands over the years and has spent time performing at classical, rock, reggae and other venues.</p>
				</div>
				<div class="article">
					<h3 class="article2_header">10 years recording</h3>
					<p>From his constant work with local acts, James has recorded 7 albums spanning a myriad of genres and is currently working on two more.</p>
				</div>
				<div class="article">
					<h3 class="article3_header">8 years teaching</h3>
					<p>Performance is not his only passion, James also loves to share the technical knowledge and artistic perspectives acquired through his musical years with others. He has taught over a hundred students of all ages and has worked with notable grammy winners.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="current" class="page">
		<div class="coming_soon">Current performance and recording section coming soon.</div>
	</div>

	<div id="contact" class="page">
		<img class="left_img" src="resources/page4_img1.jpg" alt="" />
		<div class="right_stuff">
			<h2>Contact</h2>
			<p>If you are interested in private tutoring, please contact James.</p>
			<p>
				Phone: (562) 999-6784<br />
				Email: James@lbguitarlessons.com<br /><br />
				Areas served include Long Beach, Lakewood, Rossmoor, Los Altos, Cerritos, and La Palma.
			</p>
		</div>
	</div>

</div>

<div id="bottom_info">
	<h1>Guitar and Bass Lessons in Long Beach</h1>
	<div class="articles">
		<div class="article">
			<h2>Experienced</h2>
			<p>James Kee is a Long Beach based guitar and bass recording artist as well as a classically trained musician with years of experience to share.</p>
		</div>
		<div class="article">
			<h2>Flexible</h2>
			<p>James will drive to your house for personal training in electric, acoustic or stand-up bass and guitar. Areas served include Long Beach, Lakewood, Rossmoor, Los Altos, Cerritos, and La Palma.</p>
		</div>
		<div class="article">
			<h2>Passionate</h2>
			<p>With a life-long heart for music, James has associated with many acts and is currently in 3 bands local to Long Beach.</p>
		</div>
	</div>
</div>

<div id="footer">
	<a href="http://www.instrumentlessons.org" title="As Seen On Instrument Lessons .org"><img src="http://www.instrumentlessons.org/images/instrument_lessons.gif" style="border: 0px;" alt="Instrument Lessons" /></a>
</div>

</body>
</html>