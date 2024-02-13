<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-color">

		<?php if($gallery): ?>

			<div class="bg">

				<?php foreach($gallery as $index => $image_): ?>

					<?= wp_get_attachment_image($image_['ID'], 'full', false, array('class' => 'img img-' . strval($index + 1))) ?>

				<?php endforeach; ?>

			</div>

		<?php endif; ?>

		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<div class="title-wrap">
						<h2 class="title-h2"><?= $title ?></h2>
					</div>
				<?php endif ?>
				
				<figure>
					<?php if ($image): ?>
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					<?php else: ?>
						<div id="anim-03"></div>
					<?php endif ?>
				</figure>
				
				<?php if ($items): ?>
					<div class="text">
						<ol>

							<?php foreach ($items as $item): ?>
								<li>

									<?php if ($item['title']): ?>
										<h6><?= $item['title'] ?></h6>
									<?php endif ?>
									
									<?php if ($item['text']): ?>
										<p><?= $item['text'] ?></p>
									<?php endif ?>
									
								</li>
							<?php endforeach ?>
							
						</ol>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>