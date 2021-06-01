<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class SearchJobController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('123work.vn');
        SEOMeta::setDescription('Tin tức 24h về bóng đá, thể thao, giải trí. Tin tức online 24 giờ, tình hình Việt Nam(VN), thế giới. Xem video bóng đá tổng hợp tại 24h.');
        SEOMeta::addKeyword('tin tức 24h, tin tuc 24h, tin tuc trong ngay, bóng đá, thời trang, cười, tintuc, 24h, tin nhanh , the thao, tin nhanh, thoi trang, thời sự, bong da, bao cong an, bao an ninh, thoi su, giai tri, giải trí, bao');
        SEOMeta::addKeyword('tin tức 24h, tin tuc 24h, tin tuc trong ngay, bóng đá, thời trang, cười, tintuc, 24h, tin nhanh , the thao, tin nhanh, thoi trang, thời sự, bong da, bao cong an, bao an ninh, thoi su, giai tri, giải trí, bao');
        SEOMeta::setCanonical('https://www.24h.com.vn');
        SEOMeta::setRobots('index,follow,noodp');
        SEOMeta::addMeta('Language','vi','name');
        SEOMeta::addMeta('copyright','Copyright © 2013 by 24H.COM.VN','name');
        SEOMeta::addMeta('abstract','24H.COM.VN Website tin tức số 1 Việt Nam','name');
        SEOMeta::addMeta('distribution','Global','name');
        SEOMeta::addMeta('author','Tin Tức 24h','name');
        SEOMeta::addMeta('REVISIT-AFTER','1 DAYS','name');
        SEOMeta::addMeta('RATING','GENERAL','name');
        OpenGraph::addProperty('site_name','Tin tức 24h');
        OpenGraph::addProperty('type','Website');
        OpenGraph::addProperty('locale','vi_VN');
        OpenGraph::addProperty('app_id','232505114857147');
        OpenGraph::addProperty('pages','1128104117285467');
        OpenGraph::addProperty('itemprop','Tin tức bóng đá, thể thao, giải trí | Đọc tin tức 24h mới nhất');
        OpenGraph::addProperty('url','https://www.24h.com.vn/');
        OpenGraph::addProperty('description','Tin tức 24h về bóng đá, thể thao, giải trí. Tin tức online 24 giờ, tình hình Việt Nam(VN), thế giới. Xem video bóng đá tổng hợp tại 24h.');

        JsonLd::setType('Organization');
        JsonLd::setSite('Tin tức 24h');
        JsonLd::setUrl('https://www.24h.com.vn/');
        JsonLd::addValue('logo', 'https://cdn.24h.com.vn/images/m2014/images/logo-24h_bookmarks.png');

        JsonLd::setType('WebSite');
        JsonLd::setUrl('https://www.indeed.com');
        JsonLd::addValue('potentialAction',' {
                "@type": "SearchAction",
                "target": "https://www.indeed.com/jobs?q={search_term_string}&from=googlesl",
                "query-input": "required name=search_term_string"
            }');
        $viewData = [
            // Đổi giá trị 0 để hiển thị trang No result
            'result'    => 1
        ];
        return view('pages.search_job.index')->with($viewData);
    }
}
