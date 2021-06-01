<?php

return [
    'top_nav' => [

    ],
    'top_nav_sub' => [
        'job' =>  [
            [
                'title' => 'static.sub_menu.jobs.search_job',
                'key'=> 'top_nav_sub.find_job',
                'auth'=> 1,
                'link' => '/search',
            ],
            [
                'title' => 'static.sub_menu.jobs.job_match',
                'key'=> 'top_nav_sub.match',
                'auth'=> 1,
                'link' => '/user/jobs/match',
            ],
            [
                'title' => 'static.sub_menu.jobs.job_apply',
                'key'=> 'top_nav_sub.apply',
                'auth'=> 1,
                'link' => '/user/jobs/apply',
            ],
            [
                'title' => 'static.sub_menu.jobs.job_save',
                'key'=> 'top_nav_sub.save',
                'auth'=> 1,
                'link' => '/user/jobs/save',
            ],
            [
                'title' => 'static.sub_menu.jobs.job_seen',
                'key'=> 'top_nav_sub.view',
                'auth'=> 1,
                'link' => '/user/jobs/view',
            ],
            [
                'title' => 'static.sub_menu.jobs.job_setting',
                'key'=> 'top_nav_sub.setting',
                'auth'=> 1,
                'link' => '/user/jobs/setting',
            ],
        ],
        'browse' => [
            [
                'title' => 'browse_job.header_by_company',
                'key'=> 'top_nav_sub.browse_company',
                'link' => '/browse/company',
            ],
            [
                'title' => 'browse_job.header_by_skill',
                'key'=> 'top_nav_sub.browse_skill',
                'link' => '/browse/skill',
            ],
            [
                'title' => 'browse_job.header_by_career',
                'key'=> 'top_nav_sub.browse_career',
                'link' => '/browse/career',
            ],
            [
                'title' => 'browse_job.header_by_location',
                'key'=> 'top_nav_sub.browse_location',
                'link' => '/browse/location',
            ],
            [
                'title' => 'browse_job.header_by_university',
                'key'=> 'top_nav_sub.browse_university',
                'link' => '/browse/university',
            ],
        ]
    ],
    'footer'        => [
        [
            'title' => 'about_123work',
            'class' => 'js-about',
            'id'    => 'js-about',
            'sub'   => [
                [
                    'title' => 'introduce',
                    'route' => 'get.about.index',
                    'link'  => ''
                ],
                [
                    'title' => 'terms_of_use',
                    'route' => 'get.static.term_of_use',
                    'link'  => ''
                ],
                [
                    'title' => 'operation_regulation',
                    'route' => 'get.static.operation_regulation',
                    'link'  => ''
                ],
                [
                    'title' => 'privacy_policy',
                    'route' => 'get.static.policy_info_security',
                    'link'  => ''
                ],
                [
                    'title' => 'refund_policy',
                    'route' => 'get.static.policy_refund',
                    'link'  => ''
                ],
                [
                    'title' => 'resolve_complaint',
                    'route' => 'get.static.process_complaint',
                    'link'  => ''
                ],
                [
                    'title' => 'frequently_question',
                    'route' => 'get.static.frequently_question',
                    'link'  => ''
                ],
            ],
        ],
        //        [
        //            'title' => 'employer',
        //            'class' => 'js-employer',
        //            'id'    => 'js-policy',
        //            'sub'   => [
        //                [
        //                    'title' => 'employer.post_job',
        //                    'route' => '',
        //                    'link'  => ''
        //                ],
        //                [
        //                    'title' => 'employer.find_resume',
        //                    'route' => '',
        //                    'link'  => ''
        //                ],
        //                [
        //                    'title' => 'employer.talent_solution',
        //                    'route' => '',
        //                    'link'  => ''
        //                ],
        //                [
        //                    'title' => 'employer.product',
        //                    'route' => '',
        //                    'link'  => ''
        //                ],
        //            ],
        //        ],
        [
            'title' => 'user',
            'class' => 'js-user',
            'id'    => 'js-user',
            'sub'   => [
                [
                    'title' => 'create_cv',
                    'route' => 'get.cv.template',
                    'link'  => ''
                ],
                [
                    'title' => 'find_job',
                    'route' => 'get.search.index',
                    'link'  => ''
                ],
                //                [
                //                    'title' => 'top_employer',
                //                    'route' => '',
                //                    'link'  => ''
                //                ],
                //                [
                //                    'title' => 'quiz',
                //                    'route' => '',
                //                    'link'  => ''
                //                ],
                // [
                //     'title' => 'hr_insider',
                //     'route' => 'home',
                //     'link'  => ''
                // ],
            ],
        ],
        [
            'title' => 'guide',
            'class' => 'js-guide',
            'id'    => 'js-guide',
            'sub'   => [
                [
                    'title' => 'browse-skill',
                    'route' => '',
                    'link'  => '/browse/skill'
                ],
                [
                    'title' => 'browse-location',
                    'route' => '',
                    'link'  => '/browse/location'
                ],
                [
                    'title' => 'browse-career',
                    'route' => '',
                    'link'  => '/browse/career'
                ],
                [
                    'title' => 'browse-company',
                    'route' => '',
                    'link'  => '/browse/company'
                ],
            ],
        ],
    ],
];
