<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="testimonials">
		<div class="content-width">

			<?php if ($title): ?>
				<h2 class="title-h2"><?= $title ?></h2>
			<?php endif ?>

			<?php if ($items): ?>
				<div class="content">

					<?php foreach ($items as $item): ?>
						<div class="item">

							<?php if ($item['text']): ?>
								<blockquote><?= $item['text'] ?></blockquote>
							<?php endif ?>
							
							<div class="bottom">

								<?php if ($item['name']): ?>
									<h6><?= $item['name'] ?></h6>
								<?php endif ?>

								<?php if ($item['organization']): ?>
									<p><?= $item['organization'] ?></p>
								<?php endif ?>

							</div>
						</div>
					<?php endforeach ?>
					
				</div>
			<?php endif ?>

			<?php if ($link): ?>
				<div class="btn-wrap">
					<a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>