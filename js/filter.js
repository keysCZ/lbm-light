define(['jquery', 'bootstrap', 'showmod'], function ($){
	return {

		btnFilter:function () {
			var btnfilter = document.getElementById('btn-filter');
			$('.filter').css("display", "none");
			btnfilter.addEventListener("click", function() {
				$('.filter').addClass('showfilter');
				//alert(windowfilter());
			});

			function windowfilter() {
				$('.filter').css("display", "block");
			}

	},

	countItems:function () {
		var allItems = $("#all-card .card-group").length;
		document.getElementById('all').textContent = allItems;
		var menItems = $("#all-card .men").length;
		document.getElementById('count-men').textContent = menItems;
		var womenItems = $("#all-card .women").length;
		document.getElementById('count-women').textContent = womenItems;
		var mixedItems = $("#all-card .mixed").length;
		document.getElementById('count-mixed').textContent = mixedItems;
	},



	filterColor:function (jsonObj) {
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
	},


	filterGender:function (jsonObj) {
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

}

})

