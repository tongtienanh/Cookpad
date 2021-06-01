<section class="banner-home">
    <div class="container">
        <div class="intro pd-20">
            <div class="content">
                <h1 class="mt-4">{{ __('home.h1') }}</h1>
                <p class="mb-3 work-connection">{{ __('home.h3') }}</p>
            </div>
        </div>
        <div class="wrap-form">
            <form action="{{ route('get.search.submit') }}" class="form-search-job">
                <div class="input-group input-what">
                    <div class="box-input">
                        <div class="box-input-label">Công thức</div>
                        <label for=""class="label-lighthouse">.
                        <input type="text" name="q" autocomplete="off" class="text-indent-80 form-control-md js-suggest-keyword" placeholder="{{ __('home.input_placeholder_keyword') }}">
                        </label>
                    </div>
                </div>
                <div class="input-group button-search">
                    <button type="submit" class="form-control-md btn btn-green">{{ __('home.search') }}</button>
                </div>
            </form>
            @include('component.filter._inc_suggestion_keyword')
        </div>
        <div class="filter-mb">
            <span class="form-control form-search__input form-search__input--mb">{{ __('home.search_job') }}</span>
        </div>
        @include('component._home_categories')
        @include('component._home_banner')
        @include('component.new_friend')
        @include('component.season_collection')
        @include('component.latest_cooksnaps_collection')
        @include('component.tonight_food')
        @include('component.list_item')
    </div>
</section>
