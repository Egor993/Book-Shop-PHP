<?php include ROOT.'/views/include/header.php'; ?>


<form action="#" method="post">
 <div class="row">
	<div class="col-lg-6">
		<div class="box-element" id="form-wrapper">
			<form id="form">
				<div id="user-info">
					<div class="form-field">
						<input required class="form-control" type="text" name="userName" placeholder="Name..">
					</div>
				</div>
				
				<div id="shipping-info">
					<hr>
					<p>Shipping Information:</p>
					<hr>
					<div class="form-field">
						<input class="form-control" type="text" name="userPhone" placeholder="Phone..">
					</div>
					<div class="form-field">
						<input class="form-control" type="text" name="userComment" placeholder="Comment..">
					</div>

				</div>

				<hr>
				<button type="submit", name="submit", class ="btn btn-success btn-block", value='Send' autofocus>Отправить</button>
			</form>
		</div>
</form>

		<br>
		<div class="box-element hidden" id="payment-info">
			<small>Paypal Options</small>
			<!--<button id="make-payment">Make payment</button>-->
			<div id="paypal-button-container"></div>
		</div>
		
	</div>

	<div class="col-lg-6">
		<div class="box-element">
			<a  class="btn btn-outline-dark" href="/cart">&#x2190; Back to Cart</a>
			<hr>
			<h3>Order Summary</h3>
			<hr>
			<?php foreach ($products as $product): ?>
				<div class="cart-row">
					<div style="flex:2"><img class="row-image" src="template/images/<?php echo $product['image']?>"></div>
					<div style="flex:2"><a href="/book_list/krestnyj-otec/"><?php echo $product['name']; ?></a></div>
					<div style="flex:1"><p>5$</p></div>
					<div style="flex:1"><p>x<?php echo $productsInCart[$product['id']]; ?> шт</p></div>
				</div>
			<?php endforeach; ?>
			<h5>Items: 8</h5>
			<h5>Total: 44$</h5>
		</div>
	</div>
</div>