<?php

namespace Joomla\CMS\Form\Field;

defined('JPATH_PLATFORM') or die;

class NitishBahlField extends FormField
{
	protected $type = 'NitishBahl';
	
	protected $layout = 'joomla.form.field.nitishbahl';


	public function getInput() {
		return '<select id="'.$this->id.'" name="'.$this->name.'">'.
		       '<option value="1" >New York</option>'.
		       '<option value="2" >Chicago</option>'.
		       '<option value="3" >San Francisco</option>'.
		       '</select>';
	}
}