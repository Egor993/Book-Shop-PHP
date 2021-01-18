const addToCart = document.querySelectorAll('.add-to-cart');
const cartCount = document.querySelector('#cart-count');

addToCart.forEach((item) => {
	item.addEventListener('click', (e) => {
		e.preventDefault();
		let id = (item.getAttribute('data-id'));
		fetch('/cart/add/'+id, {
			method: 'POST'
		})
		  .then(response => {
			cartCount.innerHTML++;
		  })
		  .catch(error => console.error(error));
	});
});

