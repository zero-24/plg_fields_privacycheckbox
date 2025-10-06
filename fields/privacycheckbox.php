<?php
/**
 * PrivacyCheckbox Plugin
 *
 * @copyright  Copyright (C) 2018 - 2020 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

JFormHelper::loadFieldClass('Checkboxes');

/**
 * Form Field class for the Joomla Platform.
 * Single checkbox field.
 * This is a boolean field with null for false and the specified option for true
 *
 * @link   http://www.w3.org/TR/html-markup/input.checkbox.html#input.checkbox
 * @see    JFormFieldCheckboxes
 * @since  11.1
 */
class JFormFieldPrivacycheckbox extends JFormFieldCheckboxes
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0.0
	 */
	protected $type = 'PrivacyCheckbox';

	/**
	 * Flag to tell the field to always be in multiple values mode.
	 *
	 * @var    boolean
	 * @since  1.0.0
	 */
	protected $forceMultiple = false;
}
