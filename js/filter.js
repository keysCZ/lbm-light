

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
	filterColor(dataObj);
	filterGender(dataObj);
	countItems();
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
		for(let k = 0; k < itemColor.length; k++){
			cardGroup.classList.add(itemColor[k]);
		}	
 
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
		const storeItemPrice = document.createElement('p');
		storeItemPrice.classList.add('card-price');
		const itemtxt = document.createElement('p');
		const storeItemSize = document.createElement('ul');

		storeItemId.textContent = 'Ref/ ' + models[i].id;
		storeItemName.textContent = models[i].product;
		storeItemPrice.textContent = 'Prix : ' + models[i].price + '€';
		itemtxt.textContent = 'Tailles disponibles : ';

		
		const itemSize = models[i].size;
		for(let j = 0; j < itemSize.length; j++){
			const listSize = document.createElement('li');
			listSize.textContent = itemSize[j];
			storeItemSize.appendChild(listSize);
		}

			var img = new Image();
			img.src = models[i].image;
			img.setAttribute("class", "card-img-top");
			img.setAttribute("alt", "Card image cap");
			cardHeader.appendChild(img);

		cardBody.appendChild(storeItemName);
		cardBody.appendChild(storeItemId);
		cardFooter.appendChild(storeItemPrice);
		// cardFooter.appendChild(itemtxt);
		//  cardFooter.appendChild(storeItemSize);

		storeItem.appendChild(cardHeader);
		storeItem.appendChild(cardBody);
		storeItem.appendChild(cardFooter);
		cardGroup.appendChild(storeItem);
		allCard.appendChild(cardGroup);

		// payment button

		$(".card-footer").html("<form target='paypal' action='https://www.paypal.com/cgi-bin/webscr' method='post'><input type='hidden' name='cmd' value='_s-xclick'><input type='hidden' name='hosted_button_id' value='2LF9AXJVHK5JG'><table><tr><td><input type='hidden' name='on0' value='Taille'>Taille</td></tr><tr><td><select name='os0'><option value='40'>40 </option><option value='41'>41 </option><option value='42'>42 </option><option value='43'>43 </option><option value='44'>44 </option><option value='45'>45 </option></select></td></tr></table><input type='image' class='addPanier' src='https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif' border='0' name='submit' alt='PayPal, le réflexe sécurité pour payer en ligne'><img alt='' border='0' src='https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif' width='1' height='1'></form>");


	}
}


// ** Functions Filters ** //

// // COUNT FOR BADGES

function countItems(){
	var allItems = $("#all-card .card-group").length;
	document.getElementById('all').textContent = allItems;
	var menItems = $("#all-card .men").length;
	document.getElementById('count-men').textContent = menItems;
	var womenItems = $("#all-card .women").length;
	document.getElementById('count-women').textContent = womenItems;
	var mixedItems = $("#all-card .mixed").length;
	document.getElementById('count-mixed').textContent = mixedItems;
}

// // FILTER COLOR
function filterColor(jsonObj) {
	$('.round-color').click(function(){
		var Color = $(this).attr('id');
		if (Color == 'many')
		{
			$('.card-group').addClass('hide-c');
			setTimeout(function(){
				$('.card-group').removeClass('hide-c');
			}, 300);
		}else{
			$('.card-group').addClass('hide-c');
			setTimeout(function(){
				$('.' + Color).removeClass('hide-c');
			}, 300);
		}
	});

}

// // FILTER GENDER
function filterGender(jsonObj) {
	$('.gender').click(function(){
		var Gender = $(this).attr('id');
		if (Gender == 'all-products')
		{
			$('.card-group').addClass('hide-g');
			setTimeout(function(){
				$('.card-group').removeClass('hide-g');
			}, 300);
		}else{
			$('.card-group').addClass('hide-g');
			setTimeout(function(){
				$('.' + Gender).removeClass('hide-g');
			}, 300);
		}
	});

}



