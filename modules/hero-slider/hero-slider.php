<?php
class FlexbeltHeroSliderModuleClass extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'     => __('Flexbelt Hero Slider', 'flexbelt-bb-modules'),
			'description'     => __('A totally awesome module!', 'flexbelt-bb-modules'),
			'group'    => __('Inzite Media', 'flexbelt-bb-modules'),
			'category' => __('Content', 'flexbelt-bb-modules'),
			'dir' => FLEXBELT_MODULES_DIR . 'modules/hero-slider/',
			'url' => FLEXBELT_MODULES_URL . 'modules/hero-slider/',
			'icon'     => 'button.svg',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'  => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));

		$this->add_css('jquery-bxslider');
		$this->add_js('jquery-bxslider');
	}
}

FLBuilder::register_module('FlexbeltHeroSliderModuleClass', array(
	'flexbelt-content-tab' => array(
		'title'  => __('Content', 'flexbelt-bb-modules'),
		'sections' => array(
			'Styling' => array(
				'title'     => __('Slides', 'flexbelt-bb-modules'),
				'fields' => array(
					'slide_height' => array(
						'type'        => 'unit',
						'label'       => 'Slide højde',
						'description' => 'px',
						'default' => 450,
						'responsive'  => true,
						'units'      => array(
							'px',
							'vw',
							'%',
						),
						'slider'     => array(
							'px' => array(
								'min'  => 0,
								'max'  => 1024,
								'step' => 16,
							),
						),
					),
				)
			),
			'Slides'  => array(
				'title'     => __('Slides', 'flexbelt-bb-modules'),
				'fields' => array(
					'slides' => array(
						'type'          => 'form',
						'label'         => __('Slide', 'fl-builder'),
						'form'          => 'hero_slide_form', // ID of a registered form.
						'preview_text'  => 'slide_header', // ID of a field to use for the preview text.
						'multiple'     => true,
					)
				)
			),
		)
	),
));

/**
 * Register slider form fields
 */
FLBuilder::register_settings_form('hero_slide_form', array(
	'title' => __('Slide', 'fl-builder'),
	'tabs'  => array(
		'general'      => array(
			'title'         => __('Slide content', 'fl-builder'),
			'sections'      => array(
				'general'       => array(
					'title' => '',
					'fields'        => array(
						'slide_header' => array(
							'type'          => 'text',
							'label'         => __('Heading', 'fl-builder')
						),
						'slide_subheader' => array(
							'type'          => 'text',
							'label'         => __('Subheading', 'fl-builder')
						),
						'slide_background' => array(
							'type'          => 'photo',
							'label'         => __('Photo Field', 'fl-builder'),
							'show_remove'   => true,
						),
						'link' => array(
							'type'          => 'link',
							'label'         => __('Link', 'fl-builder')
						),
					)
				),
			)
		)
	)
));
