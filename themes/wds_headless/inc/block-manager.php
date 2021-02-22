<?php
/**
 * Block Manager settings.
 *
 * @see https://wordpress.org/plugins/block-manager/
 * @author WebDevStudios
 * @package wds-headless-theme
 * @since 1.0
 */

if ( defined( 'BLOCK_MANAGER_VERSION' ) ) {

	/**
	 * Default list of disabled Gutenberg blocks.
	 *
	 * @author WebDevStudios
	 * @since 1.0
	 * @return array
	 */
	function wds_disabled_block() {
		return [
			'core/archives',
			'core/audio',
			'core/calendar',
			'core/categories',
			'core/file',
			'core/freeform',
			'core/html',
			'core/latest-comments',
			'core/latest-posts',
			'core/more',
			'core/nextpage',
			'core/rss',
			'core/search',
			'core/shortcode',
			'core/social-link',
			'core/social-links',
			'core/subhead',
			'core/tag-cloud',
			'core/text-columns',
			'core/verse',
			'core/video',
			'variation;core/embed;amazon-kindle',
			'variation;core/embed;animoto',
			'variation;core/embed;cloudup',
			'variation;core/embed;collegehumor',
			'variation;core/embed;crowdsignal',
			'variation;core/embed;dailymotion',
			'variation;core/embed;facebook',
			'variation;core/embed;flickr',
			'variation;core/embed;imgur',
			'variation;core/embed;instagram',
			'variation;core/embed;issuu',
			'variation;core/embed;kickstarter',
			'variation;core/embed;meetup-com',
			'variation;core/embed;mixcloud',
			'variation;core/embed;reddit',
			'variation;core/embed;reverbnation',
			'variation;core/embed;screencast',
			'variation;core/embed;scribd',
			'variation;core/embed;slideshare',
			'variation;core/embed;smugmug',
			'variation;core/embed;soundcloud',
			'variation;core/embed;speaker-deck',
			'variation;core/embed;spotify',
			'variation;core/embed;ted',
			'variation;core/embed;tiktok',
			'variation;core/embed;tumblr',
			'variation;core/embed;videopress',
			'variation;core/embed;wordpress',
			'variation;core/embed;wordpress-tv',
		];
	}
	add_filter( 'gbm_disabled_blocks', 'wds_disabled_block' );
}
