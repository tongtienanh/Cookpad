let mix = require(__dirname + '/node_modules/laravel-mix/src/index');
let webpack = require('webpack');

if (module = process.env.module)
{
    return require(`${__dirname}/Modules/${module}/webpack.mix.js`);
}

// Set path output
let directory_asset = 'public/statics/assets';
mix.setPublicPath(path.normalize(directory_asset));
let build_js = [
    {
        from: 'resources/assets/js/pages/search_job.js',
        to: 'js/search_job.js'
    },
    // {
    //     from: 'resources/assets/js/pages/home_mb.js',
    //     to: 'js/home_mb.js'
    // },
    {
        from: 'resources/assets/js/pages/home.js',
        to: 'js/home.js'
    },
    {
        from: 'resources/assets/js/pages/detail.js',
        to: 'js/detail.js'
    },
    {
        from: 'resources/assets/js/pages/post_news.js',
        to: 'js/post_news.js'
    },
    // {
    //     from: 'resources/assets/js/pages/create_collection.js',
    //     to: 'js/create_collection.js'
    // },


];
let build_scss = [
    {
        from: 'resources/assets/scss/pages/search_job/search_job.scss',
        to: 'css/search_job.css'
    },
    {
        from: 'resources/assets/scss/pages/home/home.scss',
        to: 'css/home.css'
    },

    {
        from: 'resources/assets/scss/pages/detail/index.scss',
        to: 'css/detail.css'
    },
    {
        from: 'resources/assets/scss/pages/post_news/index.scss',
        to: 'css/post_news.css'
    },

    {
        from: 'resources/assets/scss/pages/setting/index.scss',
        to: 'css/setting.css'
    },
    {
        from: 'resources/assets/scss/pages/search_categories/index.scss',
        to: 'css/search_categories.css'
    },
    {
        from: 'resources/assets/scss/pages/site_map/index.scss',
        to: 'css/site_map.css'
    },
    {
        from: 'resources/assets/scss/pages/site_map_category/index.scss',
        to: 'css/site_map_category.css'
    },
    {
        from: 'resources/assets/scss/pages/protected/index.scss',
        to: 'css/protected.css'
    },
    {
        from: 'resources/assets/scss/pages/notification_preferences/index.scss',
        to: 'css/notification_preferences.css'
    },
    // {
    //     from: 'resources/assets/scss/pages/terms_of_service/index.scss',
    //     to: 'css/terms_of_service.css'
    // },
    {
        from: 'resources/assets/scss/pages/cookies/index.scss',
        to: 'css/cookies.css'
    },
    {
        from: 'resources/assets/scss/pages/community/index.scss',
        to: 'css/community.css'
    },
    {
        from: 'resources/assets/scss/pages/FAQ/index.scss',
        to: 'css/FAQ.css'
    },
    {
        from: 'resources/assets/scss/pages/license/index.scss',
        to: 'css/license.css'
    },
    {
        from: 'resources/assets/scss/pages/regions/index.scss',
        to: 'css/regions.css'
    },
];

build_js.map((file) => {
    mix.js(file.from, file.to);
});

build_scss.map((file) => {
    mix.sass(file.from, file.to).minify(directory_asset + '/' + file.to);
});

mix.options({
    processCssUrls: false
})
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });

// mix.disableNotifications();
mix.webpackConfig({
    plugins: [
        new webpack.ContextReplacementPlugin(/\.\/locale$/, 'empty-module', false, /js$/),
        new webpack.IgnorePlugin(/^codemirror$/),
    ],
    node: {
        fs: "empty"
    },
    module: {
        rules: [
            {
                test: /\.modernizrrc.js$/,
                use: ['modernizr-loader']
            },
            {
                test: /\.modernizrrc(\.json)?$/,
                use: ['modernizr-loader', 'json-loader']
            }
        ]
    },
    resolve: {
        alias: {
            "handlebars": "handlebars/dist/handlebars.js",
            modernizr$: path.resolve(__dirname, "resources/assets/js/.modernizrrc")
        }
    },
});
if (mix.inProduction()) {
    mix.version();
}
new webpack.LoaderOptionsPlugin({
    test: /\.s[ac]ss$/,
    options: {
        includePaths: [
            path.resolve(__dirname, './public/')
        ]
    }
});


