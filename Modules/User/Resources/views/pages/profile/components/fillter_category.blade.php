<div class="fillter_category">
    <div class="container">
        <ul class="">
            <li class="news-post"  >
                <a href="{{route('news_post')}}">
                 Bài viết
                </a>
            </li>
            <li class="inline-block  practice_img">
                <a  class="tracking-wider block px-xs py-sm xs:p-rg hover:text-cookpad-gray-700" href="{{route('sent_cooksnaps')}}">
                    Hình ảnh
                </a>
            </li>
            <li class="inline-block  videos" >
                <a class="tracking-wider block px-xs py-sm xs:p-rg hover:text-cookpad-gray-700" href="{{route('videos_profile')}}">
                   Videos
                </a>
            </li>
            <li class="inline-block  profile-collection" >
                <a class="tracking-wider block px-xs py-sm xs:p-rg hover:text-cookpad-gray-700" href="{{route('profile_collections')}}">
                    Bộ sưu tập
                </a>
            </li>
            <li class="inline-block  history" >
                <a class="tracking-wider block px-xs py-sm xs:p-rg hover:text-cookpad-gray-700" href="{{route('profile_history')}}">
                  Hoạt động
                </a>
            </li>
            <li class="inline-block  see-more"  style="position: relative">
                <a class="tracking-wider block px-xs py-sm xs:p-rg hover:text-cookpad-gray-700" href="#" rel="nofollow">
                    Xem thêm <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                </a>
                <ul class="tabs-dropdown">
                    <li><a href="{{route('recipes')}}">Công thức của tôi</a></li>
                    <li><a href="{{route('profile')}}">Bài viết đã lưu</a></li>
                </ul>
            </li>
        </ul>
        <div class="items-center">
            @if (\Request::route()->getName() == 'profile_collections')
                <div class="capitalize"><h4>Bộ sưu tập</h4></div>
            @elseif (\Request::route()->getName() == 'recipes')
                <div class="capitalize"><h4>Công thức của tôi</h4></div>
                @elseif (\Request::route()->getName() == 'news_post')
                <div class="capitalize"><b>Bài viết</b></div>
                @elseif(\Request::route()->getName() == 'profile')
                <div class="capitalize"><h4>Bài viết đã lưu</h4></div>
                @elseif(\Request::route()->getName() == 'videos_profile')
                <div class="capitalize"><h4>Video</h4></div>
            @elseif(\Request::route()->getName() == 'sent_cooksnaps')
                <div class="capitalize"><h4>Hình ảnh</h4></div>
            @else
                <div  style="visibility: hidden" class="capitalize">3 món</div>

            @endif
           <div class="d-flex box-search" style="align-items: center">
               @if (\Request::route()->getName() == 'profile_collections')
                   <button style="margin-right: 8px" class="create-collection">+ Tạo bộ sưu tập</button>
               @endif

            <form class="user-recipe-search form-alternate flex justify-end" autocomplete="off" accept-charset="UTF-8" method="get">
                <label class="" for="" style="color: #FFFFFF">.
                <input type="text" name="bq" id="bq" class="user-text-field form-control mr-sm" placeholder="Tìm Món" autocapitalize="off">
                </label>
                <label for="">
                <input type="submit" name="commit" value="Tìm" aria-label="Tìm Món" class="button-search" data-disable-with="Tìm">
                <i class="fa fa-search" aria-hidden="true"></i>
                </label>
            </form>
           </div>
        </div>
    </div>
</div>
