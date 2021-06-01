<div class="category-hot">
    <div class="title">
        <h3>{{ __('home.mobile.hot_category') }}</h3>
    </div>
    <div class="list-category">
        @php
            $data = file_get_contents(database_path("json/background/home.json"));
            $data = json_decode($data, true)['category'];
        @endphp
        @foreach($data as $item)
            <div class="item-col">
                <a href="" class="item item-customer">
                    <div class="img">
                        <img src="{{ url('statics/images/icon/' . $item['avatar']) }}" alt="">
                    </div>
                    <div class="name">
                        {{ $item['name'] }}
                    </div>
                    <div class="job">
                        123 {{ __('home.position') }}
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="border"></div>
</div>
