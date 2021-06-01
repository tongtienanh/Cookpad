let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');

let directory_bundle = path.normalize('public/statics/auth_static/');
mix.setPublicPath(directory_bundle);
let build_scss = [
    {
        from: '/Resources/assets/sass/app.scss',
        to: 'css/app.css'
    }
];

let build_js = [
    {
        from: '/Resources/assets/js/pages/login/index.js',
        to: 'js/login.js'
    },
    {
        from: '/Resources/assets/js/pages/register/index.js',
        to: 'js/register.js'
    },
    {
        from: '/Resources/assets/js/pages/forgot_pass/index.js',
        to: 'js/forgot_pass.js'
    },
    {
        from: '/Resources/assets/js/pages/complete/index.js',
        to: 'js/complete.js'
    },
];

build_scss.map((index) => {
    let from = __dirname + index.from;
    let to = index.to;
    mix.sass(from, to).minify(directory_bundle + to);
});

build_js.map((index) => {
    let from = __dirname + index.from;
    let to = index.to;
    if (Array.isArray(index.from)) {
        from = [];
        index.from.forEach(file => {
            from.push(__dirname + file);
        });
    }
    mix.js(from, to)
});


mix.options({
    processCssUrls: false
}).autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
});
if (mix.inProduction()) {
    mix.version();
}

mix.webpackConfig({
    resolve: {
        alias: {
            global_resource: path.resolve(__dirname + '/../../resources'),
        }
    }
});
