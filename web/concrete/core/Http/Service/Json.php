<?
namespace Concrete\Core\Http\Service;
/**
 * @package Helpers
 * @category Concrete
 * @author Andrew Embler <andrew@concrete5.org>
 * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
 * @license    http://www.concrete5.org/license/     MIT License
 */

/**
 * Functions for working with JSON (JavaScript Object Notation)
 * @package Helpers
 * @category Concrete
 * @author Andrew Embler <andrew@concrete5.org>
 * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
 * @license    http://www.concrete5.org/license/     MIT License
 */
class Json {
	
	/** 
	 * Decodes a JSON string into a php variable
	 * @param string $string
	 * @param bool $assoc [default: false] When true, returned objects will be converted into associative arrays, when false they'll be converted into stdClass instances. 
	 * @return mixed
	 */
	public function decode($string, $assoc = false) {
		return json_decode($string, $assoc);
	}
	
	
	/** 
	 * Encodes a data structure into a JSON string
	 * @param mixed $mixed
	 * @return string
	 */
	public function encode($mixed) {
		return json_encode($mixed);
	}
	


}