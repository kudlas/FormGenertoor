<?php
/**
 * Class to define input, inherits from HtmlObject
 * @author Jan Kudlacek
 *
 */
class TextInput extends HtmlObject implements iInput {
	
	protected $template = 'inputTableTemplate';
	private $label;
	private $id;
	
	public function __construct($label)
	{
		parent::__construct();
		$this->label = $label;
		
		$this->id = 'a'.substr(md5(rand()),0, 5);
		$this->setAttr('id', $this->id);
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getLabel()
	{
		return $this->label;
	}
	
}