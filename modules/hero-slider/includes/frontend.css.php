<?php

FLBuilderCSS::responsive_rule( array(
  'settings'    => $settings,
  'setting_name'    => 'slide_height', // As in $settings->align.
  'selector'    => ".fl-node-$id .flexbox-hero-slider > div",
  'prop'        => 'height',
) );

?>