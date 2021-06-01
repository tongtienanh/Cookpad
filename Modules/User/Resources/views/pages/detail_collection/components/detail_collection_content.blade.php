<div class="container">
    <div class="page-account-info">
        <div class="member-collection-box">
            <div class="collection-config">
                <div class="pull-left">
                    <span><i class="fa fa-th-large" aria-hidden="true"></i> Bộ sưu tập</span>
                </div>
                <div class="pull-right">
                    <a ng-href="/bo-suu-tap/anh_tien2445/yeu-thich" class="btn btn-share" href="" target="_self">
                        <span> <i class="fa fa-list-ul" aria-hidden="true"></i></span> Chia sẻ
                    </a>
                    <ul class="share-dropdown">
                        <li><a href=""><span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>Facebook</a></li>
                        <li><a href=""><span><i class="fa fa-twitter-square" aria-hidden="true"></i></span>Twitter</a></li>
                        <li><a href=""><span><i class="fa fa-external-link" aria-hidden="true"></i></span>Copy link</a></li>
                    </ul>
                </div>
            </div>
            <div class="title"><h3>Yêu thích</h3></div>
            <div class="member-collection-content col-md-9">
                <div class="recipe-list">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="recipe-row-item ng-scope">
                            <div>
                            <div class="item-photo">
                                <a href="" target="_self">
                                    <img style="width: 100%;" class="img-responsive"
                                         src="https://media.cooky.vn/recipe/g2/11893/s100x100/recipe11893-635772130247054316.jpg">
                                </a>
                            </div>
                            <div class="recipe-header-box" style="text-align: left">
                                <h3 class="title">
                                    <a href="" target="_self">Bánh bao chiên</a>
                                </h3>
                                <div class="recipe-stats">
                                    <ul class="list-inline ">
                                        <li class="">
                                            <span class="fa fa-heart-o"></span>
                                            <span class="stats-count ng-binding">129</span>
                                            thích
                                        </li>
                                        <li><span class="fa fa-check-square-o"></span> <span class="stats-count ng-binding">5</span>
                                            Đã thực hiện
                                        </li>
                                    </ul>
                                </div>
                                <div class="recipe-rating">
                                    <span class=""><i class="fa fa-star" aria-hidden="true"></i></span>
                                    <span class="stats-count ng-binding">6.5</span>
                                </div>
                            </div>
                            <div class="c-card-actions ">
                                <ul class="list-inline ">
                                    <li>
                                        <a  class="btn btn-sm btn-default" title="Xóa khỏi bộ sưu tập" target="_self">
                                            <span><i class="fa fa-trash" aria-hidden="true"></i></span> Loại bỏ
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
