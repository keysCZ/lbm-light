define(['jquery', 'bootstrap'], function ($) {
	return{
		showcart:function () {
			var boxcart = $('.cart-info');
			boxcart.css("borderStyle", "solid");
			boxcart.css("borderWidth", "1px");
			boxcart.css("borderColor", "black");
			boxcart.css("padding", "5px");
			boxcart.css("color", "black");
			boxcart.css("background-color", "#1EC2C2");



			const cartInfo = document.getElementById("cart-info");
			const cart = document.getElementById("cart");

			cartInfo.addEventListener("click", function() {
				cart.classList.toggle("showc");
				$(".cart").css("display", "none");
				if ($(".cart").hasClass("showc")) {
					$(".cart").css("display", "block");
				}
			});

		},

		shoppingCart:function () {

			var requestURL = basename;
			var request = new XMLHttpRequest();
			request.open('GET', requestURL);
			request.responseType ='text';
			request.send();
			request.onload = function(){
				const dataObjText = request.response;
				const dataObj = JSON.parse(dataObjText);
				addItem(dataObj);


			}

			/*var indices = [];
			var productstored = JSON.parse(localStorage.getItem('products'));
			var element = productstored.find(product => product === null);
			var nullItem = productstored.indexOf(element);
			while (nullItem != -1) {
				indices.push(nullItem);
				nullItem = productstored.indexOf(element, nullItem + 1);
			}
			console.log(indices);
			localStorage.removeItem(nullItem);*/
			loadCart();	



			function addItem(jsonObj) {
				const cartBtn = document.querySelectorAll('.addPanier');
				const modele = jsonObj['modelsName'];
				cartBtn.forEach(function (btn) {
					btn.addEventListener("click", function(event) {
					//console.log(event.target);
					if(event.target.classList.contains('addPanier')){
						let fullPath = 
						event.target.parentElement.parentElement.parentElement.previousElementSibling.previousElementSibling.children[0].src;
						let pos = fullPath.indexOf("img");
						let partPath = fullPath.slice(pos);
						//console.log(partPath);

						var item = {};

						item.img = `${fullPath}`;

						let name = event.target.parentElement.parentElement.parentElement.previousElementSibling.children[0].textContent;

						item.name = modele + ` ` + `${name}`;

						let price = event.target.parentElement.previousSibling.textContent;
						priceint = price.slice(7, -1);
						item.price = priceint;

						// console.log(item);
						saveCart(item);

						var a = JSON.parse(localStorage.getItem('products'));
						var cart = document.getElementById('cart');
						const total = document.querySelector('.cart-total-container');

						var cartItem = document.createElement('div');
						cartItem.classList.add(
							'cart-item',
							'd-flex',
							'justify-content-bottom-between',
							'text-capitalize',
							'my-3'
							);
						cartItem.innerHTML = 
						`
						<img src="${a.slice(-1)[0].img}" class="img-fluid rounded-circle" style="width:40%; height: 50%;" alt="" id="item-img">
						<div class="item-text">
						<p id="cart-item-title" class="font-weight-bold mb-0">${a.slice(-1)[0].name}</p>
						<span id="cart-item-price" class="cart-item-price">${a.slice(-1)[0].price}</span><span>€</span>
						</div>
						<button style="background:none; border: none;" class="cart-item-remove" id="cart-item-remove">Supprimer</button>
						</div>
						`;
						// select cart
						cart.insertBefore(cartItem, total);

						showTotals();

						if(localStorage.getItem('products')){
							var allproductscart = JSON.parse(localStorage.getItem('products'));
							if (allproductscart.length != 0) {
								$("#empty_msg").hide(1000);
								document.getElementById('item-count').textContent = allproductscart.length;
							}
						}
					}
				});

					var erase = document.getElementById("clear-cart");
					erase.addEventListener('click', clearCart);


					var removeCartItemButtons = document.querySelectorAll(".cart-item-remove");
					for (var i = 0; i < removeCartItemButtons.length; i++) {
						var button = removeCartItemButtons[i];
						button.addEventListener('click', removeCartItem);
					}

					showTotals();
				});
			};

			
			function removeCartItem() {
				var del = document.querySelector('.cart-item');
				var cartitemdel = event.target.parentElement;
				var namedel = cartitemdel.children[0].src;
				console.log(namedel); 
				var productstored = JSON.parse(localStorage.getItem('products'));
				for (var i = 0; i < productstored.length; i++) {
					if (productstored[i].img === namedel) {
						var i = productstored.indexOf(productstored[i]);
						console.log(productstored[i]);
						productstored.splice(i, 1);

					}

				}

				localStorage.setItem('products', JSON.stringify(productstored));
				console.log(productstored);


				cartitemdel.remove();

				showTotals();					
			} 

			function clearCart(event){
				console.log(event.target);
				var del = document.querySelectorAll('.cart-item');
				for (var i = 0; i < del.length; i++) {
					del[i].remove();
				}
				localStorage.clear();
				showTotals();
				loadCart();
			}
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
				//console.log(total);

				document.getElementById('cart-total').textContent = totalMoney;
			}

			function saveCart(item){
				let products = [];
				if(localStorage.getItem('products')){
					products = JSON.parse(localStorage.getItem('products'));
				}

				products.push(item);

				localStorage.setItem('products', JSON.stringify(products));

			}
			function loadCart() {
				
				var a = JSON.parse(localStorage.getItem('products'));
				var b = JSON.stringify(localStorage.getItem('products'));
				var cart = document.getElementById('cart');
				const total = document.querySelector('.cart-total-container');



				$.each(a, function(i, value) {
					var cartItem = document.createElement('div');
					cartItem.classList.add(
						'cart-item',
						'd-flex',
						'justify-content-bottom-between',
						'text-capitalize',
						'my-3'
						);
					cartItem.innerHTML = 
					`
					<img src="${a[i].img}" class="img-fluid rounded-circle" style="width:40%; height: 50%;" alt="" id="item-img">
					<div class="item-text">
					<p id="cart-item-title" class="font-weight-bold mb-0">${a[i].name} &nbsp;</p>
					<span id="cart-item-price" class="cart-item-price">${a[i].price}</span><span>€</span>
					</div>
					<button style="background:none; border: none;" class="cart-item-remove" id="cart-item-remove">Supprimer</button>
					</div>
					`;
						// select cart
						cart.insertBefore(cartItem, total);
					});

				if(localStorage.getItem('products')){
					var allproductscart = JSON.parse(localStorage.getItem('products'));
					if (allproductscart.length != 0) {
						$("#empty_msg").hide(1000);
						document.getElementById('item-count').textContent = allproductscart.length;
					}



				}	
			}
		}
	}
});

