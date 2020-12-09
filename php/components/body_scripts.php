<?php
	//for all pages
	$scripts['all']['jquery'] = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
	$scripts['all']['popper'] = '<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>';
	$scripts['all']['bootstrap'] = '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>';
	$scripts['all']['product'] = '<script type="text/javascript" src="js/document_js/product_ajax.js"></script>';
	$scripts['all']['category'] = '<script type="text/javascript" src="js/document_js/category_ajax.js"></script>';
	foreach($scripts['all'] as $value){echo $value;}
	//for select pages
	$scripts['select']['login'] = '<script type="text/javascript" src="js/login_js/login_ajax.js"></script>';
	$scripts['select']['new_client'] = '<script type="text/javascript" src="js/client_js/new_client_ajax.js"></script>';
	$scripts['select']['admin'] = '<script type="text/javascript" src="js/admin_js/admin_ajax.js"></script>';
	$scripts['select']['client'] = '<script type="text/javascript" src="js/client_js/client_ajax.js"></script>';
	$scripts['select']['image'] = '<script type="text/javascript" src="js/document_js/image.js"></script>';
	$scripts['select']['cep_fetch'] = '<script type="text/javascript" src="js/document_js/cep_fetch.js"></script>';
	$scripts['select']['js_mask'] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>';
	$scripts['select']['admin_product'] = '<script type="text/javascript" src="js/admin_js/admin_product_ajax.js"></script>';
	$scripts['select']['admin_category'] = '<script type="text/javascript" src="js/admin_js/admin_category_ajax.js"></script>';
	$scripts['select']['admin_message'] = '<script type="text/javascript" src="js/admin_js/admin_message_ajax.js"></script>';
	$scripts['select']['client_message'] = '<script type="text/javascript" src="js/client_js/client_message_ajax.js"></script>';
	if(isset($_SESSION['st_client_admin'])){
		switch($_SESSION['st_client_admin']){
			case 0:
				echo $scripts['select']['client'];
			break;
			case 1:
				echo $scripts['select']['admin'];
			break;
			default:
				return false;
		}
	}
	if(isset($_GET['page_source'])){
		switch($_GET['page_source']){
			case 'login':
				echo $scripts['select']['login'];
			break;
			case 'new_client':
				echo $scripts['select']['js_mask'];
				echo $scripts['select']['new_client'];
				echo $scripts['select']['image'];
				echo $scripts['select']['cep_fetch'];
			break;
			case 'new_admin':
				echo $scripts['select']['js_mask'];
				echo $scripts['select']['image'];
				echo $scripts['select']['cep_fetch'];
			break;
			case 'admin_panel':
				return false;
			break;
		}
	}
	if(isset($_GET['use_image'])){
		if($_GET['use_image'] == true){
			echo $scripts['select']['image'];
		}
		else{
			return false;
		}
	}
	if(isset($_GET['use_admin_product'])){
		if($_GET['use_admin_product'] == true){
			echo $scripts['select']['admin_product'];
		}
		else{
			return false;
		}
	}
	if(isset($_GET['use_admin_category'])){
		if($_GET['use_admin_category'] == true){
			echo $scripts['select']['admin_category'];
		}
		else{
			return false;
		}
	}
	if(isset($_GET['use_admin_message'])){
		if($_GET['use_admin_message'] == true){
			echo $scripts['select']['admin_message'];
		}
		else{
			return false;
		}
	}
	if(isset($_GET['use_client_message'])){
		if($_GET['use_client_message'] == true){
			echo $scripts['select']['client_message'];
		}
		else{
			return false;
		}
	}
?>