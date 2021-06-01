<?php

namespace Modules\Rss\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Modules\Rss\Services\JobDataRssService;

class RssJobController extends Controller
{
    protected $jobDataRssService;

    public function __construct()
    {
//        $this->jobDataRssService = $jobDataRssService;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $feed = App::make("feed");
        $feed->setCache(60, 'laravelFeedKey');
        // check if there is cached feed and build new only if is not
        if (!$feed->isCached()) {
            $feed->title = 'Your title';
            $feed->description = 'Your description';
            $feed->logo = 'http://yoursite.tld/logo.jpg';
            $feed->link = url('feed');
            $feed->setDateFormat('datetime');
            $feed->pubdate = Carbon::now();
            $feed->lang = 'en';
            $feed->setShortening(true); // true or false
            $feed->setTextLimit(100); // maximum length of description text
        }

        return $feed->render('feed::example');
    }
}
