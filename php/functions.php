<?php
	if(isset($_SESSION['st_client_admin'])){
		function generate_random_password($length, $uppercase, $lowercase, $numbers, $symbols){
			$uppercase_list = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
			$lowercase_list = "abcdefghijklmnopqrstuvyxwz";
			$numbers_list = "0123456789";
			$symbols_list = "!@#$%&*()_+=";
			$random_password = '';
			if ($uppercase){
				$random_password .= str_shuffle($uppercase_list);
			}
			if ($lowercase){
				$random_password .= str_shuffle($lowercase_list);
			}
			if ($numbers){
				$random_password .= str_shuffle($numbers_list);
			}
			if ($symbols){
				$random_password .= str_shuffle($symbols_list);
			}
			return substr(str_shuffle($random_password), 0, $length);
		}
	}
?>