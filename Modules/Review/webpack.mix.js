let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');

let directory_bundle = path.normalize('public/statics/review_static/');
mix.setPublicPath(directory_bundle);
let build_scss = [
    // {
    //     from: '/Resources/assets/sass/pages/home/index.scss',
    //     to: 'css/home.css'
    // },
    {
        from: '/Resources/assets/sass/pages/review/index.scss',
        to: 'css/review.css'
    },
    {
        from: '/Resources/assets/sass/pages/review_profile/index.scss',
        to: 'css/review_profile.css'
    },
    {
        from: '/Resources/assets/sass/pages/review_detail/index.scss',
        to: 'css/review_detail.css'
    },
    {
        from: '/Resources/assets/sass/pages/review_search/index.scss',
        to: 'css/review_search.css'
    },
    {
        from: '/Resources/assets/sass/pages/review_post/index.scss',
        to: 'css/review_post.css'
    },
];

let build_js = [
    // {
    //     from: '/Resources/assets/js/pages/home/index.js',
    //     to: 'js/home.js'
    // },
    {
        from: '/Resources/assets/js/pages/review.js',
        to: 'js/review.js'
    },
    {
        from: '/Resources/assets/js/pages/review_profile.js',
        to: 'js/review_profile.js'
    },
    {
        from: '/Resources/assets/js/pages/review_detail.js',
        to: 'js/review_detail.js'
    },
    {
        from: '/Resources/assets/js/pages/review_search.js',
        to: 'js/review_search.js'
    },
    {
        from: '/Resources/assets/js/pages/review_post.js',
        to: 'js/review_post.js'
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
