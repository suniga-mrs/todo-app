<?php

	$url_path = "/batch19/todo-app";
	// $url_path = "/mydev/to-do-app"; // path at home

	define("ROOT_URL", $url_path);

	function get_url() {
		echo ROOT_URL;
	}
?>