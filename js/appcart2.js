// show cart
var $p = $(".infoc");
$p.css("borderStyle", "solid");
$p.css("borderWidth", "1px");
$p.css("borderColor", "black");
$p.css("padding", "5px");
$p.css("color", "black");
$p.css("background-color", "#1EC2C2");


var r = document.getElementById('walou');
//show-cart

(function () {
	const cartInfo = document.getElementById('cart-info');
	const cart = document.getElementById('cart');

	cartInfo.addEventListener('click', function() {
		cart.classList.toggle("show-cart");
	});

})();

//add to cart

(function () {
	const cartBtn = document.querySelectorAll('.addPanier');
	var $modele = document.getElementById('jumbo-title').textContent;


	cartBtn.forEach(function (btn) {
		btn.addEventListener('click',function (event) {
			console.log(event.target);
			if(event.target.classList.contains
				('addPanier')){
				let fullPath = 
			event.target.parentElement.parentElement.previousElementSibling.previousElementSibling.src;
			let pos = fullPath.indexOf("img") + 6;
			let partPath = fullPath.slice(pos);
			// console.log(fullPath);
			const item = {};

			item.img = `${fullPath}`;

			let name =
			event.target.parentElement.parentElement.previousElementSibling.children[0].textContent;
			
			item.name = $modele + ` ${name}`;

			let price =
			event.target.parentElement.parentElement.previousElementSibling.children[1].children[0].textContent;
			
			item.price = price;

			// console.log(item);
			const cartItem = document.createElement('div');

			cartItem.classList.add(
				'cart-item',
				'd-flex',
				'justify-content-bottom-between',
				'text-capitalize',
				'my-3'
				);
			cartItem.innerHTML = `
			<img src="${item.img}" class="img-fluid rounded-circle" style="width:40%; height: 50%;" alt="" id="item-img">
			<div class="item-text">
			<p id="cart-item-title" class="font-weight-bold mb-0">${item.name} &nbsp;</p>
			<span id="cart-item-price" class="cart-item-price">${item.price}</span><span>€</span>
			</div>
			<span id="cart-item-remove" class="cart-item-remove">Supprimer</span>
			</div>
			`;
			
			// select cart
			const cart = document.getElementById('cart');
			const total = document.querySelector('.cart-total-container');
			
			cart.insertBefore(cartItem, total);
			
			alert("item added to the cart");
			showTotals();

			var count = document.getElementById('item-count').textContent;
			if(count > 0){ $("#empty_msg").hide(1000); }
			
		}
	});
	});
	function showTotals(){
		const total = [];
		const items = document.querySelectorAll(".cart-item-price");
		items.forEach(function(item){
			total.push(parseFloat(item.textContent));
		});
		const totalMoney = total.reduce(function(total, item){
			total += item;
			return total;
		}, 0);
		document.getElementById('cart-total').textContent = totalMoney;
		// document.querySelector('.item-total').textContent = totalMoney;
		document.getElementById('item-count').textContent = total.length;
	}
	function removeItem(){
		const items = document.querySelectorAll(".cart-item-remove");
		items.forEach(function(item){
			$(this).remove();
		});
		document.getElementById('cart-total').textContent = totalMoney;
		// document.querySelector('.item-total').textContent = totalMoney;
		document.getElementById('item-count').textContent = total.length;
	}
})();