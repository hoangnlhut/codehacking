const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


// mix.js('resources/assets/js/dashboard.js', 'public/js/app')
//     .js('resources/assets/js/add_owner.js', 'public/js/app');

var scripts = [
    // 'node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js',
    // 'node_modules/admin-lte/bootstrap/js/bootstrap.min.js',
    // 'node_modules/admin-lte/plugins/fastclick/fastclick.js',
    // // 'node_modules/admin-lte/dist/js/app.min.js',
    // 'node_modules/admin-lte/plugins/sparkline/jquery.sparkline.min.js',
    // 'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    // 'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    // 'node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js',
    // 'node_modules/admin-lte/plugins/chartjs/Chart.min.js',
    // 'node_modules/admin-lte/dist/js/demo.js',
    // 'node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js',
    // 'node_modules/admin-lte/plugins/datatables/dataTables.bootstrap.min.js',
    // 'node_modules/admin-lte/plugins/datepicker/bootstrap-datepicker.js',
    // 'node_modules/moment/min/moment.min.js',
    // 'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js',
    'resources/assets/js/libs/jquery.js',
    'resources/assets/js/libs/bootstrap.js',
    'resources/assets/js/libs/metisMenu.js',
    'resources/assets/js/libs/sb-admin-2.js',
    'resources/assets/js/libs/scripts.js'
    // 'public/js/app/dashboard.js',
    // 'public/js/app/add_owner.js',
];

mix.scripts(scripts, 'public/js/libs.js');


// mix.copy('node_modules/font-awesome/fonts', 'public/fonts')
//     .copy('node_modules/ionicons/fonts', 'public/fonts')
//     .copy('node_modules/admin-lte/bootstrap/fonts', 'public/fonts')
//     .copy('node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js', 'public/js')
//     .copy('node_modules/admin-lte/bootstrap/js/bootstrap.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/fastclick/fastclick.js', 'public/js')
// //     .copy('node_modules/admin-lte/dist/js/app.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/sparkline/jquery.sparkline.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/chartjs/Chart.min.js', 'public/js')
//     .copy('node_modules/admin-lte/dist/js/demo.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/datatables/dataTables.bootstrap.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/datepicker/bootstrap-datepicker.js', 'public/js')
//     .copy('node_modules/moment/min/moment.min.js', 'public/js')
//     .copy('node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js', 'public/js')
    // .copy('resources/assets/js/dashboard.js', 'public/js/app');

    mix.sass('resources/assets/sass/app.scss', 'public/css');

// mix.sass('resources/assets/sass/dashboard.scss', 'public/css')
//     .sass('resources/assets/sass/main.scss', 'public/css');

var styles = [
    // 'node_modules/admin-lte/bootstrap/css/bootstrap.min.css',
    // 'node_modules/font-awesome/css/font-awesome.min.css',
    // 'node_modules/ionicons/css/ionicons.min.css',
    // 'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
    // 'node_modules/admin-lte/dist/css/AdminLTE.min.css',
    // 'node_modules/admin-lte/dist/css/skins/_all-skins.min.css',
    // 'node_modules/admin-lte/plugins/datatables/dataTables.bootstrap.css',
    // 'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css',
    // 'node_modules/admin-lte/plugins/plugins/datepicker/datepicker3.css',
    // 'node_modules/admin-lte/plugins/plugins/iCheck/all.css',
    'resources/assets/css/libs/blog-post.css',
    'resources/assets/css/libs/bootstrap.css',
    'resources/assets/css/libs/font-awesome.css',
    'resources/assets/css/libs/metisMenu.css',
    'resources/assets/css/libs/sb-admin-2.css',
    // 'public/css/app.css',
    // 'public/css/dashboard.css',
    // 'public/css/main.css',
];

mix.styles(styles, 'public/css/libs.css');