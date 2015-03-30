<?php
class SubmitInput extends TextInput implements iInput {
	
	protected $template = 'submitTableTemplate';
	private $label;
	
	public function __construct($label)
	{
		parent::__construct($label);
		$this->setAttr('value', $label)->setAttr('type', 'submit');
	}
	
}