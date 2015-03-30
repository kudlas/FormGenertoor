<?php
/**
 * Interface of the main abstract class
 * @author Jan Kudlacek
 *
 */
interface iHtmlObject {
	
	/**
	 * Calls the Attributes object to save attributes to.
	 * @param string $name
	 * @param string $value
	 */
	public function setAttr($name, $value);
	/**
	 * @return string formatted html object for output
	 */
	public function __toString();
	
}