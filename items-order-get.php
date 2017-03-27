<?php
	session_start();
	require_once("dbconn.php");
	$db=new db();
	$db->Connect();
	
	$id = $_POST['id'];
	
	$sql="SELECT * FROM menu WHERE id='$id'";
	$db->Query($sql);

	if($db->result)
	{
		$row=$db->result->fetch_assoc();
		$_SESSION['cart'][$id]['product_name'] = $row['name'];
		$_SESSION['cart'][$id]['qty'] = 1;
		$_SESSION['cart'][$id]['price'] = $row['price'];

		$json['is_successful'] = true;
	} else {
		$json['is_successful'] = false;
	}

	echo json_encode($json);
?>