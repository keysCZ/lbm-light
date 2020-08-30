requirejs.config({
    baseURL : 'js',
	paths: {
		'jquery': ['https://code.jquery.com/jquery-3.4.1.min', 'jquery-3.4.1.min'],
		'bootstrap': 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min',
		'filter': 'filter',
		'showall': 'showmod',
		'appcart' : 'appcart',
		'rotator' : 'jquery-simple-text-rotator'
	},
	shim: {
		'bootstrap' : {
			deps : ['jquery']
		},
		'appcart' : {
			deps : ['showall']
		}
	}
});