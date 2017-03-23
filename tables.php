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
	<?php
		$sql="SELECT * FROM tables ORDER BY id ASC";
		$db->Query($sql);

		$table=array();

		if($db->result)
		{
			while($row=$db->result->fetch_assoc())
				$table[]=$row;
		}
	?>
	<div class="table-respo">
		<?php
			for($x=0; $x<15; $x++)
			{
		?>
		<span class="resto-tables-span <?php echo $table[$x]['status']; ?>">
			<?php echo $table[$x]['table_number']; ?>
			<span class="span-img">
				<?php
					$capacity=$table[$x]['capacity'];
					for($y=0;$y<$capacity;$y++)
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
		?>
	</div>
	<?php require_once("scripts.php"); ?>
</body>
</html>
