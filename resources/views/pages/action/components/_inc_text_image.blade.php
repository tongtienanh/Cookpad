<div class="group-section">
    <section class="section text-image">
        <div class="box-image">
            <img src="{{ url('statics/images/banner/file-searching.jpg') }}" alt="">
        </div>
        <div class="box-text">
            <h2>{{ trans('landing_123work_operate.join_community') }}</h2>
            <p>{{ trans('landing_123work_operate.you_are_looking') }}. <a href="{{ route('get.auth.login') }}">{{ trans('landing_123work_operate.login') }}</a> {{ trans('landing_123work_operate.website_to_join') }}</p>
            <ol class="benefit">
                <li>
                    <strong>{{ trans('landing_123work_operate.easy_to_find_CV') }}</strong>:  {{ trans('landing_123work_operate.with_search_engine') }}
                </li>
                <li>
                    <strong>{{ trans('landing_123work_operate.quickly_open_profile') }}</strong>:  {{ trans('landing_123work_operate.you_can_contact') }}
                </li>
                <li>
                    <strong>{{ trans('landing_123work_operate.manage_record') }}</strong>:  {{ trans('landing_123work_operate.we_provide_resume_manager') }}
                </li>
            </ol>
            <ul class="question">
                <li>
                    <a href="#tham-gia-cd" class="question-answer">{{ trans('landing_123work_operate.join_the_community') }}?</a>
                    <div id="tham-gia-cd" class="dropdown-question">
                        <p>
                            <strong>{{ trans('landing_123work_operate.step_one') }}: {{ trans('landing_123work_operate.register_account') }}</strong> <br>
                            {{ trans('landing_123work_operate.is_register') }}: <a href="{{ route('get.auth.register') }}">link</a> <br>
                            {{ trans('landing_123work_operate.save_register') }} "<strong>{{ trans('landing_123work_operate.register') }}</strong>"
                            {{ trans('landing_123work_operate.note_register') }}
                        </p>
                        <p>
                            <strong>{{ trans('landing_123work_operate.step_two') }}: {{ trans('landing_123work_operate.login') }}</strong>  <br>
                            {{ trans('landing_123work_operate.is_login') }}: <a href="{{ route('get.auth.register') }}">link</a>
                        </p>
                        <p>
                            <strong>{{ trans('landing_123work_operate.step_three') }}: {{ trans('landing_123work_operate.search_candidate') }}</strong> <br>
                            {{ trans('landing_123work_operate.note_search_candidate') }}
                        </p>
                    </div>
                </li>
                <li>
                    <a href="#gioi-thieu-cv" class="question-answer">{{ trans('landing_123work_operate.besides_cv_search') }}?</a>
                    <div id="gioi-thieu-cv" class="dropdown-question">
                        <p>{{ trans('landing_123work_operate.introduce_cv') }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section text-image">
        <div class="box-image">
            <img src="{{ url('statics/images/banner/online-training.jpg') }}" alt="">
        </div>
        <div class="box-text">
            <h2>{{ trans('landing_123work_operate.post_resume') }}</h2>
            <p>{{ trans('landing_123work_operate.few_simple_step') }}
                <a href="">{{ trans('landing_123work_operate.policy_terms') }}</a>
                {{ trans('landing_123work_operate.ours') }}
            </p>
            <ol class="benefit">
                <li>
                    <strong>{{ trans('landing_123work_operate.post_process') }}</strong>: {{ trans('landing_123work_operate.update_some_candidate') }}
                </li>
                <li>
                    <strong>{{ trans('landing_123work_operate.profile_norm') }}</strong>:  {{ trans('landing_123work_operate.you_are_allowed') }}
                </li>
                <li>
                    <strong>{{ trans('landing_123work_operate.get_notification') }}</strong>:  {{ trans('landing_123work_operate.we_will_notify') }}
                </li>
            </ol>
            <ul class="question">
                <li>
                    <a href="#cach-gioi-thieu-cv" class="question-answer">{{ trans('landing_123work_operate.how_can_i_share') }}?</a>
                    <div id="cach-gioi-thieu-cv" class="dropdown-question">
                        <p>
                            <strong>{{ trans('landing_123work_operate.step_one') }}: {{ trans('landing_123work_operate.register_account') }}</strong> <br>
                            {{ trans('landing_123work_operate.is_register') }}: <a href="{{ route('get.auth.register') }}">link</a> <br>
                            {{ trans('landing_123work_operate.save_register') }} "<strong>{{ trans('landing_123work_operate.register') }}</strong>"
                            {{ trans('landing_123work_operate.note_register') }}
                        </p>
                        <p>
                            <strong>{{ trans('landing_123work_operate.step_two') }}: {{ trans('landing_123work_operate.login') }}</strong>  <br>
                            {{ trans('landing_123work_operate.is_login') }}: <a href="{{ route('get.auth.register') }}">link</a>
                        </p>
                        <p>
                            <strong>{{ trans('landing_123work_operate.step_three') }}: {{ trans('landing_123work_operate.introduce_candidate') }}</strong> <br>
                            {{ trans('landing_123work_operate.note_introduce_candidate') }}
                        </p>
                    </div>
                </li>
                <li>
                    <a href="#chia-se-toi-da-cv" class="question-answer">{{ trans('landing_123work_operate.how_many_candidate') }}?</a>
                    <div id="chia-se-toi-da-cv" class="dropdown-question">
                        <p>{{ trans('landing_123work_operate.max_introduce_cv') }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section text-image">
        <div class="box-image">
            <img src="{{ url('statics/images/banner/writing.jpg') }}" alt="">
        </div>
        <div class="box-text">
            <h2>{{ trans('landing_123work_operate.quality_assurance_profile') }}</h2>
            <p>{{ trans('landing_123work_operate.connecting_people') }} <a href="">{{ trans('landing_123work_operate.search_resume') }}</a> {{ trans('landing_123work_operate.adopts_123work_platform') }} </p>
            <ol class="benefit">
                <li>
                    <strong>{{ trans('landing_123work_operate.authenticate_info') }}</strong>:  {{ trans('landing_123work_operate.all_candidate_info') }}
                </li>
                <li>
                    <strong>{{ trans('landing_123work_operate.candidate_searching_work') }}</strong>:  {{ trans('landing_123work_operate.any_resume_displayed') }}
                </li>
                <li>
                    <strong>{{ trans('landing_123work_operate.refund') }} 100%</strong>: {{ trans('landing_123work_operate.if_the_candidate') }}
                </li>
            </ol>
            <ul class="question">
                <li>
                    <a href="#chat-luong-cv" class="question-answer">{{ trans('landing_123work_operate.how_CV_quality_guaranteed') }}?</a>
                    <div id="chat-luong-cv" class="dropdown-question">
                        <p>{{ trans('landing_123work_operate.note_quality_one') }}</p>
                    </div>
                </li>
                <li>
                    <a href="#khong-trung-cv" class="question-answer">{{ trans('landing_123work_operate.does_it_happen') }}? </a>
                    <div id="khong-trung-cv" class="dropdown-question">
                        <p>{{ trans('landing_123work_operate.note_quality_two') }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section text-image">
        <div class="box-image">
            <img src="{{ url('statics/images/banner/money.jpg') }}" alt="">
        </div>
        <div class="box-text">
            <h2>{{ trans('landing_123work_operate.get_commission') }}</h2>
            <p>{{ trans('landing_123work_operate.you_will_receive') }}</p>
            <ol class="benefit">
                <li>
                    <strong>{{ trans('landing_123work_operate.increase_income') }}</strong>:  {{ trans('landing_123work_operate.candidate_search_community') }}
                </li>
                <li>
                    <strong>{{ trans('landing_123work_operate.improve_reputation') }}</strong>: {{ trans('landing_123work_operate.become_a_member') }}
                </li>
            </ol>
            <ul class="question">
                <li>
                    <a href="#nhan-hoa-hong" class="question-answer">{{ trans('landing_123work_operate.how_to_get_commission') }}?</a>
                    <div id="nhan-hoa-hong" class="dropdown-question">
                        <p>{{ trans('landing_123work_operate.receive_commissions_one') }}</p>
                        <p>{{ trans('landing_123work_operate.receive_commissions_two') }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</div>
