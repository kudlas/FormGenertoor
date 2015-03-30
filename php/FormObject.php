<?php
/**
 * Form Object
 * @author Jan Kudlacek
 *
 */
class FormObject extends HtmlObject {

	const INPUT_TEXT = 'TextInput';
	const INPUT_TEXTAREA = 'TextAreaInput';

	/**
	 * filename of template
	 * @var string
	 */
	protected $template = 'formTableTemplate';
	
	/**
	 * inputs that form holds
	 * @var array
	 */
	private $inputs = array();
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * @param string $label pretty much self explanatory
	 * @param const $type constant of object to create
	 */
	public function addInput($label, $type = self::INPUT_TEXT)
	{
		$input = new $type($label);
		$this->inputs[] = $input;
		
		return $input;
	}
	
	/**
	 * @return array all inputs that form holds
	 */
	public function getInputs()
	{
		return $this->inputs;
	}
	
}