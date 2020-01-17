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
				var allproductscart = JSON.parse(localStorage.getItem('products'));
				document.getElementById('item-count').textContent = allproductscart.length;
			};
			
			var globalCartArray = new Array();
			function addItem(jsonObj) {
				const cartBtn = document.querySelectorAll('.addPanier');
				const $modele = jsonObj['modelsName'];
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

						let name =
						event.target.parentElement.parentElement.parentElement.previousElementSibling.children[0].textContent;

						item.name = $modele + ` ` + `${name}`;

						let price =
						event.target.parentElement.previousSibling.textContent;
						priceint = price.slice(7, -1);
						item.price = priceint;

						console.log(item);


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
						<img src="${item.img}" class="img-fluid rounded-circle" style="width:40%; height: 50%;" alt="" id="item-img">
						<div class="item-text">
						<p id="cart-item-title" class="font-weight-bold mb-0">${item.name} &nbsp;</p>
						<span id="cart-item-price" class="cart-item-price">${item.price}</span><span>€</span>
						</div>
						<button style="background:none; border: none;" class="cart-item-remove" id="cart-item-remove">Supprimer</button>
						</div>
						`;
						saveCart(item);

						// loadCart(saveCart);
					};

						// select cart
						var cart = document.getElementById('cart');
						const total = document.querySelector('.cart-total-container');

						cart.insertBefore(cartItem, total);

						const removeCartItemButtons = document.getElementsByClassName("cart-item-remove");
						for (var i = 0; i < removeCartItemButtons.length; i++) {
							var button = removeCartItemButtons[i];
							button.addEventListener('click', removeCartItem);
						}
						//alert("item added to the cart");

						showTotals();

						var count = document.getElementById('item-count').textContent;
						if(count > 0){ $("#empty_msg").hide(1000); }
						return count;

					});

				});

			}
			function removeCartItem(event) {
				var buttonClicked = event.target;
				buttonClicked.parentElement.remove();
				showTotals();
				saveCart();
				// loadCart();
			}
			function clearCart(){
				cart = [];
				saveCart();
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

			/*function loadCart(saveCart){

				var itemsaved = sessionStorage.getItem("lbmCart");
				var cartsaved = JSON.parse(itemsaved);
				console.log(cartsaved);

				if(localStorage.getItem('globalCartArray')){
					globalCartArray = JSON.parse(localStorage.getItem('products'));
				}

			}
			loadCart();*/
		}
	}
})