/**
 * Created by Hoang on 5/2/2017.
 */
var gulp = require('gulp');

gulp.task('default', function() {
    // place code for your default task here
});

var elixir = require('laravel-elixir');

//Elixir Asset management
elixir(function(mix) {
    mix.sass('app.scss')
        // .webpack('app.js');

    //add all files in resouces\assets\css\libs into this file below
     .styles([

        'libs/blog-post.css',
        'libs/bootstrap.css',
        'libs/font-awesome.css',
        'libs/metisMenu.css',
        'libs/sb-admin-2.css',

    ], './public/css/libs.css' )

    //add all files in resouces\assets\js\libs into this file below
     .scripts([
         'libs/jquery.js',
         'libs/bootstrap.js',
         'libs/metisMenu.js',
         'libs/sb-admin-2.js',
         'libs/scripts.js'
    ], './public/js/libs.js')
});