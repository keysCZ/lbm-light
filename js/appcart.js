
var boxcart = $('.cart-info');
boxcart.css("borderStyle", "solid");
boxcart.css("borderWidth", "1px");
boxcart.css("borderColor", "black");
boxcart.css("padding", "5px");
boxcart.css("color", "black");
boxcart.css("background-color", "#1EC2C2");


//show-cart

(function () {
	const cartInfo = document.getElementById("cart-info");
	const cart = document.getElementById("cart");

	cartInfo.addEventListener("click", function() {
		cart.classList.toggle("showc");
		$(".cart").css("display", "none");
		if ($(".cart").hasClass("showc")) {
			$(".cart").css("display", "block");
		}
	});

})();

//add to cart

(function () {
	const cartBtn = document.querySelectorAll('.addPanier');
	var $modele = document.getElementById('jumbo-title');


	cartBtn.forEach(function (btn) {
		btn.addEventListener("click", function(event) {
			console.log(event.target);

			if(event.target.classList.contains
				('addPanier')){
				let fullPath = 
			event.target.parentElement.parentElement.previousElementSibling.previousElementSibling.children[0].src;
			
			let pos = fullPath.indexOf("img");
			let partPath = fullPath.slice(pos);

			const item = {};

			item.img = `${fullPath}`;

			let name =
			event.target.parentElement.parentElement.previousElementSibling.children[0].textContent;
			
			item.name = $modele + `${name}`;

			let price =
			event.target.parentElement.parentElement.previousElementSibling.children[1].children[0].textContent;
			
			item.price = price;

			console.log(item);
		};

	});
	});
})();
