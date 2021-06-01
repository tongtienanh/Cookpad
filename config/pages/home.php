<?php
return [
    'banner' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getBanner',
        'status' => 1,
        'view'  => 'pages.home.components._inc_banner'
    ],
//    'recent_search' => [
//        'google' => true,
//        'service' => \App\Services\HomeService\HomeService::class,
//        'func' => 'getRecentSearch',
//        'status' => 1,
//        'view'  => 'pages.home.components._inc_recent_search'
//    ],
    'feature' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getJobAndCompanyFeature',
        'status' => 0,
        'view' => 'pages.home.components._inc_feature'
    ],
    'category' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getCategoryHot',
        'status' => 0,
        'view' => 'pages.home.components._inc_category'
    ],
    'jobs' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getListJobVip',
        'status' => 0,
        'view' => 'pages.home.components._inc_pro_vip'
    ],
//    'ads' => [
//        'google' => true,
//        'service' => \App\Services\HomeService\HomeService::class,
//        'func' => 'getAds',
//        'status' => 0,
//        'view' => 'pages.home.components._inc_ad_hori'
//    ],
    'why' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getWhyUs',
        'status' => 0,
        'view' => 'pages.home.components._inc_why_us'
    ],
    'resume' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getResume',
        'status' => 0,
        'view' => 'pages.home.components._inc_template_cv'
    ],
//    'resume_plan' => [
//        'google' => true,
//        'service' => \App\Services\HomeService\HomeService::class,
//        'func' => 'getResumePlan',
//        'status' => 1,
//        'view' => 'pages.home.components._inc_template_cv_plan'
//    ],
    'feedback' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getFeedBack',
        'status' => 0,
        'view' => 'pages.home.components._inc_feed_back'
    ],
    'partner' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getPartner',
        'status' => 0,
        'view' => 'pages.home.components._inc_partner'
    ],
    'post_intro' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getPostIntro',
        'status' => 0,
        'view' => 'pages.home.components._inc_post_job'
    ],
    'suggest_link' => [
        'google' => true,
        'service' => \App\Services\HomeService\HomeService::class,
        'func' => 'getSuggestLink',
        'status' => 1,
        'view' => 'pages.home.components._inc_suggest_link'
    ]
];
