<?php
/**
 * Element to be added to StringBuffer as file
 *
 * @package Atk14\StringBuffer
 */
class StringBufferFileItem extends StringBufferItem{

	/**
	 * Initializes String buffer element
	 *
	 * @param string $filename
	 */
	function __construct($filename){
		$this->_Filename = $filename;
	}

	/**
	 * Get length of the item.
	 *
	 * As this item is a file it returns size of the file
	 *
	 * @return integer
	 */
	function getLength(){
		if(isset($this->_String)){ return parent::getLength(); }
		$size = filesize($this->_Filename);
		if($size === false){
			throw new Exception("StringBufferFileItem: cannot get the size of file $this->_Filename");
		}
		return $size;
	}

	function flush(){
		if(isset($this->_String)){ return parent::flush(); }
		readfile($this->_Filename);
	}

	/**
	 * Outputs content of buffer as string.
	 *
	 * @return string
	 */
	function toString(){
		if(isset($this->_String)){ return parent::toString(); }
		$content = Files::GetFileContent($this->_Filename,$err,$err_msg);
		if($err){
			throw new Exception("StringBufferFileItem: cannot read file $this->_Filename ($err_msg)");
		}
		return $content;
	}

	/**
	 * Replaces part of a string with another string.
	 *
	 * @param string $search
	 * @param string $replace
	 */
	function replace($search,$replace){
		$this->_String = $this->toString();
		return parent::replace($search,$replace);
	}

	function substr($offset,$length = null){
		if(is_null($length)){
			$length = $this->getLength() - $offset;
		}
		$f = fopen($this->_Filename,"rb"); // reading + binary
		if($f === false){
			throw new Exception("cannot open file $this->_Filename for reading");
		}
		$ret = fseek($f,$offset);
		if($ret !== 0){
			throw new Exception("cannot do fseek in file $this->_Filename");
		}
		$out = fread($f,$length);
		if($out === false){
			throw new Exception("cannot read from file $this->_Filename");
		}
		fclose($f);
		return $out;
	}
}
