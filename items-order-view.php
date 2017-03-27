<?php
	session_start();
	
	$total = 0;
?>
<ul>
	<?php foreach ($_SESSION['cart'] as $key => $value) { ?>
	<li class="product">
		<div class="product-details">
			<h5><a href="#0" class="product-name"><?php echo $value['product_name']; ?></a></h5>
			<div class="quantity">
				<label for="cd-product-<?php echo $key ?>">Qty</label>
				<span class="select">
					<input type="number" value="<?php echo $value['qty'] ?>" style="width: 3em">
				</span>
			</div>
			<span class="price"><?php echo $value['price']; ?></span>
			<span class="actions"><a href="#0" class="delete-item">&#xf00d;</a></span>
		</div>
	</li>

	<?php $total += $value['price']; ?>
	<?php } ?>
</ul>
<footer>
	<span class="currency">&#8369;<span><?php echo $total; ?></span></span>
</footer>