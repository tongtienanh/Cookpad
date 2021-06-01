@if(not_bot())
    <div id="content" class="sidebar-right">
        <div class="job-alert mb-2">
            <div class="job-alert__head">
                <h4>{{ __('search_job.receive_by_email') }}</h4>
            </div>
            <form action="">
                <label for="input-email-lb">{{ __('search_job.my_email') }}</label>
                <input type="text" id="input-email-lb">
                <button class="btn btn-radius ">{{ __('search_job.active_') }}</button>
                <div class="job-alert__caption">
                    {{ __('search_job.text_proxy_1') }}
                    <a href="#">{{ __('search_job.term_') }}</a> {{ __('search_job.text_proxy_2') }}
                </div>
            </form>
        </div>

        <div class="ads">
            <div class="ad-item mb-2">
                <a href="">
                    <img style="width: 320px" src="https://static.topcv.vn/manual/giao-hang-tiet-kiem-tuyen-dung-2020-03-12.png" alt="">
                </a>
            </div>

            <div class="ad-item mb-2">
                <a href="">
                    <img style="width: 320px" src="https://static.topcv.vn/manual/giao-hang-tiet-kiem-tuyen-dung-2020-03-12.png" alt="">
                </a>
            </div>
        </div>

        {{--<div tabindex="-1" class="box-detail">--}}
        {{--<div class="box-detail__head">--}}
        {{--<div class="box-detail__title">--}}
        {{--<a href="{{ route('get.detail_job.index') }}">PHP Developer (£25,000–£33,000 per annum) 18 month contract</a>--}}
        {{--</div>--}}
        {{--<div class="box-detail__info">--}}
        {{--<a href="">VNP Group</a>--}}
        {{--<span> - Hà Nội</span>--}}
        {{--</div>--}}
        {{--<div class="box-detail__button">--}}
        {{--<a href="#" class="btn btn-radius btn-lg btn-apply">{{ __('search_job.apply_now') }}</a>--}}
        {{--<a href="#" class="btn-save">--}}
        {{--<svg role="img" class="">--}}
        {{--<g>--}}
        {{--<path d="M16.5,3A6,6,0,0,0,12,5.09,6,6,0,0,0,7.5,3,5.45,5.45,0,0,0,2,8.5C2,12.28,5.4,15.36,10.55,20L12,21.35,13.45,20C18.6,15.36,22,12.28,22,8.5A5.45,5.45,0,0,0,16.5,3ZM12.1,18.55l-0.1.1-0.1-.1C7.14,14.24,4,11.39,4,8.5A3.42,3.42,0,0,1,7.5,5a3.91,3.91,0,0,1,3.57,2.36h1.87A3.88,3.88,0,0,1,16.5,5,3.42,3.42,0,0,1,20,8.5C20,11.39,16.86,14.24,12.1,18.55Z"></path>--}}
        {{--</g>--}}
        {{--</svg>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="box-detail__content js-content-detail">--}}
        {{--<div class="meta-info">--}}
        {{--<div class="box-detail__benefit">--}}
        {{--<span class="icon"></span>--}}
        {{--<span class="text">Bristol</span>--}}
        {{--</div>--}}
        {{--<div class="box-detail__benefit">--}}
        {{--<span class="icon"></span>--}}
        {{--<span class="text">Temporary, Contract, Permanent</span>--}}
        {{--</div>--}}
        {{--<div class="box-detail__benefit">--}}
        {{--<span class="icon"></span>--}}
        {{--<span class="text">£25,000 - £33,000 a year</span>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="wrap-content">--}}
        {{--<p>Skill set required: OOP PHP | SQL | HTML | CSS | JavaScript | AJAX | JSON | GIT</p>--}}
        {{--<p>Are you an enthusiastic PHP web developer with a strong understanding of Object-Oriented--}}
        {{--PHP? We have a motivated team who will be very grateful to you if you can solve their problems--}}
        {{--and implement their new ideas into our internal and external websites. You will find the work--}}
        {{--varied, challenging and rewarding - and always appreciated by the rest of the team! Tasks--}}
        {{--components the occasional large project, multiple mini-projects, adding new features to existing--}}
        {{--systems, and fixing bugs that have come to light. A notable amount of existing code is in ASP--}}
        {{--and legacy PHP and needs to be recoded in OOP PHP.</p>--}}
        {{--<p>ZigZag Education is an independent educational publisher of photocopiable worksheets, workbooks,--}}
        {{--topic tests, practice exam papers and also digital resources for teachers of KS3, GCSE, A Level,--}}
        {{--BTEC, etc. There are approximately 50 of us across the team, developing products we believe in--}}
        {{--which--}}
        {{--support teachers and students. You may be our sole coder working under the direction of the--}}
        {{--Commissioning Editor and Head of Business Support.</p>--}}
        {{--<div class="meta-link">--}}
        {{--<span>5 {{ __('search_job.yesterday_') }}ngày trước</span>--}}
        {{-----}}
        {{--<a href="">{{ __('search_job.apply_on_website') }}</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
@endif
