<?php

namespace Theme\Backend;

/**
 * Class Editor
 *
 * @package Theme\Backend
 */
class Editor {
	/**
	 * Init hooks.
	 */
	public function init() {
		add_filter( 'tiny_mce_before_init', [ $this, 'tiny_mce_settings' ] );
		add_filter( 'mce_buttons', [ $this, 'filter_mce_buttons' ] );
		add_filter( 'mce_buttons_2', [ $this, 'filter_mce_buttons_2' ] );
	}

	/**
	 * Customizes the TinyMCE WYSIWYG editor in the backend
	 *
	 * @since 1.0.0
	 *
	 * @param  array $settings The array that TinyMCE uses to build the WYSIWYG editor.
	 * @return array           The modified settings array.
	 */
	public function tiny_mce_settings( $settings ) {
		// Set pasting as text as default. No more foreign style in the editor
		$settings['paste_as_text'] = true;

		/**
		 * Set block formats that can be used in the editor
		 *
		 * If "Paragraph=p" is not the first format, then shortcuts wont be displayed.
		 */
		$settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3';

		// Set inline style padding added to an element when using indent/outdent button
		$settings['indentation'] = '40px';

		return $settings;
	}

	/**
	 * Set buttons for TinyMCE editor.
	 *
	 * Possible values:
	 * - formatselect     Select paragraph format
	 * - bold             Bold
	 * - italic           Italic
	 * - bullist          Bulleted/Unordered list
	 * - numlist          Numbered/Ordered list
	 * - blockquote       Blockquote
	 * - alignleft        Align left
	 * - aligncenter      Align center
	 * - alignright       Align right
	 * - link             Create/edit link
	 * - unlink           Remove link
	 * - wp_more          Insert Read More tag
	 * - spellchecker     Spellchecking
	 * - dfw              Distraction-free writing mode
	 * - wp_adv           Toolbar toggle
	 *
	 * (The following are normally added to second row)
	 * - strikethrough    Strikethrough
	 * - hr               Insert horizontal line
	 * - forecolor        Text color
	 * - pastetext        Paste as text
	 * - removeformat     Clear formatting
	 * - charmap          Insert special character
	 * - outdent          Decrease indent
	 * - indent           Increase indent
	 * - undo             Undo
	 * - redo             Redo
	 * - wp_help          Keyboard Shortcuts
	 *
	 * @since 1.0.0
	 * @param array $buttons Array of butto names for the first row.
	 * @return array
	 */
	public function filter_mce_buttons( $buttons ) {
		return [
			'formatselect',
			'bold',
			'italic',
			'strikethrough',
			'blockquote',
			'hr',
			'bullist',
			'numlist',
			'indent',
			'outdent',
			'link',
			'unlink',
			'charmap',
			'removeformat',
			'undo',
			'redo',
			'dfw',
		];
	}

	/**
	 * Remove all buttons from second row of TinyMCE editor because all
	 * buttons needed are already added in the first row.
	 *
	 * @since 1.0.0
	 * @param array $buttons Array of button names for the second row.
	 * @return array
	 */
	public function filter_mce_buttons_2( $buttons ) {
		return [];
	}
}
