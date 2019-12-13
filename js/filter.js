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

// // COLOR FILTER 
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

// // GENDER FILTER 
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



