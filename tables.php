<?php
	require_once("dbconn.php");
	$db=new db();
	$db->Connect();
?>

<!DOCTYPE html>
<html ng-app="resto">
<head>
	<?php require_once("head.php"); ?>
	<link rel="stylesheet" href="css/style_ja.css">
	<link rel="stylesheet" href="css/style_jae.css">
</head>
<body>
	<nav class="nav-resto">
		<img src="img/el-logo.PNG" class="table-logo-resto">
	</nav>
	<div class="table-respo">
	<?php
		$sql="SELECT * FROM tables ORDER BY id ASC";
		$db->Query($sql);

		if($db->result)
		{
			while($row=$db->result->fetch_assoc()){
	?>
		<span class="resto-tables-span <?php echo $row['status']; ?>">
			<?php echo $row['table_number']; ?>
			<span class="span-img">
				<?php
					$capacity=$row['capacity'];
					for($x=0;$x<$capacity;$x++)
					{
				?>
					<img class="img-resto-table" src="img/customer.png">
				<?php
					}
				?>
			</span>
		</span>
		<?php
				}
			}
		?>
	</div>
	<?php require_once("scripts.php"); ?>
	<script type="text/javascript" src="js/tables.js"></script>
</body>
</html>
