let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');

let directory_bundle = path.normalize('public/statics/now_static/');
mix.setPublicPath(directory_bundle);
let build_scss = [
    // {
    //     from: '/Resources/assets/sass/pages/home/index.scss',
    //     to: 'css/home.css'
    // },
    {
        from: '/Resources/assets/sass/pages/table/index.scss',
        to: 'css/table.css'
    },
    {
        from: '/Resources/assets/sass/pages/eat_search/index.scss',
        to: 'css/eat_search.css'
    },
    {
        from: '/Resources/assets/sass/pages/eat_collections/index.scss',
        to: 'css/eat_collections.css'
    },
    {
        from: '/Resources/assets/sass/pages/table_booking/index.scss',
        to: 'css/table_booking.css'
    },
];

let build_js = [
    // {
    //     from: '/Resources/assets/js/pages/home/index.js',
    //     to: 'js/home.js'
    // },
    {
        from: '/Resources/assets/js/pages/table.js',
        to: 'js/table.js'
    },
    {
        from: '/Resources/assets/js/pages/table_booking.js',
        to: 'js/table_booking.js'
    },
    {
        from: '/Resources/assets/js/pages/eat_search.js',
        to: 'js/eat_search.js'
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
