<?php
	session_start();
	require_once("dbconn.php");
	$db=new db();
	$db->Connect();
	
	$id=$_POST['id'];
	$tray_id=$_POST['tray_id'];
	$table_number=$_POST['table_number'];
	$_SESSION['tray_id']=$tray_id;
	$_SESSION['table_number']=$table_number;

	$sql="SELECT * FROM menu WHERE id='$id'";
	$db->Query($sql);

	if($db->result)
	{
		$row=$db->result->fetch_assoc();
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['qty'] += 1;
			$price = (float) $row['price'];
			$total = (int) $_SESSION['cart'][$id]['qty'] * $price;
			$_SESSION['cart'][$id]['price'] = $total;
		} else {
			$_SESSION['cart'][$id]['product_name'] = $row['name'];
			$_SESSION['cart'][$id]['qty'] = 1;
			$_SESSION['cart'][$id]['price'] = $row['price'];
		}
		$json['is_successful'] = true;
	} else {
		$json['is_successful'] = false;
	}

	echo json_encode($json);
?>