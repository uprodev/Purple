<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="steps">
		<div class="content-width">
			<div class="prev-btn">
				<a href="#"> <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-3.svg" alt=""><?php _e('הקודם ', 'Purple') ?></a>
			</div>
		</div>

		<?php if ($form): ?>
			<?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="form-select"]') ?>
		<?php endif ?>

		<div class="swiper-pagination step-pagination"></div>
	</section>

	<?php endif; ?>