<ul class="">
    @php $url = app('request')->url(); @endphp
    @foreach (config('setting.page_static.pages') as $item)
        <li class="{{ $url === route($item['route']) ? 'active' : '' }}">
            <a href="{{ route($item['route']) }}">
                {{ trans('static.'.$item['title']) }}
            </a>
        </li>
    @endforeach
</ul>
