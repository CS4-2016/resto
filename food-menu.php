<?php
	require_once("dbconn.php");
	$db=new db();
	$db->Connect();
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		require_once("head.php")
	?>
	<link rel="stylesheet" href="css/style_godfrey.css">

</head>
<body>

<?php
	$table_number=$_GET['table_number'];

	$sql="INSERT INTO orders(table_id) VALUES('$table_number')";
	$db->Query($sql);

	$sql="INSERT INTO trays(table_id,status) VALUES('$table_number','not_yet_purchased')";
	$db->Query($sql);

	if($db->result)
	{
		$tray_id=$db->conn->insert_id;
		$query="UPDATE tables SET tray_id='$tray_id', status='occupied' WHERE table_number='$table_number'";
		$db->Query($query);
	}
?>

<div class="menu-container">
	<div class="food-item">
		<div class="worko-tabs">
			<input class="state" type="radio" title="tab-one" name="tabs-state" id="tab-one" checked />
			<input class="state" type="radio" title="tab-two" name="tabs-state" id="tab-two" />
			<input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three" />
			<input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-four" />

			<div class="tabs flex-tabs">
				<div class="menu-header">
					<label for="tab-one" id="tab-one-label" class="tab">Appetizer</label>
					<label for="tab-two" id="tab-two-label" class="tab">Main Course</label>
					<label for="tab-three" id="tab-three-label" class="tab">Beverage</label>
					<label for="tab-four" id="tab-four-label" class="tab">Dessert</label>
				</div>

				<div id="tab-one-panel" class="panel appetizer active">
					<header>
						<?php
							$sql="SELECT * FROM menu WHERE category='Appetizer'";
							$db->Query($sql);

							if($db->result)
							{
								while($row=$db->result->fetch_assoc())
								{
									$name=$row['name'];
									$price=$row['price'];
						?>
						<div class="food-menu">
							<img src="menu-img/<?php echo $row['photo']; ?>" alt id="myImg<?php echo $row['id']; ?>">
							<div class="food-name">
								<p class='description_content'><?php echo $row['name']; ?>
									<a href="javascript: void(0)" onclick="add_to_cart(<?php echo $row['id']; ?>, <?php echo $tray_id; ?>, <?php echo $table_number; ?>)" class="cd-add-to-cart" data-price="<?php $row['price']; ?>"><br><button type="button" class="btn btn-primary add-tray">&#xf067; Add to Tray</button></a>
									<span class="currency">&#8369;<?php echo $row['price']; ?></span>
								</p>
							</div>
							<div id="myModal<?php echo $row['id']; ?>" class="modal">
								<span class="close">&times;</span>
								<img class="modal-content" id="img01">
								<div id="caption"><?php echo $row['description']; ?></div>
							</div>
						</div>
						<?php
								}
							}
						?>
					</header>
				</div>
				
				<div id="tab-two-panel" class="panel">
					<header>
						<?php
							$sql="SELECT * FROM menu WHERE category='Main Course'";
							$db->Query($sql);

							if($db->result)
							{
								while($row=$db->result->fetch_assoc())
								{
									$name=$row['name'];
									$price=$row['price'];
						?>
						<div class="food-menu">
							<img src="menu-img/<?php echo $row['photo']; ?>" alt id="myImg<?php echo $row['id']; ?>">
							<div class="food-name">
								<p class='description_content'><?php echo $row['name']; ?>
									<a href="javascript: void(0)" onclick="add_to_cart(<?php echo $row['id']; ?>, <?php echo $tray_id; ?>, <?php echo $table_number; ?>)" class="cd-add-to-cart" data-price="<?php $row['price']; ?>"><br><button type="button" class="btn btn-primary add-tray">&#xf067; Add to Tray</button></a>
									<span class="currency">&#8369;<?php echo $row['price']; ?></span>
								</p>
							</div>
							<div id="myModal<?php echo $row['id']; ?>" class="modal">
								<span class="close">&times;</span>
								<img class="modal-content" id="img01">
								<div id="caption"><?php echo $row['description']; ?></div>
							</div>
						</div>
						<?php
								}
							}
						?>
					</header>
				</div>
				<div id="tab-three-panel" class="panel">
					<header>
						<?php
							$sql="SELECT * FROM menu WHERE category='Beverage'";
							$db->Query($sql);

							if($db->result)
							{
								while($row=$db->result->fetch_assoc())
								{
									$name=$row['name'];
									$price=$row['price'];
						?>
						<div class="food-menu">
							<img src="menu-img/<?php echo $row['photo']; ?>" alt id="myImg<?php echo $row['id']; ?>">
							<div class="food-name">
								<p class='description_content'><?php echo $row['name']; ?>
									<a href="javascript: void(0)" onclick="add_to_cart(<?php echo $row['id']; ?>, <?php echo $tray_id; ?>, <?php echo $table_number; ?>)" class="cd-add-to-cart" data-price="<?php $row['price']; ?>"><br><button type="button" class="btn btn-primary add-tray">&#xf067; Add to Tray</button></a>
									<span class="currency">&#8369;<?php echo $row['price']; ?></span>
								</p>
							</div>
							<div id="myModal<?php echo $row['id']; ?>" class="modal">
								<span class="close">&times;</span>
								<img class="modal-content" id="img01">
								<div id="caption"><?php echo $row['description']; ?></div>
							</div>
						</div>
						<?php
								}
							}
						?>
					</header>
				</div>
				<div id="tab-four-panel" class="panel">
					<header>
						<?php
							$sql="SELECT * FROM menu WHERE category='Dessert'";
							$db->Query($sql);

							if($db->result)
							{
								while($row=$db->result->fetch_assoc())
								{
									$name=$row['name'];
									$price=$row['price'];
						?>
						<div class="food-menu">
							<img src="menu-img/<?php echo $row['photo']; ?>" alt id="myImg<?php echo $row['id']; ?>">
							<div class="food-name">
								<p class='description_content'><?php echo $row['name']; ?>
									<a href="javascript: void(0)" onclick="add_to_cart(<?php echo $row['id']; ?>, <?php echo $tray_id; ?>, <?php echo $table_number; ?>)" class="cd-add-to-cart" data-price="<?php $row['price']; ?>"><br><button type="button" class="btn btn-primary add-tray">&#xf067; Add to Tray</button></a>
									<span class="currency">&#8369;<?php echo $row['price']; ?></span>
								</p>
							</div>
							<div id="myModal<?php echo $row['id']; ?>" class="modal">
								<span class="close">&times;</span>
								<img class="modal-content" id="img<?php echo $row['id']; ?>">
								<div id="caption"><?php echo $row['description']; ?></div>
							</div>
						</div>
						<?php
								}
							}
						?>
					</header>
				</div>
			</div>
		</div>
	</div>

	<div class="order-item">
			<div class="header">
				Table #<?php echo $_GET['table_number']; ?>:
			</div>
		<form action="food-menu2.php" method="post">
			<div class="item-order">
				
			</div>
			<center><input type="submit" value="Place Order" class="btn-placeorder"></center>
		</form>
	</div>
</div>
	
	<?php require_once("scripts.php"); ?>
	<script type="text/javascript" src="js/food-menu.js"></script>

	<script>
		$(function(){
			reloadCart();
		});
		function add_to_cart(id,tray_id,table_number){
			$.post('items-order-get.php', {id: id, tray_id:tray_id, table_number: table_number}, function(o){
				reloadCart();
			});
		}

		function reloadCart(){
			$.post('items-order-view.php', {}, function(o){
				$(".item-order").html(o);
			});
		}
	</script>

	<script>
		// Get the modal
		var modal = document.getElementById('myModal1');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById('myImg1');
		var modalImg = document.getElementById("img1");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}
	</script>
</body>
</html>
