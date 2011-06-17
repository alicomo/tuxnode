<?php
use_helper('sfCryptoCaptcha');
captcha_image();
captcha_reload_button();
?>
<?php use_stylesheet('contact') ?>
<div class="clear"></div>

    <!-- #sub_header -->
	<div id="sub_header">
		<div class="inner">

			<div class="half_width">
			<div class="teaser_text">
				We are available to support you 24/7
			</div>
			</div>
			<div class="half_width last">
			<div class="teaser_title">Contact Us</div>
			</div>

		</div>
	</div>
    <!-- #sub_header -->

	<div class="clear"></div>
<div class="boxwrap">
		<div class="inner">

			<!-- #main -->
			<div id="main">

				<!-- .content -->
				<div class="content">
					

	<form id="form2" action="<?php echo url_for('@contact') ?>" method="post" enctype="multipart/form-data">
            <h3><span>Contact Us</span></h3>
            <fieldset>
            
  <legend><?php echo $legend = (sfConfig::get('app_contact_form_legend'))?sfConfig::get('app_contact_form_legend'):'Contact Form'; ?></legend>
	  <?php if($sf_user->hasFlash('error')): ?>
	   <div id='error'><?php echo $sf_user->getFlash('error') ?></div>
	  <?php endif; ?>

	  <?php if($sf_user->hasFlash('notice')): ?>
	   <div id='notice'><?php echo $sf_user->getFlash('notice') ?></div>
	  <?php endif; ?>

	  
	    <p class="first"><?php echo $form['name']->renderLabel(sfConfig::get('app_contact_form_field_name')) ?>
	      
		<?php echo $form['name']->renderError() ?>
		<?php echo $form['name'] ?>
	    </p>
            <p>
	      <?php echo $form['email']->renderLabel(sfConfig::get('app_contact_form_field_email')) ?>
		<?php echo $form['email']->renderError() ?>
		<?php echo $form['email'] ?>
	    </p>
	    <p><?php echo $form['subject']->renderLabel(sfConfig::get('app_contact_form_field_subject')) ?>
		<?php echo $form['subject']->renderError() ?>
		<?php echo $form['subject'] ?>
            </p>
	 
	    <p><?php echo $form['message']->renderLabel(sfConfig::get('app_contact_form_field_message')) ?>
		<?php echo $form['message']->renderError() ?>
		<?php echo $form['message'] ?>
	     
	    </p>
            <p><?php echo $form['captcha']->renderLabel(); ?>
                    <?php echo $form['captcha']->renderError(); ?>
                    <?php echo $form['captcha']->render(); ?>
               <?php echo captcha_image(); echo captcha_reload_button(); ?>
	     </p>
             
	     <p class="submit">
                <button id="submit"type="submit"><?php echo sfConfig::get('app_contact_form_button')?></button>
             </p>
	  </fieldset>
       
	</form>

					
			</div>
			<!-- .content -->

		</div>
		<!-- #sidebar -->

		</div>
	</div>
	<!-- .boxwrap -->