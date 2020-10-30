<div class="flexbelt-module">
	<div class="bg-brand-500">
		<div class="container flex flex-col items-center justify-around px-8 py-8 mx-auto md:flex-row">

			<div>
				<h2 class="m-0 text-3xl text-white"><?php echo $settings->slider_header; ?></h2>
			</div>
			<div class="flex-1 my-4 text-white border-0 border-white border-none md:my-0 md:border-solid md:border-l-2 md:ml-8 md:py-6 md:pl-8">
				<div class="max-w-md">
					<?php echo $settings->slider_description; ?>
				</div>
			</div>
			<div>
				<div id="flexbelt-cat-controls" class="">
					<div id="flexbelt-cat-arrows" class=""></div>
					<div id="flexbelt-cat-pager"></div>
				</div>
			</div>
		</div>
		<div class="relative">
			<div class="flexbox-cat-slider bxslider">

				<?php for ($i = 0; $i < count($settings->slides); $i++) :

					if (!is_object($settings->slides[$i])) {
						continue;
					} else {
						$slide = $settings->slides[$i];
					}

					$image_attributes = wp_get_attachment_image_src($slide->slide_background, 'full')[0];

				?>

					<a href="<?= $slide->cat_link; ?>" class="relative block bg-center bg-cover h-128 flexbelt-cat-slider-hover" style="background-image: url(<?php echo $image_attributes; ?>);">
						<div class="relative z-10 flex justify-around h-full">
							<div class="relative flex items-center justify-center w-full">
								<span class="mb-0 text-3xl font-bold text-white uppercase text-shadow"><?php echo $slide->slide_header; ?></span>
								<span class="absolute ml-4 bottom-4 text-brand-500 right-8">
									<svg viewBox="0 0 20 20" fill="currentColor" class="w-24 h-24 chevron-double-right">
										<path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
										<path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</div>
						</div>
					</a>

				<?php endfor; ?>

			</div>


		</div>

	</div>