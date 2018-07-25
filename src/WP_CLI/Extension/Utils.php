<?php

namespace WP_CLI\Extension;

class Utils {

	/**
	 * Gets the template path based on installation type.
	 */

	public static function get_template_path( $template ) {
		$command_root = \WP_CLI\Utils\phar_safe_path( dirname( __DIR__ ) );
		$template_path = "{$command_root}/templates/{$template}";

		if ( ! file_exists( $template_path ) ) {
			WP_CLI::error( "Couldn't find {$template}" );
		}

		return $template_path;
	}
}
