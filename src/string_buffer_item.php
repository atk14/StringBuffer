<?php
/**
 * Element to be added to StringBuffer as string
 *
 * @package Atk14\StringBuffer
 */
class StringBufferItem{

	/**
	 * Initializes file buffer element
	 *
	 * @param string $string
	 */
	function __construct($string){
		$this->_String = $string;
	}

	/**
	 * Returns length of string in buffer.
	 *
	 * @return int
	 */
	function getLength(){ return strlen($this->_String); }
	function flush(){ echo $this->_String; }

	/**
	 * Returns string representation of the object.
	 *
	 * @return string
	 */
	function toString(){ return $this->_String; }

	/**
	 * Method that returns string representation of the object.
	 */
	function __toString(){ return $this->toString(); }

	/**
	 * Replace part of string in buffer
	 *
	 * @param string $search
	 * @param string $replace
	 */
	function replace($search,$replace){
		$this->_String = str_replace($search,$replace,$this->_String);
	}

	function substr($offset,$length = null){
		if(is_null($length)){
			return substr($this->_String,$offset);
		}
		return substr($this->_String,$offset,$length);
	}
}
