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


<!-- #wrapper -->
<div id="wrapper" class="rightsidebar">

    <div class="top_menu">
		<div class="inner">
		<!-- .top_menu -->

        <ul id="pri-menu" class="nav">
            	<li class="current-menu-item"> <a href="<?php echo url_for('@homepage') ?>">Home</a></li>
                <li><a href="<?php echo url_for('web_hosting/index') ?>">Web Hosting</a></li>
                <li><a href="<?php echo url_for('reseller_hosting/index') ?>">Reseller Hosting</a></li>
                <li><a href="<?php echo url_for('servers/index') ?>">Servers</a></li>
                <li><div id="contact" align="right" style="padding-left: 100px;">Call&nbsp;<span style="color:#fff;">+1951557104 Ext: 3</span>&nbsp;Email&nbsp;<span style="color:#fff;">support@tuxnode.com</span></div></li>
	</ul>
                              
		</div>
	</div>
	<!-- .top_menu -->
        
	<!-- #header-->
    <div id="header">
		<div class="inner">
    		<!-- .logo -->
        	<div class="logo">
				<a href="<?php echo url_for('@homepage') ?>"><img src="/images/logo.png" alt="logo" /></a>
			</div>
        	<!-- .logo -->
			<div class="sec-menu">
        	<ul class="nav">
                <li><a href="<?php echo url_for('about/index') ?>">About Us</a></li>
                <li><a href="http://support.tuxnode.com" target="_blank">Support</a></li>
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
			<a href="<?php echo url_for('@homepage') ?>"><img src="/images/logo.png" alt="logo" /></a>
			
                        </div>
		</div>
		<!-- .one_fifth -->

		<!-- .one_fifth -->
		<div class="one_fifth" >
			
                           <div id="widget"  style="padding-left: 75px; padding-top: 25px; width:200px;">
                            Call&nbsp;<span style="color:#fff;">+1951557104 Ext: 3</span><br>
                            Email&nbsp;<span style="color:#fff;">support@tuxnode.com</span></div>
                        
		</div>
		<!-- .one_fifth -->

		<!-- .one_fifth -->
		<div class="one_fifth">
			<div class="widget">
			&nbsp;
			</div>
		</div>
		<!-- .one_fifth -->

		<!-- .one_fifth -->
		<div class="one_fifth">
			<div class="widget">
			<h3>Categories</h3>
			<ul>
				<li><a href="<?php echo url_for('@homepage') ?>">Home Page</a></li>
				<li><a href="<?php echo url_for('about/index') ?>">About</a></li>
				<li><a href="<?php echo url_for('web_hosting/index') ?>">Web Hosting</a></li>
                                <li><a href="<?php echo url_for('reseller_hosting/index') ?>">Reseller Hosting</a></li>
                                <li><a href="<?php echo url_for('servers/index') ?>">Servers</a></li>
				<li><a href="<?php echo url_for('about/index') ?>">About Us</a></li>
                                <li><a href="http://support.tuxnode.com" target="_blank">Support</a></li>
				<li><a href="<?php echo url_for('@contact') ?>">Contact</a></li>
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
14350 60th St North<br />
Suite: 18354 <br />
Clearwater  FL. 33760<br />
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
		<p>Copyright &copy;2011 Tuxnode Networks Ltd. All rights reserved   &nbsp;|&nbsp;   
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

