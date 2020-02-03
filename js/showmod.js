require.config({
	paths: {
		'jquery': ['https://code.jquery.com/jquery-3.4.1.min', 'jquery-3.4.1.min'],
		'bootstrap': 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min',
		'filter': 'filter',
		'appcart': 'appcart'
	},
	shim: {
		'bootstrap' : {
			deps : ['jquery']
		}
	}
})

require(['jquery', 'bootstrap'], function($){
	var requestURL = basename;
	const header = document.querySelector('header');
	const section = document.querySelector('section');
	const allCard = document.getElementById('all-card');
	var request = new XMLHttpRequest();


	request.open('GET', requestURL);
	request.responseType ='text';
	request.send();
	request.onload = function(){
		const dataObjText = request.response;
		const dataObj = JSON.parse(dataObjText);
		jumbotronHeader(dataObj);
		showObj(dataObj);
	}



	function jumbotronHeader(jsonObj){
		const titleModel = document.createElement('h1');
		titleModel.textContent = jsonObj['modelsName'];
		titleModel.setAttribute("id", "jumbo-title");
		header.appendChild(titleModel);
	}

	// SHOW ARTICLES
	function showObj(jsonObj){
		const models = jsonObj['models'];
		for (var i = 0; i < models.length; i++) {
			const cardGroup = document.createElement('div');
			
			cardGroup.classList.add('card-group', 'col-lg-3', 'col-md-6', 'col-sm-12', 'col-xs-12', 'mb-4');
			
			const itemColor = models[i].color;


			const genderItems = models[i].type;
			cardGroup.classList.add(genderItems);

			var storeItem = document.createElement('div');
			storeItem.classList.add('card', 'store-item');
			const cardHeader = document.createElement('div');
			cardHeader.classList.add('card-header');
			const cardBody = document.createElement('div');
			cardBody.classList.add('card-body');
			const cardFooter = document.createElement('div');
			cardFooter.classList.add('card-footer', 'py-2');
			const storeItemName = document.createElement('h4');
			storeItemName.classList.add('card-title');
			var storeItemId = document.createElement('p');
			const storeItemPrice = document.createElement('div');
			storeItemPrice.classList.add('card-price');
			const itemtxt = document.createElement('p');
			var storeItemSize = document.createElement('div');

			storeItemId.textContent = 'Ref/ ' + models[i].id;
			storeItemName.textContent = models[i].product;
			itemtxt.textContent = 'Prix : ' + models[i].price + '€';
			storeItemPrice.appendChild(itemtxt);
			//itemtxt.textContent = 'Tailles disponibles : ';


			var img = new Image();
			img.src = models[i].image;
			img.setAttribute("class", "card-img-top");
			img.setAttribute("alt", "Card image cap");
			cardHeader.appendChild(img);



			for(let k = 0; k < itemColor.length; k++){
				cardGroup.classList.add(itemColor[k]);
				
			}

			
			var itemSize = models[i].size;
			for(let j = 0; j < itemSize.length; j++){
				var listSize = document.createElement('option');
				listSize.textContent = itemSize[j];
				listSize.setAttribute("value", itemSize[j]);
			}

				storeItemSize.appendChild(listSize);
				// payment button
				var paypalItemId = models[i].value;
				storeItemPrice.insertAdjacentHTML('beforeend', `<form target="paypal" class="paypalItem" action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_s-xclick"><input value="${paypalItemId}" type="hidden" name="hosted_button_id"  class="paypalId"><table><tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0" id="os">${listSize}</select></td></tr></table><input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne"><img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1"></form>`);

				cardBody.appendChild(storeItemName);
				cardBody.appendChild(storeItemId);
				cardFooter.appendChild(storeItemPrice); 
				//  cardFooter.appendChild(storeItemSize);

				storeItem.appendChild(cardHeader);
				storeItem.appendChild(cardBody);
				storeItem.appendChild(cardFooter);
				cardGroup.appendChild(storeItem);
				allCard.appendChild(cardGroup);



			}
		}
	})

require(['jquery', 'filter'], function ($, filt) {
	var requestURL = basename;
	const header = document.querySelector('header');
	const section = document.querySelector('section');
	const allCard = document.getElementById('all-card');
	var request = new XMLHttpRequest();


	request.open('GET', requestURL);
	request.responseType ='text';
	request.send();
	request.onload = function(){
		const dataObjText = request.response;
		const dataObj = JSON.parse(dataObjText);
		filt.btnFilter();
		filt.countItems();
		filt.filterColor(dataObj);
		filt.filterGender(dataObj);
	}
})
require(['jquery', 'appcart'], function ($, apc) {
	var requestURL = basename;
	var request = new XMLHttpRequest();
	request.open('GET', requestURL);
	request.responseType ='text';
	request.send();
	request.onload = function(){
		const dataObjText = request.response;
		const dataObj = JSON.parse(dataObjText);
		apc.showcart();
		apc.shoppingCart();
	}
})