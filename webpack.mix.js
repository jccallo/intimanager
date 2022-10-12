const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

/**
 *
 * Integrando Adminlte 3.2.0
 *
 * IMPORTANTE:
 * npm run watch detecta los cambios de los archivos ya compilados de webpack.mix
 * mas no detecta las nuevas lineas en el archivo webpack.mix
 *
 * una vez compilado puede editar lo que toma mas tiempo compilar
 *
 *
 */

mix

// // css plano
// .styles([
//     'resources/utils/css/all.min.css',

//     'resources/utils/css/datatables/dataTables.bootstrap4.min.css',
//     'resources/utils/css/datatables/responsive.bootstrap4.min.css',
//     'resources/utils/css/datatables/buttons.bootstrap4.min.css',

//     'resources/utils/css/adminlte.min.css',
// ], 'public/css/template.css')

// // vanilla js
// .scripts([
//     'resources/utils/js/jquery.min.js',
//     'resources/utils/js/bootstrap.bundle.min.js',

//     'resources/utils/js/datatables/jquery.dataTables.min.js',
//     'resources/utils/js/datatables/dataTables.bootstrap4.min.js',
//     'resources/utils/js/datatables/dataTables.responsive.min.js',
//     'resources/utils/js/datatables/responsive.bootstrap4.min.js',
//     'resources/utils/js/datatables/dataTables.buttons.min.js',
//     'resources/utils/js/datatables/buttons.bootstrap4.min.js',
//     'resources/utils/js/datatables/jszip.min.js',
//     'resources/utils/js/datatables/pdfmake.min.js',
//     'resources/utils/js/datatables/vfs_fonts.js',
//     'resources/utils/js/datatables/buttons.html5.min.js',
//     'resources/utils/js/datatables/buttons.print.min.js',
//     'resources/utils/js/datatables/buttons.colVis.min.js',

//     'resources/utils/js/adminlte.min.js',
// ], 'public/js/template.js')

// // copiamos el folder webfonts
// .copy(
//     'resources/utils/webfonts',
//     'public/webfonts'
// )

// // copiamos el folder de las imagenes
// .copy(
//     'resources/utils/img',
//     'public/img'
// )

// app.js
.js(
    'resources/js/app.js',
    'public/js'
).vue() // para que funcione con vue

// app.css
.postCss(
    'resources/css/app.css',
    'public/css', [
        //
    ]
);
