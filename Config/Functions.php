<?php

class Functions{

	function objectToArray($o) {
	
		$reflectionClass = new ReflectionClass(get_class($o));
		$array = array();
		foreach ($reflectionClass->getProperties() as $property) {
			$property->setAccessible(true);
			$array[$property->getName()] = $property->getValue($o);
			$property->setAccessible(false);
		}
		return $array;
		 
	}

	
	function arrayToObject($ar){
		if (is_array($ar)) {
			/*
			 * Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return (object) array_map( array( __CLASS__, 'arrayToObject' ), $ar);
		}
		else {
			// Return object
			return $ar;
		}
	}
}