<div id="filter-city">
    <div class="header-search">
        <div class="search">
            <div class="prev-city">
                <img class="img-svg" src="{{ url('statics/images/icon/prev_333.svg') }}" alt="">
            </div>
            <div class="input-city">
                <label for="" class="label-lighthouse">.
                <input type="text" class="form-control" placeholder="{{ __('static.box_search.placeholder_city') }}">
                </label>
            </div>
        </div>
    </div>
    <div class="filter-c">
        <ul class="list-item-c">
            <li class="item-c">
                <input type="radio" id="hn" name="city" data-id="#filter-location">
                <label for="hn">Hà Nội</label>
            </li>
            <li class="item-c">
                <input type="radio" id="hcm" name="city" data-id="#filter-location">
                <label for="hcm">TP Hồ Chí Minh</label>
            </li>
            <li class="item-c">
                <input type="radio" id="tb" name="city" data-id="#filter-location">
                <label for="tb">Thái Bình</label>
            </li>
        </ul>
    </div>
</div>
