<?php

/**
 * Displays the content of a blog in a bootstrap block
 */
class BootStrapBlogWidget extends BootStrapBlock {
	private static $singular_name = 'Blog Widget';
	private static $plural_name = 'Blog Widgets';

	private static $has_one = array(
		'Blog' => 'Blog'
	);
}