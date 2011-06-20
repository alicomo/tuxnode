<!-- #featured_slider -->
	<div id="featured_slider">
		<div class="slider">

			<div class="one_third">

				<!-- .plan_box -->
				<div class="plan_box" style="background-color:#222222;">

					<div class="plan_info" style="background-color:#222222;">
						<div class="content">
							<h2><?php echo $hosting->getFirst()->getName() ?></h2>
							<h3 class="price">Starts $<?php echo $hosting->getFirst()->getAnnually()/12 ?><span>/month</span></h3>
							<h4>Unlimited webspace and bandwidth</h4>
							<p><img src="/images/macpro.png" alt="img" /></p>
							<p><small>30 day Money Back Guarantee</small><br/> <span class="yellow_hl">24/7 Technical Support </span>Available </p>
						</div>
					</div>
					<div class="plan_details">
						<div class="content">
							<h2><?php echo $hosting->getFirst()->getName() ?></h2>
							<h3 class="price">$<?php echo $hosting->getFirst()->getAnnually()/12 ?><span>/month</span></h3>
                                                        <ul class="boxlist">
                                                        <?php foreach($hosting_resources as $key => $resource):?>
                                                            <?php if($key <= 4): ?>
                                                              <li><?php echo $resource->getResource() ?>&nbsp;<?php echo $resource->getFeature() ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
							</ul>
							<p><a href="<?php echo url_for('web_hosting/index') ?>" class="button medium orange">MoreInfo</a>
							<a href="<?php echo $hosting->getFirst()->getWhmUrl() ?>" class="button medium green">Order Now</a></p>
						</div>
					</div>

				</div>
				<!-- .plan_box -->

			</div>
                        <div class="one_third">

				<!-- .plan_box -->
				<div class="plan_box" style="background-color:#222222;">

					<div class="plan_info" style="background-color:#222222;">
						<div class="content">
							<h2><?php echo $reseller->getFirst()->getName() ?></h2>
							<h3 class="price">Starts $<?php echo $reseller->getFirst()->getAnnually()/12 ?><span>/month</span></h3>
							<h4>Unlimited webspace and bandwidth</h4>
							<p><img src="/images/macpro2.png" alt="img" /></p>
							<p><small>30 day Money Back Guarantee</small><br/> <span class="red_hl">Billing Software</span>Free </p>
						</div>
					</div>
					<div class="plan_details">
						<div class="content">
							<h2><?php echo $reseller->getFirst()->getName() ?></h2>
							<h3 class="price">$<?php echo $reseller->getFirst()->getAnnually()/12 ?><span>/month</span></h3>
                                                        <ul class="boxlist">
                                                        <?php foreach($reseller_resources as $key => $resource):?>
                                                            <?php if($key <= 4): ?>
                                                              <li><?php echo $resource->getResource() ?>&nbsp;<?php echo $resource->getFeature() ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
							</ul>
							<p><a href="<?php echo url_for('reseller_hosting/index') ?>" class="button medium orange">MoreInfo</a>
							<a href="<?php echo $reseller->getFirst()->getWhmUrl() ?>" class="button medium green">Order Now</a></p>
						</div>
					</div>

				</div>
				<!-- .plan_box -->

			</div>
			

			<div class="plan_box last">

				<!-- .sliding_box -->
				<div class="plan_box" style="background-color:#222222;">

					<div class="plan_info" style="background-color:#222222;">
						<div class="content">
							<h2><?php echo $servers->getFirst()->getName() ?></h2>
							<h3 class="price">Starts $<?php echo $servers->getFirst()->getAnnually()/12 ?><span>/month</span></h3>
							<h4>Unbeatable price with high quality</h4>
							<p><img src="/images/macpro3.png" alt="img" /></p>
							<p><small>30 day Money Back Guarantee</small><br/> <span class="blue_hl">Free Migrations</span>Available </p>
						</div>
					</div>
					<div class="plan_details">
						<div class="content">
							<h2><?php echo $servers->getFirst()->getName() ?></h2>
							<h3 class="price">$<?php echo $servers->getFirst()->getAnnually()/12 ?><span>/month</span></h3>
                                                        <ul class="boxlist">
                                                        <?php foreach($servers_resources as $key => $resource):?>
                                                            <?php if($key <= 4): ?>
                                                              <li><?php echo $resource->getResource() ?>&nbsp;<?php echo $resource->getFeature() ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
							</ul>
							<p><a href="<?php echo url_for('servers/index') ?>" class="button medium orange">MoreInfo</a>
							<a href="<?php echo $servers->getFirst()->getWhmUrl() ?>" class="button medium green">Order Now</a></p>
						</div>
					</div>

				</div>
				<!-- .plan_box -->

			</div>

		</div>
	</div>
	<!-- #featured_slider -->

	<div class="clear"></div>

	<div class="boxwrap">
		<div class="inner">
				<div class="two_third">
                                    <h1><strong>Welcome to Tuxnode</strong></h1>
				<?php echo $article_home->getBody() ?>
			</div><!-- TwoThird-->

			<div class="one_third last">
				<div class="testimonial">
					<h3>What do our clients say?</h3>
			   		<blockquote>
	       				<p>""Great value for money, loads of features, great server uptime.

I have been on a lot of hosts, Tuxnode ranks at the top for me. Their customer support is the best I have ever seen. I have always gotten helpful and kind replys. They always go out of their way to help you. Thank you for the great hosting experience Tuxnode.""<br /><cite><strong>Brian Jones</strong> <a href="#">United Kingdom</a></cite>
				       	</p>
					</blockquote>
				</div>
			</div><!-- .one_third -->
			<div class="divider"></div>
			<div class="one_third">
			<!-- .featurebox -->
			<div class="featurebox" style="width:650px;">
				<div class="content">
					<h2>Why Choose Us?
					<span>10 Reasons for choosing!</span></h2>
					<ul class="lists whyhost">

                        <li>Established web hosting since 2006</li>
                        <li>Hosting over 90000 websites </li>
                        <li>Cheap, affordable and economical web hosting solutions</li>
                        <li>Top quality support is always our priority</li>
                        <li>Datacentres located in Dallas, Seattle, Washington DC, Chicago.</li>
                        <li>Choice of Linux or Windows hosting.</li>
                        <li>Domain registration, email hosting, web hosting all in one place.</li>
                        <li>Ideal web hosting solutions for small, mid-sized and large  businesses.</li>
                        <li>30 days money back guarantee.</li>
                        <li>US based domain registration and webhosting gives priority search engine rankings.</li>
                        <li>Expert, lightening fast 24/7 live chat and ticket support.</li>
                        <li>Cpanel and Plesk Control Panel Hosting.</li>
                        <li>Offer FREE Softaculous, Plesk SiteBuilder, RvSiteBuilder, RvSkin.
                        
                        </li>
						
					</ul>
				</div>
			</div>
			<!-- .featurebox -->

		</div>

		

	<div class="clear"></div>

		<div class="partners">
			&nbsp;
		</div>

		</div>
	</div>
    <!-- .boxwrap -->

</div>
<!-- #wrapper -->
<div class="clear"></div>
