<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US">
<!--<![endif]-->
<?php define('WP_USE_THEMES', false);
	require('./wp/wordpress/wp-blog-header.php');
	query_posts('showposts=3');
?>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">

<title>Blog Page | Pet Clinic</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.ico">

<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/flaticons/flaticon.css" type="text/css" media="all" />
<link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css" media="all" />
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body data-offset="100" data-spy="scroll" data-target=".my-nav">

	<header id="top">

    <nav class="navbar navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="row">
    <div class="col-md-12">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<span class="logo"><img class="img-responsive" src="images/logo.png" alt="PetClinic" /></span>
    </div>

    <div class="my-nav collapse navbar-collapse" id="collapse-navigation">
      <ul class="nav menu-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="index.html#about">About</a></li>
        <li><a href="index.html#services">Services</a></li>
        <li><a href="index.html#team">Team</a></li>
        <li><a href="index.html#gallery">Gallery</a></li>
        <li><a href="index.html#pricing">Pricing</a></li>
        <li><a href="index.html#contact">Contact</a></li>
        <li><a href="#">Blog</a>
        </li>
      </ul>

    </div><!-- .navbar-collapse -->

    </div><!-- col-md-12 -->
    </div><!-- row -->
  </div><!-- .container -->
</nav>

</header>

<div id="blog-page" class="top-header bkg-repeat margin-81b">

<div class="container">

<div class="row">
<div class="col-md-8 col-md-offset-2">

<h2 class="section-title alt-title margin-24b">Latest News</h2>

<div class="section-heading-text">Donec ac urna tristique, dapibus magna sed</div>

</div><!-- col-md-8 -->
</div><!-- row -->

</div><!-- container -->

</div>

<div class="container inner-space-bottom">

<div class="row">

<div class="col-md-8 col-md-offset-2">



	<?php while (have_posts()): the_post(); ?>
		  <h2><?php the_title(); ?></h2>
	   <?php the_excerpt(); ?>
	   <p><a href="<?php the_permalink(); ?>" class="red">Read more...</a></p>
	<?php endwhile; ?>


</div><!-- col-md-8 -->

</div><!-- row -->

</div><!-- .container -->


<footer class="bkg-repeat">

<ul class="get-social alignc">
<li><a class="social-facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
</ul>

<p class="foo-copyright alignc">&copy; Pet Clinic. All rights reserved. Template by matchthemes.</p>

</footer>

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script type='text/javascript' src='css/bootstrap/js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.min.js'></script>
<script type='text/javascript' src='js/jquery.superslides.min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/prettyphoto/js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='js/jquery.form.min.js'></script>
<script type='text/javascript' src='js/contactform.js'></script>
<script type='text/javascript' src='js/init.js'></script>
</body>
</html>
