let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');

let directory_bundle = path.normalize('public/statics/blog_static/');
mix.setPublicPath(directory_bundle);
let build_scss = [
    // {
    //     from: '/Resources/assets/sass/pages/home/index.scss',
    //     to: 'css/home.css'
    // },
    {
        from: '/Resources/assets/sass/pages/blog/index.scss',
        to: 'css/blog.css'
    },
    {
        from: '/Resources/assets/sass/pages/blog_detail/index.scss',
        to: 'css/blog_detail.css'
    },
    {
        from: '/Resources/assets/sass/pages/blog_job_search/index.scss',
        to: 'css/blog_job_search.css'
    }
];

let build_js = [
    // {
    //     from: '/Resources/assets/js/pages/home/index.js',
    //     to: 'js/home.js'
    // },
    {
        from: '/Resources/assets/js/pages/blog.js',
        to: 'js/blog.js'
    },
    {
        from: '/Resources/assets/js/pages/blog_detail.js',
        to: 'js/blog_detail.js'
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
