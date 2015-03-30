<?php
/**
 * Main abstract class of the html object
 * @author Jan Kudlacek
 *
 */
abstract class HtmlObject implements iHtmlObject
{
	/**
	 * 
	 * @var Attributes object holding attributes
	 */
	private $attributes;
	
	/**
	 * @var string template to use
	 */
	protected $template = 'formTableTemplate';
	
	public function __construct()
	{
		$this->attributes = new Attributes();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see iHtmlObject::setAttr()
	 */
	public function setAttr($name, $value)
	{
		$this->attributes->setAttr($name, $value);
		return $this;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see iHtmlObject::__toString()
	 */
	public function __toString()
	{
		$path = 'templates/'.$this->template.'.php';
		
		ob_start();
	
		if( is_readable($path) && $path )
		{
			include $path;
		}
		else
		{
			return FALSE;
		}
	
			return ob_get_clean();
	}
	
}