<?php

/**
 * A title, an image, and a short blurb that links to content elsewhere
 */
class BootStrapSummaryBlock extends BootStrapBlock {
	private static $singular_name = 'Summary Block';
	private static $plural_name = 'Summary Blocks';

	private static $has_one = array(
		'Link' => 'Link',
		'Image' => 'Image',
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->replaceField('LinkID', LinkField::create('LinkID', 'Link'));
		return $fields;
	}
}
