<div class="page-auth row">
    <div class="card auth-form">
        <div class="card-body">
            <form action="{{route('post.auth.login')}}" method="post">
                <input type="hidden" name="_token" value="">
                <input type="hidden" name="call_back" value=""> <input type="hidden" name="type" value="">
                <div class="form-group">
                    <input type="email" class="form-control form-control-md" name="email"
                           value="" {{ isset($autocomplete) ? 'autocomplete=off' : '' }}
                           placeholder="{{ __('static.box_auth.login.placeholder_account') }}"></div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-md"
                           name="password"
                           placeholder="{{ __('static.box_auth.login.placeholder_password') }}"></div>
                <input type="hidden" name="callback" value="">
                <button type="submit"
                        class="btn btn-green btn-p-1230 btn-radius btn-block text-bold js-iframe-login">{{ __('static.box_auth.login.login') }}</button>
                <a href="{{ route('get.auth.forgot_pass') }}"
                   class="mt-2 text-bold btn btn-green-outline btn-p-1230 btn-block">{{ __('static.box_auth.login.forgot_password') }}
                </a>
            </form>

            <div class="social-text">
                <div class="text-center text-sm mt10"> {{ __('static.box_auth.login.not_account') }}
                </div>
                <div class="social-login-container">
                    <a class="" rel="nofollow" data-gtm="start-auth"
                       href="{{ route('get.auth.register') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                            <g fill="none" fill-rule="evenodd">
                                <circle cx="24" cy="24" r="24" fill="#171A17"></circle>
                                <path fill="#338722" fill-rule="nonzero"
                                      d="M19.113 34.02c-.264 0-.99.33-.99.99 0 .66.726.99.99.99h10.145c.274 0 .99-.33.99-.99 0-.66-.716-.99-.99-.99H19.113z"></path>
                                <path fill="#FFF" fill-rule="nonzero"
                                      d="M30.35 12.002h-1.921c-.53-.024-.982.148-1.356.515-.562.551-.745.862-.745 1.639v12.532c-.18 1.365-.959 2.047-2.337 2.047-1.378 0-2.12-.682-2.224-2.047v-2.454H18v2.849c0 1.2.045 4.846 5.991 4.707 5.946-.14 6.359-3.483 6.359-4.707v-15.08z"></path>
                            </g>
                        </svg>
                        <div class="heading-xsmall social-login-text">{{ __('static.box_auth.login.create_auth') }}</div>
                    </a>
                    <a class="facebook-login" data-gtm="start-auth" rel="nofollow" data-method="post"
                       href="/users/auth/facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                            <path fill="#3B5998" fill-rule="evenodd"
                                  d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0zm3.42 12c-3.407 0-5.634 2.064-5.634 5.802v3.285H18v4.311h3.786v10.42c.76.12 1.538.182 2.33.182.793 0 1.571-.062 2.33-.181v-10.42h3.475l.662-4.312h-4.136V18.29c0-1.18.577-2.329 2.43-2.329h1.88v-3.67S29.051 12 27.42 12z"></path>
                        </svg>
                        <div class="heading-xsmall social-login-text">{{ __('static.box_auth.login_fb') }}</div>
                    </a>
                    <a class="google-login" data-gtm="start-auth" rel="nofollow" data-method="post"
                       href="/users/auth/google_oauth2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                            <g fill="none" fill-rule="evenodd">
                                <circle cx="24" cy="24" r="24" fill="#F7F7F7"></circle>
                                <g>
                                    <path fill="#4285F4"
                                          d="M17.64 9.205c0-.639-.057-1.252-.164-1.841H9v3.481h4.844c-.209 1.125-.843 2.078-1.796 2.716v2.259h2.908c1.702-1.567 2.684-3.875 2.684-6.615z"
                                          transform="translate(15 15)"></path>
                                    <path fill="#34A853"
                                          d="M9 18c2.43 0 4.467-.806 5.956-2.18l-2.908-2.259c-.806.54-1.837.86-3.048.86-2.344 0-4.328-1.584-5.036-3.711H.957v2.332C2.438 15.983 5.482 18 9 18z"
                                          transform="translate(15 15)"></path>
                                    <path fill="#FBBC05"
                                          d="M3.964 10.71c-.18-.54-.282-1.117-.282-1.71s.102-1.17.282-1.71V4.958H.957C.347 6.173 0 7.548 0 9s.348 2.827.957 4.042l3.007-2.332z"
                                          transform="translate(15 15)"></path>
                                    <path fill="#EA4335"
                                          d="M9 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.463.891 11.426 0 9 0 5.482 0 2.438 2.017.957 4.958L3.964 7.29C4.672 5.163 6.656 3.58 9 3.58z"
                                          transform="translate(15 15)"></path>
                                </g>
                            </g>
                        </svg>
                        <div class="heading-xsmall social-login-text">{{ __('static.box_auth.login_google') }}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
