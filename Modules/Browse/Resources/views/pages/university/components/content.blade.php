<section id="browse">
    <div class="container">
        <h1 class="title">{{ __('browse_job.by_university') }}</h1>
        <div class="box-title">
            <h2>{{ __('browse_job.by_letter') }}</h2>
            <div class="line"></div>
        </div>
        @include('browse::components.alpha_list')
        <div class="row list-company-tag">
            @for ($i=1; $i<=27; $i++)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="item-company-tag">
                        <a href="#">Trường đời</a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
