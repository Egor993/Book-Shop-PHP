<?php include ROOT.'/views/include/header.php'; ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="box-element">

				<a  class="btn btn-outline-dark" href="/book_list/">&#x2190; Continue Shopping</a>

				<br>
				<br>
				<table class="table">
					<tr>
						<th><h5>Items: <strong>8</strong></h5></th>
						<th><h5>Total:<strong> <?php echo $totalPrice; ?> руб</strong></h5></th>
						<th>
							<a  style="float:right; margin:5px;" class="btn btn-success" href="payment" autofocus>Payment</a>
							<a  style="float:right; margin:5px;" class="btn btn-secondary" href="cart/clear">Clear</a>
						</th>
					</tr>
				</table>

			</div>

			<br>
			<div class="box-element">
				<div class="cart-row">
					<div style="flex:2"></div>
					<div style="flex:2"><strong>Item</strong></div>
					<div style="flex:1"><strong>Price</strong></div>
					<div style="flex:1"><strong>Quantity</strong></div>
					<div style="flex:1"><strong>Total</strong></div>
					<div style="flex:1"><strong>Delete</strong></div>
				</div>
				<?php foreach ($products as $product): ?>
				<div class="cart-row">
					<div style="flex:2"><img class="row-image" src="template/images/<?php echo $product['image']?>"></div>
					<div style="flex:2"><a href="/book_list/krestnyj-otec/"><?php echo $product['name']; ?></a></div>
					<div style="flex:1"><p><?php echo $product['price']; ?> руб</p></div>
					<div style="flex:1"><p class="quantity"><?php echo $productsInCart[$product['id']]; ?>шт.</p>
						<div class="quantity">
							<a href="/increase_item?new=4" >
							<img data-product="" data-action="add" class="chg-quantity update-cart" src="template/images/arrow-up.png">
							</a>
							<a href="/decrease_item?new=4" >
							<img data-product="" data-action="remove" class="chg-quantity update-cart" src="template/images/arrow-down.png">
							</a>
						</div>
					</div>
					<div style="flex:1"><p>30$</p></div>
					<div style="flex:1">
						<a href="/cart/delete/<?php echo $product['id'];?>" class="editContent">
							<p><img class="chg-quantity update-cart" src="template/images/delete.png"></p>
						</a>
					</div>
				</div>
				<?php endforeach; ?>
				
			</div>
		</div>
	</div>