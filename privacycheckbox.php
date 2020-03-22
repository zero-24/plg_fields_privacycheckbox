<?php
/**
 * PrivacyCheckbox Plugin
 *
 * @copyright  Copyright (C) 2018 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

JLoader::import('components.com_fields.libraries.fieldsplugin', JPATH_ADMINISTRATOR);

/**
 * PrivacyCheckbox Plugin
 *
 * @since  1.0.0
 */
class PlgFieldsPrivacyCheckbox extends FieldsPlugin
{
	/**
	 * Transforms the field into a DOM XML element and appends it as a child on the given parent.
	 *
	 * @param   stdClass    $field   The field.
	 * @param   DOMElement  $parent  The field node parent.
	 * @param   JForm       $form    The form.
	 *
	 * @return  DOMElement
	 *
	 * @since   1.0.0
	 */
	public function onCustomFieldsPrepareDom($field, DOMElement $parent, Joomla\CMS\Form\Form $form)
	{
		$fieldNode = parent::onCustomFieldsPrepareDom($field, $parent, $form);

		if (!$fieldNode)
		{
			return $fieldNode;
		}

		$fieldNode->setAttribute('validate', 'options');

		$textValue = htmlspecialchars(Text::_($this->getTextValue($field)), ENT_COMPAT, 'UTF-8');

		$option = new DOMElement('option');
		$option->nodeValue = $textValue;
		$element = $fieldNode->appendChild($option);
		$element->setAttribute('value', 'privacycheckbox');

		return $fieldNode;
	}

	/**
	 * Returns the text value from the given field.
	 *
	 * @param   stdClass  $field  The field.
	 *
	 * @return  string
	 *
	 * @since   1.0.0
	 */
	public function getTextValue($field)
	{
		// Fetch the options from the plugin
		$params = clone $this->params;
		$params->merge($field->fieldparams);

		return strip_tags($params->get('textvalue', ''), '<a>');
	}

	/**
	 * Returns the email text value from the given field.
	 *
	 * @param   stdClass  $field  The field.
	 *
	 * @return  string
	 *
	 * @since   1.0.3
	 */
	public function getEmailTextValue($field)
	{
		// Fetch the options from the plugin
		$params = clone $this->params;
		$params->merge($field->fieldparams);

		$emailTextValue = $params->get('emailtextvalue', '');

		if (empty($emailTextValue))
		{
			return Text::_('PLG_FIELDS_PRIVACYCHECKBOX_CHECKBOX_CHECKED');
		}

		return $emailTextValue;
	}
}
