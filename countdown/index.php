<?php

	require("lib/cake.db.php");
	require("lib/cake.func.php");

	// ===================================

	$db  = new cake_db("localhost", "root", "", "auxano_royale");

	function action ($param) {
		return isset($_GET["q"]) && $_GET["q"] == trim($param);
	}

	// ===================================	

	if(action("addcontact")) {
		$email = protect($_POST["email"]);
		$db->query("SELECT id FROM au_contacts WHERE email='".$email."'")->result();
		if(!$count) {
			$db->save("au_contacts", array(
				"email"			=>	$email,
				"message"		=>	"Looking forward to it!",
				"type"			=>	1,
				"create_time"	=>	$now
			));
			$msg = $success ? "I just saved you ".$email : "I could not save you ".$email;
		} else {
			$msg = "I saved you already";
		}
		header("location: ..");
		// echo $msg;
	}

	// ===================================
?>