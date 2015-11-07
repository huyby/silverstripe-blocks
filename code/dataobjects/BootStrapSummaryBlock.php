<?php

/**
 * A title, an image, and a short blurb that links to content elsewhere
 */
class BootStrapSummaryBlock extends BootStrapBlock {
	private static $singular_name = 'Summary Block';
	private static $plural_name = 'Summary Blocks';

	private static $db = array(
		'Link' => 'Varchar(255)',
		'OpenInNewWindow' => 'Boolean',
	);

	private static $has_one = array(
		'Image' => 'Image',
	);
}
