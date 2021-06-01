let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');

let directory_bundle = path.normalize('public/statics/browse_static/');
mix.setPublicPath(directory_bundle);
let build_scss = [
    {
        from: '/Resources/assets/sass/pages/company/index.scss',
        to: 'css/company.css'
    },
    {
        from: '/Resources/assets/sass/pages/skill/index.scss',
        to: 'css/skill.css'
    },
    {
        from: '/Resources/assets/sass/pages/career/index.scss',
        to: 'css/career.css'
    },
    {
        from: '/Resources/assets/sass/pages/location/index.scss',
        to: 'css/location.css'
    },
    {
        from: '/Resources/assets/sass/pages/university/index.scss',
        to: 'css/university.css'
    },
];

let build_js = [
    {
        from: '/Resources/assets/js/pages/company/index.js',
        to: 'js/company.js'
    },
    {
        from: '/Resources/assets/js/pages/skill/index.js',
        to: 'js/skill.js'
    },
    {
        from: '/Resources/assets/js/pages/career/index.js',
        to: 'js/career.js'
    },
    {
        from: '/Resources/assets/js/pages/location/index.js',
        to: 'js/location.js'
    },
    {
        from: '/Resources/assets/js/pages/university/index.js',
        to: 'js/university.js'
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
