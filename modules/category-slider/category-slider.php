<?php
class FlexbeltCategorySliderModuleClass extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'     => __('Flexbelt Category Slider', 'flexbelt-bb-modules'),
			'description'     => __('A totally awesome module!', 'flexbelt-bb-modules'),
			'group'    => __('Inzite Media', 'flexbelt-bb-modules'),
			'category' => __('Content', 'flexbelt-bb-modules'),
			'dir' => FLEXBELT_MODULES_DIR . 'modules/category-slider/',
			'url' => FLEXBELT_MODULES_URL . 'modules/category-slider/',
			'icon'     => 'button.svg',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'  => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));

		$this->add_css('jquery-bxslider');
		$this->add_js('jquery-bxslider');
	}
}

FLBuilder::register_module('FlexbeltCategorySliderModuleClass', array(
	'flexbelt-content-tab' => array(
		'title'  => __('Content', 'flexbelt-bb-modules'),
		'sections' => array(
			'heading'  => array(
				'title'     => __('Heading', 'flexbelt-bb-modules'),
				'fields' => array(
					'slider_header'         => array(
						'type'          => 'text',
						'label'         => __('Heading', 'fl-builder')
					),
					'slider_description'         => array(
						'type'          => 'text',
						'label'         => __('Description', 'fl-builder')
					),
					'slides' => array(
						'type'          => 'form',
						'label'         => __('Slide', 'fl-builder'),
						'form'          => 'slide_form', // ID of a registered form.
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
FLBuilder::register_settings_form('slide_form', array(
	'title' => __('Slide', 'fl-builder'),
	'tabs'  => array(
		'general'      => array(
			'title'         => __('Slide content', 'fl-builder'),
			'sections'      => array(
				'general'       => array(
					'title'         => '',
					'fields'        => array(
						'slide_header'         => array(
							'type'          => 'text',
							'label'         => __('Overskrift', 'fl-builder')
						),
						'slide_background' => array(
							'type'          => 'photo',
							'label'         => __('Foto', 'fl-builder'),
							'show_remove'   => true,
						),
						'link' => array(
							'type'          => 'Link',
							'label'         => __('Link', 'fl-builder')
						),
					)
				),
			)
		)
	)
));
