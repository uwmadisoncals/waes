<?php

	function whitebox_func( $atts, $content = null ) {

		return '<div class="whitebox">' . $content . '</div>';

	}

	add_shortcode( 'whitebox', 'whitebox_func' );


?>