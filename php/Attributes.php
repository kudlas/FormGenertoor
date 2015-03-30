<?php
/**
 * Object which holds html attributes for HtmlObjects
 * @author Jan Kudlacek
 *
 */
class Attributes
{
	private $attrList = array();
	
	/**
	 * sets the attribute
	 * @param string $name
	 * @param string $value
	 */
	public function setAttr($name,$value)
	{
		$this->attrList[$name] = $value;
	}
	
	/**
	 * Takes last attribute, if you wont fill $name
	 * @param string $name attribute name
	 */
	public function getAttr($name = null)
	{
		if(isset($name))
		{
			return $this->attrList[$name];
		}
		else
		{
			return end($this->attrList);
		}
	}
	
	/**
	 * @return string formatted attributes 
	 */
	public function __toString()
	{
		$return = '';
		foreach($this->attrList as $name => $value)
		{
			$return .= "$name='$value' ";
		}
		return $return;
	}
	
}