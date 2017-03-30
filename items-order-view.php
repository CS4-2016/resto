<?php
	session_start();
	error_reporting(0);
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
					<input type="number" value="<?php echo $value['qty']; ?>" id="qty<?php echo $key; ?>" onchange="tray.change(<?php echo $key; ?>, <?php echo $value['price']; ?>)" style="width: 3em">
				</span>
			</div>
			<span class="price" id="price<?php echo $key; ?>">&#8369;<?php echo $value['price']; ?></span>
			<span class="actions"><a href="#0" class="delete-item">&#xf00d;</a></span>
		</div>
	</li>

	<?php $total += $value['price']; ?>

	<input type="hidden" name="dish_id" value="<?php echo $key; ?>">
	<input type="hidden" name="dish_name[]" value="<?php echo $value['product_name']; ?>">
	<input type="hidden" name="dish_qty[]" value="<?php echo $value['qty']; ?>">
	<input type="hidden" name="dish_price[]" value="<?php echo $value['price']; ?>">

	<?php } ?>
</ul>

<footer>
	<span class="currency">Total: &#8369;<span id="total_tray" value="<?php echo $total; ?>"><?php echo $total; ?></span></span>
</footer>

<script>
	window.tray = {
	    change: function (id, p){
	    	var q = $("#qty"+id).val();
	    	var qp = q*p;
	    	$("#price"+id).html(qp);

	    	var total = parseInt($("#total_tray").html());

	    	new_total = total + (qp - p);
	    	// console.log(new_total);
	    	$.post('update-items-orders.php', {id: id, q:q}, function(o){
	    		if(o.is_successful){
	    			reloadCart();
	    		} else {
	    			alert('Error updating qty');
	    		}
	    	},'json');
	    	$("#total_tray").html(new_total);
	    }
	}
</script>