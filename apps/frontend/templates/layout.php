<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
<script type="text/javascript">
/* <![CDATA[ */
Cufon.replace('h1, h2, h3, h4, h5, .teaser_title, .teaser_text, th,', { hover:true });
/* ]]> */
</script>

<!--[if IE 6]>
<script src="DD_belatedPNG.js" type="text/javascript"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('*');

  /* string argument can be any CSS selector */
  /* .png_bg example is unnecessary */
  /* change it to what suits you! */
</script>
<![endif]-->

</head>
<body id="stretched">
<!-- #wrap_all -->
<div id="wrap_all">
<div id="contact"></div>

<!-- #wrapper -->
<div id="wrapper" class="rightsidebar">

    <div class="top_menu">
		<div class="inner">
		<!-- .top_menu -->

        <ul id="pri-menu" class="nav">
            	<li class="current-menu-item"> <a href="<?php echo url_for('@homepage') ?>">Home</a></li>
                <li><a href="singlepage.html">Domain Registration</a></li>
                <li><a href="singlepage.html">Web Hosting</a></li>
                <li><a href="singlepage.html">Reseller Hosting</a></li>
                <li><a href="singlepage.html">Servers</a></li>
	</ul>
		</div>
	</div>
	<!-- .top_menu -->

	<!-- #header-->
    <div id="header">
		<div class="inner">
    		<!-- .logo -->
        	<div class="logo">
				<a href="#"><img src="/images/logo.png" alt="logo" /></a>
			</div>
        	<!-- .logo -->
			<div class="sec-menu">
        	<ul class="nav">
                <li><a href="#">Compare Plans</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="about.html">Support</a></li>
                <li><a href="<?php echo url_for('@contact') ?>">Contact</a></li>
		</ul>
			</div>

		</div>
    </div>
    <!-- #header -->

	<div class="clear"></div>

        <?php echo $sf_content ?>

<!-- #footer_wrapper -->
<div id="footer_wrapper">
	<!-- #footer -->
	<div class="inner">

		<!-- .one_fifth -->
		<div class="one_fifth">
			<div class="widget">
			<h3>Latest Tweets</h3>
      	    <ul class="tweets">
				<li><p>Time to call it a day. Another week done. Lorem ipsum <a href="#">http://bit.ly/1234</a>
					<span>about 16 hours ago</span></p>
				</li>

				<li><p>Time to call it a day. Another week done. Lorem ipsum
					<span>about 16 hours ago</span></p>
				</li>
		 	</ul>
			</div>
		</div>
		<!-- .one_fifth -->

		<!-- .one_fifth -->
		<div class="one_fifth">
			<div class="widget">
			<h3>Blogroll</h3>
			<ul>
				<li><a href="#">Documentation</a></li>
				<li><a href="#">Plugins</a></li>
				<li><a href="#">Suggest Ideas</a></li>
				<li><a href="#">Support Forum</a></li>
				<li><a href="#">Themes</a></li>
				<li><a href="#">WordPress Blog</a></li>
				<li><a href="#">WordPress Planet</a></li>
			</ul>
			</div>
		</div>
		<!-- .one_fifth -->

		<!-- .one_fifth -->
		<div class="one_fifth">
			<div class="widget">
			<h3>Page Layouts</h3>
			<ul>
				<li><a href="#">Home Page</a></li>
				<li><a href="#">Company</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Webhosting</a></li>
				<li><a href="#">Features</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			</div>
		</div>
		<!-- .one_fifth -->

		<!-- .one_fifth -->
		<div class="one_fifth">
			<div class="widget">
			<h3>Categories</h3>
			<ul>
				<li><a href="#">Reseller Hosting</a></li>
				<li><a href="#">Lorem ipsum</a></li>
				<li><a href="#">Server Hosting</a></li>
				<li><a href="#">Website Hosting</a></li>
				<li><a href="#">Dedicated Hosting</a></li>
				<li><a href="#">Photography</a></li>
				<li><a href="#">WP Hosting</a></li>
			</ul>
			</div>
		</div>
		<!-- .one_fifth -->

		<!-- .one_fifth -->
		<div class="one_fifth last">
			<div class="widget">
			<h3>Get in Touch</h3>
<p>
<strong>Postal Address</strong><br />
Envato<br />
PO Box 21177<br />
Little Lonsdale St, Melbourne<br />
Victoria 8011 Australia<br />
Street Address<br />
</p>
			<ul class="social">
				<li><a href="#" title="Delicious" ><img src="images/delicious.png" alt=""  /></a></li>
				<li><a href="#" title="Digg It" ><img src="images/digg_alt.png" alt=""  /></a></li>
				<li><a href="#" title="Twitter" ><img src="images/twitter.png" alt=""  /></a></li>
				<li><a href="#" title="Facebook" ><img src="images/facebook.png" alt=""  /></a></li>
				<li><a href="#" title="StumbleUpon" ><img src="images/stumbleupon_16.png" alt=""  /></a></li>
				<li><a href="#" title="RSS" ><img src="images/rss.png" alt=""  /></a></li>
				<li><a href="#" title="Flickr" ><img src="images/flickr.png" alt=""  /></a></li>
			</ul>
			</div>
		</div>
		<!-- .one_fifth -->

	</div>
	<!-- #footer -->
</div>
<!-- #footer_wrapper -->
<div class="clear"></div>
<!-- .copyright -->
<div class="copyright">
	<div class="inner">
		<p>Copyright &copy;2010 Webhost Hosting. All rights reserved   &nbsp;|&nbsp;   <a href="company.html" title="Privacy Policy Information">Privacy Policy</a>
		<a href="#">Valid HTML 5</a></p>
	</div>
</div>
<!-- .copyright -->

</div><!-- #wrap_all -->
<script type="text/javascript">
  	Cufon.now();
</script>
</body>
</html>

