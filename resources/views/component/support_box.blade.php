<div class="support_box">
    <i aria-hidden="true" class="fa fa-comment"></i>

    <div class="support_main_when_show hide">
        <div class="support_main_title">
            <i class="fa fa-home"></i> {{ __('static.box_support.service_support') }}
        </div>

        <div class="support_main_header">
            <div class="support_main_supporter">
                <div class="supporter_avatar">
                    <img data-src="{{asset('statics/images/iso_icon/thanh_hung.webp')}}" class="b-lazy" width="50" height="50" alt="">
                </div>
                <div class="supporter_name">Mr. Thanh Hưng</div>
                <div class="supporter_note">{{ __('static.box_support.123work_talk') }}</div>
            </div>
        </div>

        <div class="support_main_body">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-dollar"></i>
                        {{ __('static.box_support.error_recharge') }}
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-file-text-o"></i>
                        {{ __('static.box_support.cv_template_samples') }}</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-question"></i>
                        {{ __('static.box_support.frequently_question') }}
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-support"></i>
                        {{ __('static.box_support.feedback') }}</a>
                </li>
                <li>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-phone"></i>
                        {{ __('static.box_support.123work_contact') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="support_main_when_hide" style="cursor: pointer;">
        <div class="supporter_avatar">
            <img class="b-lazy" data-src="{{asset('statics/images/iso_icon/thanh_hung.webp')}}" width="40" height="40" alt="">
        </div>
        <span><strong><i>Mr. Thanh Hưng - {{ __('static.box_support.online_support') }}</i></strong></span>
        <div class="btn-close">
            <i class="la la-times"></i>
        </div>
    </div>
</div>
