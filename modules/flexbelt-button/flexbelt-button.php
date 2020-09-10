<?php 

class FlexbeltButtonModuleClass extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name'            => __( 'Flexbelt Button', 'fl-builder' ),
      'description'     => __( '', 'fl-builder' ),
      'group'    => __('Inzite Media', 'flexbelt-bb-modules'),
			'category' => __('Content', 'flexbelt-bb-modules'),
      'dir'             => FLEXBELT_MODULES_DIR . 'modules/flexbelt-button/',
      'url'             => FLEXBELT_MODULES_URL . 'modules/flexbelt-button/',
      'icon'            => 'button.svg',
      'editor_export'   => true, // Defaults to true and can be omitted.
      'enabled'         => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }
}


FLBuilder::register_module( 'FlexbeltButtonModuleClass', array(
  'button-tab'      => array(
    'title'         => __( 'Button', 'fl-builder' ),
    'sections'      => array(
      'content-section'  => array(
        'title'         => __( 'Content', 'fl-builder' ),
        'fields'        => array(
          'label'     => array(
            'type'          => 'text',
            'label'         => __( 'Label', 'fl-builder' ),
          ),
          'link' => array(
            'type'          => 'link',
            'label'         => __('Link Field', 'fl-builder')
          ),
          'button_align' => array(
            'type'    => 'align',
            'label'   => 'Button align',
            'default' => 'left',
            'values'  => array(
              'left'   => 'flex-start',
              'center' => 'flex-center',
              'right'  => 'flex-end',
          ),
        ),
        )
        ),
        'color-section'  => array(
          'title'         => __( 'Colors', 'fl-builder' ),
          'fields'        => array(
            'bg_color' => array(
              'type'          => 'color',
              'label'         => __( 'Baggrundsfarve', 'fl-builder' ),
              'default'       => 'ac1316',
              'show_reset'    => true,
              'show_alpha'    => true
            ),
            'bg_hover_color' => array(
              'type'          => 'color',
              'label'         => __( 'Baggrundsfarve ved hover', 'fl-builder' ),
              'default'       => '52010c',
              'show_reset'    => true,
              'show_alpha'    => true
            ),
            'wedge_color' => array(
              'type'          => 'color',
              'label'         => __( 'Vinkelfarve', 'fl-builder' ),
              'default'       => '3f3f3f',
              'show_reset'    => true,
              'show_alpha'    => true
            ),
            'wedge_hover_color' => array(
              'type'          => 'color',
              'label'         => __( 'Vinkelfarve ved hover', 'fl-builder' ),
              'default'       => '000000',
              'show_reset'    => true,
              'show_alpha'    => true
            ),
            'text_color' => array(
              'type'          => 'color',
              'label'         => __( 'Tekstfarve', 'fl-builder' ),
              'default'       => 'ffffff',
              'show_reset'    => true,
              'show_alpha'    => true
            ),
            'text_hover_color' => array(
              'type'          => 'color',
              'label'         => __( 'Tekstfarve ved hover', 'fl-builder' ),
              'default'       => 'ffffff',
              'show_reset'    => true,
              'show_alpha'    => true
            ),
          )
        )
    )
  )
) );

?>