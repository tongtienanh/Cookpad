<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user::pages.profile.index');

    }

    public function recipes()
    {
        return view('user::pages.my_recipes.index');

    }

    public function sent()
    {
        return view('user::pages.sent_cooksnaps.index');

    }

    public function user_info()
    {
        return view('user::pages.user_info.index');

    }

    public function profile_collections()
    {
        return view('user::pages.collection.index');

    }
    public function profile_history()
    {
        return view('user::pages.history.index');

    }
    public function detail_collection()
    {
        return view('user::pages.detail_collection.index');

    }
    public function news_post()
    {
        return view('user::pages.new_post.index');

    }
    public function videos_profile()
    {
        return view('user::pages.video.index');

    }
}
