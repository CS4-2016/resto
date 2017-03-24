<?php
	require_once("dbconn.php");
	$db=new db();
	$db->Connect();
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