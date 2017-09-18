<?php
	function smarty_function_test($params){//test为插件名
		$width = $params['width'];
		$height = $params['height'];
		$area = $width*$height;
		return $area;
	}
?>