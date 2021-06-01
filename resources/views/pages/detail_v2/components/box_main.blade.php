<div class="container" style="margin-top: 20px">
    @include('component.breadcrumb')
    <div class="box-content" style="margin-top: 20px">
        <div class="box-home-main" style="width:70%;margin-right: 40px">
            @include('blog::pages.blog_detail.components.block_left')
            @include('component.blog_newsfeed_item')
{{--            @include('component.blog_main_news')--}}
            @include('component.paginate')

        </div>
        <div class="fix-adv-scroll">
            @include('blog::pages.blog_job_search.components.block_right')
        </div>
    </div>
</div>
