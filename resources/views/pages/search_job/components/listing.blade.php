<div id="listing" class="col-lg-12 col-xl-9">
    @if ($result)
    <div class="heading">
        <p class="tips mb-2" style="font-size: 1.2rem">
            Tại Thành Phố Hồ Chí Minh
        </p>
        <p class="sum">
            {{ __('search_job.yes') }} 4922 {{ __('search_job.results_consistent') }}
        </p>
        <div class="filter-key">
            <a href="#" rel="nofollow">Cơm<i class="la la-times"></i></a>
            <a href="#" rel="nofollow">Thành phố Hồ Chí Minh<i class="la la-times"></i></a>
            <a href="#" rel="nofollow">Khó<i class="la la-times"></i></a>
            <a href="#" rel="nofollow">Nướng quay<i class="la la-times"></i></a>
            <a href="#" rel="nofollow">Hấp<i class="la la-times"></i></a>
        </div>
        <div class="address-highlights">
            <div class="title">
                <h4>{{ __('search_job.address_highlight') }}</h4>
                <div class="row list-ah">
                    <div class="col-md-4">
                        <a href="#" rel="nofollow">Cơm gà 102 thái thịnh</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" rel="nofollow">Sale / Kinh Doanh Đà Nẵng</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" rel="nofollow">Sale bán hàng Thái Bình</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" rel="nofollow">Sale Manage Bình Dương</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" rel="nofollow">Sale bán hàng Hải Phòng</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" rel="nofollow">Sale Quảng Ninh</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Result  --}}
    @include('component.job._list_job')

    {{-- Paginate    --}}
    <div class="paginate">
        <a href="#" class="btn btn-radius btn-block btn-more-job">{{ __('search_job.view_more') }}</a>
        <ul class="paginate__list">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">{{ __('search_job.next_') }} »</a></li>
        </ul>
    </div>

    <div class="email-alert">
        <div class="title">
            <img src="{{ url('statics/images/icon/email.svg') }}" alt="">
            <span>{{ __('search_job.box_email.email_notify') }}</span>
        </div>
        <form action="" id="frm-email">
            <label for="" class="label-lighthouse">.
            <input type="text" class="form-control" placeholder="{{ __('search_job.box_email.placeholder_email') }}">
            </label>
            <button type="button" class="btn btn-green btn-p-1230">{{ __('search_job.box_email.submit_email') }}</button>
        </form>
        <div class="secret">
            <p>
                {{ __('search_job.box_email.email_des_1') }}
                <a href="{{ route('get.static.term_of_use') }}" target="_blank">{{ __('static.term_of_use') }}</a> {{ __('search_job.box_email.and') }}
                <a href="{{ route('get.static.policy_info_security') }}" target="_blank">{{ __('static.policy_info_security') }}</a>
                {{ __('search_job.box_email.email_des_2') }}
            </p>
        </div>
    </div>
    @include('pages.search_job.components.related')
    @else
        <div class="alert-no-resutl">
            {{ __('search_job.search_') }} <strong>Tuyển dụng, tìm việc làm tại Hà Nội</strong> {{ __('search_job.not_match') }}
        </div>
        <div class="suggest-text">
            <h4>{{ __('search_job.suggest_search') }}:</h4>
            <ul>
                <li>{{ __('search_job.try_again_keyword') }}</li>
                <li>{{ __('search_job.check_spell') }}</li>
                <li>{{ __('search_job.replace_stand_word') }}</li>
            </ul>
        </div>
    @endif
</div>
