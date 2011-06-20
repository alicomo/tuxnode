    <!-- #header -->

	<div class="clear"></div>

    <!-- #sub_header -->
	<div id="sub_header">
		<div class="inner">

			<div class="half_width">
			<div class="teaser_text">
				Start a Business with small investment
			</div>
			</div>
			<div class="half_width last">
			<div class="teaser_title">Reseller Hosting</div>
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


					<h2><?php echo $service->getFirst()->getName() ?> Features</h2>
					<ul class="lists">
                                            <?php foreach($service_resources as $key => $resource):?>
                                                              <li><?php echo $resource->getResource() ?>&nbsp;<?php echo $resource->getFeature() ?></li>

                                            <?php endforeach; ?>

					</ul><br />
					<h2>Optimized Server</h2>
					<ol class="lists">
						<li>6 x AMD Phenom II 3.3 GHz</li>
						<li>12 GB Memory(RAM)</li>
						<li>3 Gbps Network Speed</li>
						<li>99.9% Uptime </li>
						<li>Cent OS 5.2 64 Bit Platform</li>
						<li>Ultimate Power Support</li>
					</ol><br />

					<h2>Experienced Support</h2>
					<ul class="lists">
						<li>24/7 Support Sales Support</li>
						<li>24-48 Hours Ticket Response</li>
						<li>Full Technical Support </li>
					</ul><br />

					<h2><?php echo $service->getFirst()->getName() ?> Prices</h2>
					<table width="100%" class="hosting_price">
            			<thead>
                			<tr>
                    		<th class="head">Fees</th>
                        	<th class="head">Original Price</th>
							</tr>
						</thead>
                		<tbody>
                			<tr>
                    		<td>Monthly Fee</td>
							<td>$<?php echo $service->getFirst()->getMonthly() ?>/month</td>
							</tr>
                    		<tr>
                    		<td>Quartely Fee</td>
							<td>$<?php echo $service->getFirst()->getQuarterly()/3 ?>/month</td>
                    		</tr>
                    		<tr>
                    		<td>Semi-Annual Fee</td>
							<td>$<?php echo $service->getFirst()->getSemiAnnually()/6 ?>/month</td>
                    		</tr>
                                <tr>
                    		<td>Annual Fee</td>
							<td>$<?php echo $service->getFirst()->getAnnually()/12 ?>/month</td>
                    		</tr>
                    	</tbody>
					</table><br />
					<p><a href="<?php echo $service->getFirst()->getWhmUrl() ?>" class="button medium blue"><span>Order <?php echo $service->getFirst()->getName() ?></span></a></p>

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
					<h3 class="button green">Need Help Choosing?</h3>
                                        <p>Call us : +1951557104 Ext: 3</p>
                                        <p>Email us : sales@tuxnode.com</p>
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