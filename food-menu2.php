<?php
	session_start();
	require_once('dbconn.php');
	$db=new db();
	$db->Connect();

	$id=$_POST['dish_id'];
	$name=$_POST['dish_name'];
	$name=implode(",", $name);
	$qty=$_POST['dish_qty'];
	$qty=implode(",", $qty);
	$price=$_POST['dish_price'];
	$price=implode(",", $price);
	$tray_id=$_SESSION['tray_id'];
	$table_number=$_SESSION['table_number'];

	$query="UPDATE orders SET tray_id='$tray_id', dish_name='$name', qty='$qty', price='$price' WHERE table_id=table_number;";
	$db->Query($query);

	if($db->result){
		unset($_SESSION['cart']);
		$order_id=$db->conn->insert_id;

		$sql="UPDATE trays SET order_id='$order_id', status='purchased' WHERE id='$tray_id'";
		$db->Query($sql);

		unset($_SESSION['tray_id']);
		unset($_SESSION['table_number']);
		header('Location: tables.php');
	}else{
		echo mysql_error();
	}
?>