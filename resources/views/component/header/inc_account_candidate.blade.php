<div class="dropdown dropdown-account">
    <div class="item balance">
        <p class="id">{{ __('static.box_account_dropdown.code_candidate') }}: #111111</p>
    </div>
    @php
        $menus = get_data_json('/json/candidate/candidate_nav.json', 'database');
        $menus_candidate = $menus['account_candidate'];
    @endphp
    @foreach($menus_candidate as $menu)
        <div class="item">
            <div class="top">{{ __($menu['title']) }}</div>
            <ul>
                @foreach($menu['menus'] as $val)
                    @php
                        $url = get_link($val['route'] ?? '', $val['link'] ?? '', $val['link_type'] ?? '');
                        $url = isset($val['id']) ? $url . $val['id'] : $url;
                    @endphp
                    <li><a href="{{ $url }}">{{ __($val['title']) }}</a></li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
