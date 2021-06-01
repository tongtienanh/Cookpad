let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');

let directory_bundle = path.normalize('public/statics/user_static/');
mix.setPublicPath(directory_bundle);
let build_scss = [
    {
        from: '/Resources/assets/sass/pages/profile_collections/index.scss',
        to: 'css/profile_collections.css'
    },
    {
        from: '/Resources/assets/sass/pages/profile_history/index.scss',
        to: 'css/profile_history.css'
    },
    {
        from: '/Resources/assets/sass/pages/detail_collection_content/index.scss',
        to: 'css/detail_collection_content.css'
    },
    {
        from: '/Resources/assets/sass/pages/news_post_profile/index.scss',
        to: 'css/news_post_profile.css'
    },
    {
        from: '/Resources/assets/sass/pages/videos_profile/index.scss',
        to: 'css/videos_profile.css'
    },
    {
        from: '/Resources/assets/sass/pages/profile/index.scss',
        to: 'css/profile.css'
    },
];

let build_js = [
    {
        from: '/Resources/assets/js/pages/detail_collection_profile.js',
        to: 'js/detail_collection_profile.js'
    },
    {
        from: '/Resources/assets/js/pages/profile_image.js',
        to: 'js/profile_image.js'
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
