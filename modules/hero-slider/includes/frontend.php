<div class="relative flexbelt-module">
	<div class="flexbox-hero-slider bxslider">

		<?php for ($i = 0; $i < count($settings->slides); $i++) :

			if (!is_object($settings->slides[$i])) {
				continue;
			} else {
				$slide = $settings->slides[$i];
			}

			$image_attributes = wp_get_attachment_image_src($slide->slide_background, 'full')[0];

		?>

			<div class="flex flex-col justify-center h-64 bg-center bg-cover md:h-128" style="background-image: url(<?php echo $image_attributes; ?>);">
				<div class="w-full max-w-screen-xl px-8 mx-auto">
					<h2 class="mb-0 text-xl font-light text-white md:text-4xl"><?php echo $slide->slide_header; ?></h2>
					<h3 class="mb-0 text-2xl font-bold leading-none text-white md:text-6xl"><?php echo $slide->slide_subheader; ?></h3>
					<a href="#" class="relative inline-block py-3 pl-6 pr-12 mt-6 overflow-hidden font-bold leading-none text-white rounded shadow bg-brand-500">Læs mere <span class="absolute top-0 bottom-0 right-0 w-8">
							<svg class="h-full" preserveAspectRatio="none" viewBox="0 0 100 100">
								<polygon points="40,0 100,0 100,100 0,100" />
							</svg>
						</span></a>
				</div>
			</div>

		<?php endfor; ?>

	</div>

	<svg class="absolute bottom-0 w-full h-16 pointer-events-none fill-current md:h-48 text-brand-500" preserveAspectRatio="none" viewBox="0 0 100 100">
		<polygon points="100,0 100,100 0,100" />
	</svg>
	<div id="flexbelt-hero-controls" class="absolute bottom-0 z-10 flex justify-center md:bottom-16 right-4 md:right-32">
		<div id="flexbelt-hero-pager">

		</div>
	</div>

</div>