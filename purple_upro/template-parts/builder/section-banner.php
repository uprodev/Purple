<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner">
		<div class="content-width">
			<div class="content">
				<div class="text">

					<?php if ($title): ?>
						<h1><?= $title ?></h1>
					<?php endif ?>
					
					<?php if ($subtitle): ?>
						<h3 class="sub-title"><?= $subtitle ?></h3>
					<?php endif ?>
					
					<?php if ($text): ?>
						<?= $text ?>
					<?php endif ?>
					

					<?php if ($link): ?>
						<div class="btn-wrap">
							<a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
						</div>
					<?php endif ?>

				</div>

				<?php if ($image): ?>
					<figure>
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					</figure>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>