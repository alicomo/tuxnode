<!-- #header -->

	<div class="clear"></div>

    <!-- #sub_header -->
	<div id="sub_header">
		<div class="inner">

			<div class="half_width">
			<div class="teaser_text">
				Tuxnode Networks - Advanced Framework Hosting
			</div>
			</div>
			<div class="half_width last">
			<div class="teaser_title"><?php echo $article->getTitle() ?></div>
			</div>

		</div>
	</div>
    <!-- #sub_header -->

	<div class="clear"></div>

    <!-- .boxwrap -->
	<div class="boxwrap">
		<div class="inner">

			<!-- #main -->
			<div id="main">

				<!-- .content -->
				<div class="content">
					<h2><?php echo $article->getTitle() ?></h2>
					<p><?php echo $article->getBody() ?></p>
					
					

			</div>
			<!-- .content -->

		</div>
		<!-- #main -->

		<!-- #sidebar -->
		<div id="sidebar">
			<span class="sidebar_top"></span>
			<span class="sidebar_bottom"></span>
			<!-- .content -->
			<div class="content">

				<div class="widget">
					<h3 class="button green">Our Office Location?</h3>
                                        <p>Call us : +1951557104 Ext: 3</p>
                                        <p>Email us : info@tuxnode.com</p>
                                        <p>Postal Address<br>
					14350 60th St North<br>
                                        Suite: 18354
                                        <br>Clearwater  FL. 33760</p>
				</div>

				<div class="widget">
					<h3>Money Back Guarantee</h3>
					<p>We provide 30 days money back guarantee. You are safe to try anything</p>
					<p class="aligncenter"><img src="/images/money_back.jpg" alt="img" /></p>
                                        <p> Terms and Conditions apply . <a href="<?php echo url_for('moneyback_guarantee/index') ?>">More Info</a></p>
				</div>

			</div>
			<!-- .content -->

		</div>
		<!-- #sidebar -->

		</div>
	</div>
	<!-- .boxwrap -->

</div>
<!-- #wrapper -->

<div class="clear"></div>