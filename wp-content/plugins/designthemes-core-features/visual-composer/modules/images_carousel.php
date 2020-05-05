<?php add_action( 'vc_before_init', 'dt_sc_images_carousel_vc_map' );
function dt_sc_images_carousel_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Images carousel", 'dtthemes-core' ),
		"base" => "dt_sc_images_carousel",
		"icon" => "dt_sc_images_carousel",
		"category" => DT_VC_CATEGORY,
		'description' => esc_html__( 'Images carousel with images', 'dtthemes-core' ),
		"params" => array(
			
			array(
				'type' => 'attach_images',
				'heading' => esc_html__( 'Images', 'dtthemes-core' ),
				'param_name' => 'images',
				'description' => esc_html__( 'Select images from media library', 'dtthemes-core' )
			)
		)	 
	) );
}?>