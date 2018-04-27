<?php
/**
* @author Clemz Team
*/

require "lib/cake.db.php";
require "lib/cake.func.php";

class auxano
{

	function __construct()
	{
		# code...
	}

	public function state ($a)
	{
		return isset($_REQUEST["dir"]) && $_REQUEST["dir"] == $a;
	}

	public function commit ($a)
	{
		$_SESSION["_user"] = $a;
		$_SESSION["_app_"] = "auxano_royale";
		return $this;
	}

	public function sendMail ($name, $email, $subject, $message)
	{
		$cmail = "info@auxanaroyale.com.ng";
		$headers = "From: auxanaroyale.com [".$name."] as ".$email."\r\n"."CC: ".$cmail;
		return mail($cmail, $subject, $message, $headers);
	}

	public function page () {
		$d = $_GET["dir"];
		if(strpos($d, ".") !== false)
		header("location: ".explode(".", $d)[0]);
		$pages = ["home", "contact", "order"];
		return "pages/".(in_array($d, $pages) ? $d : "blank").".php";
	}

	public function val ($a)
	{
		$a = $_POST[$a];
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

	public function encode ($data)
	{
		return addslashes(serialize($data));
	}

	public function decode ($data)
	{
		return unserialize(stripslashes($data));
	}

}

$app 	= new auxano();
$db  	= new cake_db("auxano_royale");
$page 	= $app->page();
?>