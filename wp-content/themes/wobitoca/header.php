<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf8" />
		<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
		<?php wp_head(); ?>
  </head>
 
  <body <?php body_class($class); ?>>
  <div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="wobito-well">
                <div class="wobito-thumbnail"><img src="http://www.gravatar.com/avatar/cdf41f3c2c22a6f6b68f36e65b127331?s=640" width="100%" alt=""/></div>
                <h1>Adrian Wobito</h1>
                <p>Multimedia Developer</p>
                <hr/>
                <p>
                    Developer of complex dynamic database driven systems, with modern design techniques.
                </p>
                <hr/>
                 <div class="social">
                    <a href="http://www.twitter.com/wobito" target="_blank" class="btn btn-social-icon"><span class="fa fa-twitter"></span></a>
                    <a href="http://www.facebook.com/wobito" target="_blank" class="btn btn-social-icon"><span class="fa fa-facebook"></span></a>
                     <a href="http://www.instagram.com/wobito" target="_blank" class="btn btn-social-icon"><span class="fa fa-instagram"></span></a>
                     <a href="http://ca.linkedin.com/in/wobito/" target="_blank" class="btn btn-social-icon"><span class="fa fa-linkedin"></span></a>
                     <a href="skype:adrianwobito" class="btn btn-social-icon"><span class="fa fa-skype"></span></a>
                 </div>
            </div>
        </div>
        <div class="col-sm-8">

            <ul class="nav nav-pills nav-justified wobito-nav">
                <li class="active"><a href="/"><span class="fa fa-male"></span><br>Profile</a></li>
                <li><a href="/resume"><span class="fa fa-file-text"></span><br>Resume</a></li>
                <li><a href="/portfolio"><span class="fa fa-briefcase"></span><br>Portfolio</a></li>
                <li><a href="/blog"><span class="fa fa-bullhorn"></span><br>Blog</a></li>
                <li><a href="/contact"><span class="fa fa-envelope"></span><br>Contact</a></li>
            </ul>
