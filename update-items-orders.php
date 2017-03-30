<?php
	session_start();
	require_once("dbconn.php");
	$db=new db();
	$db->Connect();
	
	$id = $_POST['id'];
	$qty = $_POST['q'];
	
	$sql="SELECT * FROM menu WHERE id='$id'";
	$db->Query($sql);

	if($db->result)
	{
		$row=$db->result->fetch_assoc();
		$_SESSION['cart'][$id]['qty'] = $qty;

		$price = (float) $row['price'];
		$total = $price * $qty;
		$_SESSION['cart'][$id]['price'] = $total;

		$json['is_successful'] = true;
	} else {
		$json['is_successful'] = false;
	}

	echo json_encode($json);
?>