require.config({
	paths: {
		'jquery': ['https://code.jquery.com/jquery-3.4.1.min', 'jquery-3.4.1.min'],
		'bootstrap': 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min',
		'showall': './js/showmod',
		'filter': './js/filter',
		'appcart' : './js/appcart'
	},
	shim: {
		'bootstrap' : {
			deps : ['jquery']
		},
		'appcart' : {
			deps : ['showmod']
		}
	}
});