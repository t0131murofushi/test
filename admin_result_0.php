<?php 
  require_once('BM_admin.php');
  require_once('BookMaker.php');
/**************************************/
/*
  Book Maker Test
*/
/**************************************/

global $wpdb;

$selected = ""; 
	

  $current_user	=	wp_get_current_user();


//	echo    "<b>{$current_user->ID}</b><P>";

	$bk_admin	=	new BM_admin($wpdb);

	$bk			=	new classBookMaker($wpdb,$current_user->ID,$selected);

/*************************************************/
// 公開中のリストを表示する
/*************************************************/
	
	$bet_list	=	$bk_admin->bet_state_list();

	echo "{$bet_list}";

	//$bk->display_dump($bet_list);



	//echo $bk->display_rate();


?>