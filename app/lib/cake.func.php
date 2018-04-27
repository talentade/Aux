<?php

/**
 * query("add") i.e if(query("add"))
 *
 * @param 	string
 * @return 	$_REQUEST["query"] == param
 */
function query ($a) {
	return trim($a) == $_REQUEST["query"];
}

/**
 * q("add") i.e if(q("add"))
 *
 * @param 	string
 * @return 	$_POST["q"] == param
 */
function q ($a) {
	return trim($a) == $_POST["q"];
}

/**
 * protect(<string>)
 *
 * @param 	string
 * @return 	Protected string
 */
function protect ($a) {
	if(is_array($a)) return $a;
	$mqa = get_magic_quotes_gpc();
	$mep = function_exists("mysql_real_escape_string");
	if($mep) {
		if($mqa) $a = stripslashes($a);
		$a = mysql_real_escape_string($a);
	} else {
		if(!$mqa) $a = addslashes($a);
	}
	return htmlentities($a);
}

/**
 * isset_post("add")
 *
 * @param 	string
 * @param 	string ~ function name
 * @param 	int
 * @return 	v_print($_POST) + isset($_POST["add"])
 */
function isset_post ($a = "", $b = 0, $c = 0) {
	v_print($_POST, $b, $c);
	return !empty($a) ? isset($_POST[$a]) : count($_POST) > 0;
}

/**
 * isset_get("add")
 *
 * @param 	string
 * @param 	string ~ function name
 * @param 	int
 * @return 	v_print($_GET) + isset($_GET["add"])
 */
function isset_get ($a = "", $b = 0, $c = 0) {
	v_print($_GET, $b, $c);
	return !empty($a) ? isset($_GET[$a]) : count($_GET) > 0;
}

/**
 * Turn array to variables
 *
 * @param 	array
 */
function print_v ($a = 0) {
	$arr = is_array($a) ? $a : $_POST;
	foreach ($arr as $k => $v) {
	    global ${$k};
	    ${$k} = $v;
	}
}

/**
 * Turn array to variables
 *
 * @param 	array
 * @param 	string 		~ function name
 * @param 	int 		~ if > 1 will echo array keys for debuging purpose
 * @var 	$is_empty 	~ list of empty variables
 */
function v_print ($a = 0, $b = 0, $c = 0) {
	$arr = is_array($a) ? $a : $_POST;
	$emp = array();
	foreach ($arr as $k => $v) {
	    if($c > 1) echo $k." ";
		if(is_callable($b))
		$v = $c > 0 ? $b($v, $k) : $b($v);
	    global ${$k};
	    ${$k} = $v;
	    if(!is_array($v) && empty($v)) array_push($emp, $k);
	}
	global $is_empty;
	$is_empty = $emp;
}

/**
 * Iterate through a given array
 *
 * @param 	array 		~ 	Array of data
 * @param 	function 	~	function(key, value)
 * @param 	else 		~	Works if array is empty
 */
$each = function ($arr, $func, $else = "") {
	if(is_int($arr)) {
		for ($i=0; $i < $arr; $i++) $func($i);
		return;
	} else if (is_array($arr)) {
		if(!empty($else) && count($arr) == 0) {
			echo $else;
			return;
		}
		foreach ($arr as $k => $v) $func($k, $v);
	} else {
		echo $else;
		return;
	}
};

?>