<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($gallery): ?>

		<section class="logos">
			<div class="content marquee">

				<?php foreach($gallery as $image): ?>

					<div class="item">
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					</div>

				<?php endforeach; ?>

			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>