if(event.target.classList.contains
				('addPanier')){
				let fullPath = 
			event.target.parentElement.parentElement.previousElementSibling.previousElementSibling.src;
			let pos = fullPath.indexOf("img") + 6;
			let partPath = fullPath.slice(pos);
			console.log(fullPath);
			const item = {};

			item.img = `${fullPath}`;

			let name =
			event.target.parentElement.parentElement.previousElementSibling.children[0].textContent;
			
			item.name = $modele + `${name}`;

			let price =
			event.target.parentElement.parentElement.previousElementSibling.children[1].children[0].textContent;
			
			item.price = price;

			console.log(item);
			const cartItem = document.createElement('div');

			cartItem.classList.add(
				'cart-item',
				'd-flex',
				'justify-content-bottom-between',
				'text-capitalize',
				'my-3'
				);
			cartItem.innerHTML = 
			`
			<img src="${item.img}" class="img-fluid rounded-circle" style="width:40%; height: 50%;" alt="" id="item-img">
			<div class="item-text">
			<p id="cart-item-title" class="font-weight-bold mb-0">${item.name} &nbsp;</p>
			<span id="cart-item-price" class="cart-item-price">${item.price}</span><span>€</span>
			</div>
			<button style="background:none; border: none;" class="cart-item-remove">Supprimer</button>
			</div>
			`;
			
			
			// select cart
			const cart = document.getElementById('cart');
			const total = document.querySelector('.cart-total-container');
			const itemremove = document.querySelectorAll(".cart-item-remove");
			
			cart.insertBefore(cartItem, total);

			$(".cart-item-remove").click(function()
			{
				cartItem.forEach( function(item) {
					item.remove(cart);
					showTotals();
				});
				
			});
			alert("item added to the cart");
			showTotals();

			var count = document.getElementById('item-count').textContent;
			if(count > 0){ $("#empty_msg").hide(1000); }*/
		
	});
	});
/*
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
		console.log(total);

		document.getElementById('cart-total').textContent = totalMoney;
		// document.querySelector('.item-total').textContent = totalMoney;
		document.getElementById('item-count').textContent = total.length;
	}
	*/