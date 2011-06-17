<!-- #featured_slider -->
	<div id="featured_slider">
		<div class="slider">

			<div class="one_third">

				<!-- .plan_box -->
				<div class="plan_box" style="background-color:#222222;">

					<div class="plan_info" style="background-color:#222222;">
						<div class="content">
							<h2><?php echo $hosting->getFirst()->getName() ?></h2>
							<h3 class="price">Starts $<?php echo $hosting->getFirst()->getMonthly() ?><span>/month</span></h3>
							<h4>Unlimited webspace and bandwidth</h4>
							<p><img src="/images/macpro.png" alt="img" /></p>
							<p><small>30 day Money Back Guarantee</small><br/> <span class="yellow_hl">24/7 Technical Support </span>Available </p>
						</div>
					</div>
					<div class="plan_details">
						<div class="content">
							<h2><?php echo $hosting->getFirst()->getName() ?></h2>
							<h3 class="price">$<?php echo $hosting->getFirst()->getMonthly() ?><span>/month</span></h3>
                                                        <ul class="boxlist">
                                                        <?php foreach($hosting_resources as $key => $resource):?>
                                                            <?php if($key <= 4): ?>
                                                              <li><?php echo $resource->getResource() ?>&nbsp;<?php echo $resource->getFeature() ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
							</ul>
							<p><a href="#" class="button medium orange">MoreInfo</a>
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
							<h3 class="price">Starts $<?php echo $reseller->getFirst()->getMonthly() ?><span>/month</span></h3>
							<h4>Unlimited webspace and bandwidth</h4>
							<p><img src="/images/macpro2.png" alt="img" /></p>
							<p><small>30 day Money Back Guarantee</small><br/> <span class="red_hl">Billing Software</span>Free </p>
						</div>
					</div>
					<div class="plan_details">
						<div class="content">
							<h2><?php echo $reseller->getFirst()->getName() ?></h2>
							<h3 class="price">$<?php echo $reseller->getFirst()->getMonthly() ?><span>/month</span></h3>
                                                        <ul class="boxlist">
                                                        <?php foreach($reseller_resources as $key => $resource):?>
                                                            <?php if($key <= 4): ?>
                                                              <li><?php echo $resource->getResource() ?>&nbsp;<?php echo $resource->getFeature() ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
							</ul>
							<p><a href="#" class="button medium orange">MoreInfo</a>
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
							<h3 class="price">Starts $<?php echo $servers->getFirst()->getQuarterly()/3 ?><span>/month</span></h3>
							<h4>Unbeatable price with high quality</h4>
							<p><img src="/images/macpro3.png" alt="img" /></p>
							<p><small>30 day Money Back Guarantee</small><br/> <span class="blue_hl">Free Migrations</span>Available </p>
						</div>
					</div>
					<div class="plan_details">
						<div class="content">
							<h2><?php echo $servers->getFirst()->getName() ?></h2>
							<h3 class="price">$<?php echo $servers->getFirst()->getQuarterly()/3 ?><span>/month</span></h3>
                                                        <ul class="boxlist">
                                                        <?php foreach($servers_resources as $key => $resource):?>
                                                            <?php if($key <= 4): ?>
                                                              <li><?php echo $resource->getResource() ?>&nbsp;<?php echo $resource->getFeature() ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
							</ul>
							<p><a href="#" class="button medium orange">MoreInfo</a>
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
				<!-- .search_domain -->
				<div class="domain_finder"><div class="ribbon_large"><img src="images/ribbons/11_large.png" alt="" /></div>
					<form method="get" action="#" class="domainsearch">
						<fieldset>
						<p><input type="hidden" value="" name="sitename" /></p>
						<p><input type="text" id="dsearch" value="asdasd" name="domain" class="light" /></p>
						<p class="avail">Register .com, .co, .net, .org, .us, and more!</p>
						<label class="print">Search</label>
						<input type="submit" id="dsubmit" value="" />
						</fieldset>
					</form>

					<p><span class="red_hl">SALE!</span> .me $5.95, <span class="red_hl">SALE!</span> .tel $10.95, <span class="red_hl">SALE!</span> .mobi $14.95</p>

					<ul class="finder">
						<li><a class="button small green" href="#">Renew Your Domain</a></li>
						<li><a class="button small gray" href="#">Transfer Your Domain</a></li>
						<li><a class="button small orange" href="#">WHOIS Lookup</a></li>
					</ul>

				</div>
			</div><!-- TwoThird-->

			<div class="one_third last">
				<div class="testimonial">
					<h3>What do our clients say?</h3>
			   		<blockquote>
	       				<p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod neque sit amet odio gravida laoreet. Nulla malesuada risus id tortor tempor porta quis nec nulla."<br /><cite><strong>John Doe</strong> <a href="#">www.themeforest.net</a></cite>
				       	</p>
					</blockquote>
				</div>
			</div><!-- .one_third -->
			<div class="divider"></div>
			<div class="one_third">
			<!-- .featurebox -->
			<div class="featurebox">
				<div class="content">
					<h2>Why Choose Us?
					<span>10 Reasons for choosing!</span></h2>
					<ul class="lists whyhost">
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Nullam aliquet metus sit amet mi sagittis pellentesque.</li>
						<li>Cras non metus vitae urna iaculis blandit.</li>
						<li>Cras sollicitudin aliquet nibh, id blandit odio placerat ut.</li>
					</ul>
				</div>
			</div>
			<!-- .featurebox -->

		</div>

		<div class="one_third">

			<!-- .featurebox -->
			<div class="featurebox">
				<div class="content">
					<h2>Who Host With Us?
					<span>Top Websites Hosted with Us</span></h2>
					<ul class="list host">
						<li><img src="images/client1.png" alt="" /><strong>Themeforest.net</strong> <br /> <em>Buy &amp; Sell Themes Marketplace</em></li>
						<li><img src="images/client2.png" alt="" /><strong>Envato.comv</strong> <br /> <em>Envato Marketplace Network</em></li>
						<li><img src="images/client3.png" alt="" /><strong>Net.tutsplus.net</strong> <br /> <em>Tutorial MarketPLace</em></li>
					</ul>
				</div>
			</div>
			<!-- .featurebox -->

		</div>

		<div class="one_third last">

			<!-- .featurebox -->
			<div class="featurebox">
				<div class="content widget_postslist">
					<h2>Updates on Blog
					<span>Recent Posts from the blog</span></h2>
					<ul>
						<li>
							<a title="" href="#" class="thumb">
							<img width="50" height="50" alt="img" src="images/noimage.png" class="thinframe" /></a>
							<span class="wpldate">August 26, 2010</span>
														<a title="Nullam sed lacus leo" href="#" class="title">
							Nullam sed lacus Nullam aliquet metus sit amet mi sagittis pellentesque.</a><br />
						</li>
						<li>
							<a title="Hello world!" href="#" class="thumb">
							<img width="50" height="50" alt="img" src="images/noimage.png" class="thinframe" /></a>
							<span class="wpldate">September 13, 2010</span>
														<a title="Hello world!" href="#" class="title">
							DOWNTIME NOTICE! Servers are getting down today for backup!</a><br />
						</li>
						<li>
							<a title="" href="#" class="thumb">
							<img width="50" height="50" alt="img" src="images/noimage.png" class="thinframe" /></a>
							<span class="wpldate">August 26, 2010</span>
														<a title="Mauris vel mauris augue" href="#" class="title">
							NEW! Upgrading the HDD to the new 1TB with more efficient performances.</a><br />
						</li>
					</ul>
				</div>
			</div>
			<!-- .featurebox -->

		</div>

		<div class="clear"></div>

		<div class="partners">
			<a href="#"><img src="images/partners.png" alt="" /></a>
			<a href="#"><img src="images/partners.png" alt="" /></a>
			<a href="#"><img src="images/partners.png" alt="" /></a>
			<a href="#"><img src="images/partners.png" alt="" /></a>
			<a href="#"><img src="images/partners.png" alt="" /></a>
			<a href="#"><img src="images/partners.png" alt="" /></a>
		</div>

		</div>
	</div>
    <!-- .boxwrap -->

</div>
<!-- #wrapper -->
<div class="clear"></div>
