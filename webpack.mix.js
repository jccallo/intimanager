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
// .styles([ // css plano
//     'resources/utils/css/all.min.css',
//     'resources/utils/css/adminlte.min.css',
// ], 'public/css/template.css')

// .scripts([ // vanilla js
//     'resources/utils/js/jquery.min.js',
//     'resources/utils/js/bootstrap.bundle.min.js',
//     'resources/utils/js/adminlte.min.js'
// ], 'public/js/template.js')

// .copy( // copiamos el folder webfonts 
//     'resources/utils/webfonts',
//     'public/webfonts'
// )
// .copy( // copiamos el folder de las imagenes 
//     'resources/utils/img',
//     'public/img'
// )
  
.js( // app.js
    'resources/js/app.js',
    'public/js'
).vue() // para que funcione con vue

.postCss( // app.css
    'resources/css/app.css',
    'public/css', [
        //
    ]
);
