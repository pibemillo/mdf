<?php

/**
 * Shortcode class.
 *
 * @package fusion-builder
 * @since 1.0
 */
class FusionSC_Youtube {

	/**
	 * An array of the shortcode arguments.
	 *
	 * @static
	 * @access public
	 * @since 1.0
	 * @var array
	 */
	public static $args;

	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 1.0
	 */
	public function __construct() {

		add_filter( 'fusion_attr_youtube-shortcode', array( $this, 'attr' ) );
		add_filter( 'fusion_attr_youtube-shortcode-video-sc', array( $this, 'video_sc_attr' ) );

		add_shortcode( 'fusion_youtube', array( $this, 'render' ) );

	}

	/**
	 * Render the shortcode
	 *
	 * @access public
	 * @since 1.0
	 * @param  array  $args    Shortcode parameters.
	 * @param  string $content Content between shortcode.
	 * @return string          HTML output.
	 */
	public function render( $args, $content = '' ) {

		$defaults = FusionBuilder::set_shortcode_defaults(
			array(
				'hide_on_mobile' => fusion_builder_default_visibility( 'string' ),
				'class'          => '',
				'api_params'     => '',
				'autoplay'       => 'false',
				'center'         => 'no',
				'height'         => 360,
				'id'             => '',
				'width'          => 600,

			), $args
		);

		$defaults['height'] = FusionBuilder::validate_shortcode_attr_value( $defaults['height'], '' );
		$defaults['width']  = FusionBuilder::validate_shortcode_attr_value( $defaults['width'], '' );

		extract( $defaults );

		self::$args = $defaults ;

		$protocol = ( is_ssl() ) ? 'https' : 'http';

		if ( false !== strpos( $_SERVER['HTTP_USER_AGENT'], 'Trident/7.0;' ) && false !== strpos( $_SERVER['HTTP_USER_AGENT'], 'rv:11.0' ) ) {
			$protocol = 'https';
		}

		// Make sure only the video ID is passed to the iFrame.
		$pattern = '~(?:http|https|)(?::\/\/|)(?:www.|)(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/ytscreeningroom\?v=|\/feeds\/api\/videos\/|\/user\S*[^\w\-\s]|\S*[^\w\-\s]))([\w\-]{11})[a-z0-9;:@#?&%=+\/\$_.-]*~i';
		preg_match( $pattern, $id, $matches );
		if ( isset( $matches[1] ) ) {
			$id = $matches[1];
		}

		$html  = '<div ' . FusionBuilder::attributes( 'youtube-shortcode' ) . '>';
		$html .= '<div ' . FusionBuilder::attributes( 'youtube-shortcode-video-sc' ) . '>';
		$html .= '<iframe title="YouTube video player" src="' . $protocol . '://www.youtube.com/embed/' . $id . '?wmode=transparent&autoplay=0' . $api_params . '" width="' . $width . '" height="' . $height . '" allowfullscreen></iframe>';
		$html .= '</div></div>';

		return $html;

	}

	/**
	 * Parses the arguments.
	 *
	 * @access public
	 * @since 1.0
	 * @return array
	 */
	public function attr() {

		$attr = fusion_builder_visibility_atts( self::$args['hide_on_mobile'], array(
			'class' => 'fusion-video fusion-youtube',
		) );

		if ( 'yes' === self::$args['center'] ) {
			$attr['class'] .= ' center-video';
		} else {
			$attr['style'] = 'max-width:' . self::$args['width'] . 'px;max-height:' . self::$args['height'] . 'px;';
		}

		if ( 'true' == self::$args['autoplay'] || 'yes' === self::$args['autoplay'] ) {
			$attr['data-autoplay'] = 1;
		}

		if ( self::$args['class'] ) {
			$attr['class'] .= ' ' . self::$args['class'];
		}

		return $attr;

	}

	/**
	 * The video ShortCode arguments.
	 *
	 * @access public
	 * @since 1.0
	 * @return array
	 */
	function video_sc_attr() {

		$attr = array(
			'class' => 'video-shortcode',
		);

		if ( 'yes' === self::$args['center'] ) {
			$attr['style'] = 'max-width:' . self::$args['width'] . 'px;max-height:' . self::$args['height'] . 'px;';
		}

		return $attr;

	}
}
new FusionSC_Youtube();

/**
 * Map shortcode to Fusion Builder.
 *
 * @since 1.0
 */
function fusion_element_youtube() {
	fusion_builder_map( array(
		'name'       => esc_attr__( 'Youtube', 'fusion-builder' ),
		'shortcode'  => 'fusion_youtube',
		'icon'       => 'fusiona-youtube',
		'preview'    => FUSION_BUILDER_PLUGIN_DIR . 'js/previews/fusion-youtube-preview.php',
		'preview_id' => 'fusion-builder-block-module-youtube-preview-template',
		'params'     => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_attr__( 'Video ID', 'fusion-builder' ),
				'description' => esc_attr__( 'For example the Video ID for http://www.youtube.com/LOfeCR7KqUs is LOfeCR7KqUs.', 'fusion-builder' ),
				'param_name'  => 'id',
				'value'       => '',
			),
			array(
				'type'             => 'dimension',
				'remove_from_atts' => true,
				'heading'          => esc_attr__( 'Dimensions', 'fusion-builder' ),
				'description'      => esc_attr__( 'In pixels but only enter a number, ex: 600.', 'fusion-builder' ),
				'param_name'       => 'dimensions',
				'value'            => array(
					'width'  => '600',
					'height' => '350',
				),
			),
			array(
				'type'        => 'radio_button_set',
				'heading'     => esc_attr__( 'Autoplay Video', 'fusion-builder' ),
				'description' => esc_attr__( 'Set to yes to make video autoplaying.', 'fusion-builder' ),
				'param_name'  => 'autoplay',
				'value'       => array(
					esc_attr__( 'No', 'fusion-builder' )  => 'false',
					esc_attr__( 'Yes', 'fusion-builder' ) => 'true',
				),
				'default'     => 'false',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_attr__( 'Additional API Parameter', 'fusion-builder' ),
				'description' => esc_attr__( 'Use additional API parameter, for example &rel=0 to disable related videos.', 'fusion-builder' ),
				'param_name'  => 'api_params',
				'value'       => '',
			),
			array(
				'type'        => 'checkbox_button_set',
				'heading'     => esc_attr__( 'Element Visibility', 'fusion-builder' ),
				'param_name'  => 'hide_on_mobile',
				'value'       => fusion_builder_visibility_options( 'full' ),
				'default'     => fusion_builder_default_visibility( 'array' ),
				'description' => esc_attr__( 'Choose to show or hide the element on small, medium or large screens. You can choose more than one at a time.', 'fusion-builder' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_attr__( 'CSS Class', 'fusion-builder' ),
				'param_name'  => 'class',
				'value'       => '',
				'description' => esc_attr__( 'Add a class to the wrapping HTML element.', 'fusion-builder' ),
			),
		),
	) );
}
add_action( 'fusion_builder_before_init', 'fusion_element_youtube' );
