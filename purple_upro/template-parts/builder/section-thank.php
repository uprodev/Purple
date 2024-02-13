<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="steps">
		<div class="form-select">
			<div class="swiper step-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide swiper-slide-5">
						<div class="content-width">
							<figure>
								<div id="anim-01"></div>
							</figure>
							<div class="text">

								<?php if ($title): ?>
									<h3 class="title-final"><?= $title ?></h3>
								<?php endif ?>
								
								<?php if ($socials): ?>
									<div class="soc-wrap">
										<ul>

											<?php foreach ($socials as $item): ?>

												<?php if ($item['icon']): ?>
													<li>
														<a href="<?= $item['url'] ?>" target="_blank">
															<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
														</a>
													</li>
												<?php endif ?>
												
											<?php endforeach ?>
											
										</ul>
									</div>
								<?php endif ?>
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="swiper-pagination step-pagination"></div>
	</section>

	<?php endif; ?>