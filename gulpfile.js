var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir(function(mix) {
	var bootstrapPath = 'node_modules/bootstrap-sass/assets';
	mix.sass('app.scss')
		.scripts([
			'libs/sweetalert-dev.js',
			'libs/formValidation/formValidation.js',
			'libs/formValidation/framework/bootstrap.js'
		],'./public/js/libs.js')
		.styles([
			'libs/sweetalert.css',
			'libs/formValidation.css'
		],'./public/css/libs.css')
		.copy(bootstrapPath + '/fonts', 'public/fonts')
		.copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');
 });