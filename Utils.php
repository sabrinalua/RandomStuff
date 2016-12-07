<?php

class Utils{

	//deleting stuff from directory
	function deleteDir($path) {
	    if (empty($path)){return false;}
	    return is_file($path) ?
	            @unlink($path) :
	            array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
		}
}

?>