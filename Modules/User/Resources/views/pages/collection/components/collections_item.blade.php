<div class="container">
    <div class="d-flex" style="flex-wrap: wrap">
        <div data-link="{{route('detail_collection')}}" class="collection-item ng-scope"
             ng-repeat="item in memberCtrl.collections.Items">
            <div class="collection-item-card">
                <div class="collection-head">
                    <div class="collection-photo">
                        <a target="_self" class="photo" href="" style="width: 100%;border-radius: 12px">
                            <img alt="Yêu thích" class="img-responsive"
                                 style="width: 100%;border-radius: 12px;object-fit: cover"
                                 src="https://media.cooky.vn/recipe/g6/55310/s240x240/05aa3dab-bc48-4be9-a102-7261b730b89d.jpeg">
                        </a>
                        <div class="collection-stats">
                            <div class="stats-item " style="display: none"><span class="stat-count ng-binding">8</span>
                                Công thức
                            </div>
                        </div>
                    </div>
                    <div class="collection-photo-thumbs">
                        <div class="small-img-box">
                        <a target="_self" class="photo ng-scope" href="">
                        <span class="ng-scope">
                 <img class="ng-scope"
                      src="https://media.cooky.vn/recipe/g6/55463/s80x80/242b164e-77cc-4905-b6ac-e0e9b3282461.jpeg">
               </span>
                        </a>
                        <a target="_self" class="photo ng-scope" href="">
                        <span class="ng-scope">
                  <img class="ng-scope" src="https://media.cooky.vn/recipe/g6/55344/s80x80/2ae60e2c-42b4-4462-9cc3-f408c658801e.jpeg">
               </span>
                        </a>

                        <a target="_self" class="photo ng-scope" href="">
                            <span class="ng-scope">
                           <span class="collection-photo-more ng-binding ng-scope overlay"> +5 </span>
                                  <img class="ng-scope" src="https://media.cooky.vn/recipe/g6/55344/s80x80/2ae60e2c-42b4-4462-9cc3-f408c658801e.jpeg">
               </span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="collection-header-box">
                    <h3 class="title"><a target="_self" title="Yêu thích" class="ng-binding" href="">Yêu thích</a></h3>
                </div>
                <div class="collection-item-acts">
                    <div class="stats-item creator pull-left">
                        <div> 300 người đã xem</div>
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        <ul class="share-dropdown">
                            <li><a href=""><span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>Facebook</a></li>
                            <li><a href=""><span><i class="fa fa-twitter-square" aria-hidden="true"></i></span>Twitter</a></li>
                            <li><a href=""><span><i class="fa fa-external-link" aria-hidden="true"></i></span>Copy link</a></li>
                        </ul>
                    </div>
         </span>
                    <span class="stats-item pull-right" style="padding-right:0">
         <a class="btn-follow btn-subscribe btn-follow ng-isolate-scope ng-hide" ng-show="visiable()"
            ng-class="{'btn-subscribed subscribed': subscribed}" style="cursor:pointer" title="Lưu lại"
            ng-click="follow()" follow-item="" item="item.Id" user="item.UserId" subscriber="item.UserSubscribedId"
            text="Lưu lại" subscribed-text="Đã lưu" target="_self">
{{--             <span ng-hide="isLoading" class="fa fa-bookmark"></span>--}}
             {{--             <span ng-show="isLoading" class="loading-icon ng-hide"><img alt="Cooky.vn loading" style="width:10px" src="/Style/images/icons/small-loading.gif"></span> <span class="stats-text ng-binding" ng-bind="title()">Lưu lại</span>--}}
         </a>
         </span>
                </div>
            </div>
        </div>
        <div data-link="{{route('detail_collection')}}" class="collection-item ng-scope"
             ng-repeat="item in memberCtrl.collections.Items">
            <div class="collection-item-card">

                <div class="collection-head">
                    <div class="collection-photo">
                        <a target="_self" class="photo" href="" style="width: 100%;border-radius: 12px">
                            <img alt="Yêu thích"
                                 ng-src="https://media.cooky.vn/recipe/g6/55310/s240x240/05aa3dab-bc48-4be9-a102-7261b730b89d.jpeg"
                                 class="img-responsive" style="width: 100%;border-radius: 12px;object-fit: cover"
                                 src="https://image.cooky.vn/recipe/g6/55463/s640/242b164e-77cc-4905-b6ac-e0e9b3282461.jpeg">
                        </a>
                        <div class="collection-stats">
                            <div class="stats-item " style="display: none"><span class="stat-count ng-binding">8</span>
                                Công thức
                            </div>
                        </div>
                    </div>
                    <div class="collection-photo-thumbs">
                        <div class="small-img-box">
                        <a target="_self" class="photo ng-scope" href="">
                            <span class="ng-scope">
                 <img class="ng-scope" src="https://media.cooky.vn/recipe/g6/55463/s80x80/242b164e-77cc-4905-b6ac-e0e9b3282461.jpeg">
               </span>
                        </a>
                        <a target="_self" class="photo ng-scope" href="">
                            <!-- ngIf: thumb.IsExisted==true -->
                            <span class="ng-scope">
           <img
               class="ng-scope"
               src="https://media.cooky.vn/recipe/g6/55344/s80x80/2ae60e2c-42b4-4462-9cc3-f408c658801e.jpeg">
               </span>
                        </a>
                        <a target="_self" class="photo ng-scope" href="">
                            <span class="ng-scope">

                          <span class="collection-photo-more ng-binding ng-scope overlay"> +5 </span>
                                  <img class="ng-scope" src="https://media.cooky.vn/recipe/g6/55344/s80x80/2ae60e2c-42b4-4462-9cc3-f408c658801e.jpeg">
               </span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="collection-header-box">
                    <h3 class="title"><a target="_self" title="Yêu thích" class="ng-binding" href="">Ăn đêm</a></h3>
                </div>
                <div class="collection-item-acts">
                    <div class="stats-item creator pull-left">
                        <div> 300 người đã xem</div>
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </div>
         <span class="avt ng-binding" href="/thanh-vien/anh_tien2445" ng-href="/thanh-vien/anh_tien2445" target="_self">
         </span>
                    <span class="stats-item pull-right" style="padding-right:0">
         <a class="btn-follow btn-subscribe btn-follow ng-isolate-scope ng-hide" ng-show="visiable()"
             style="cursor:pointer" title="Lưu lại" target="_self">
         </a>
         </span>
                </div>
            </div>
        </div>
        <div data-link="{{route('detail_collection')}}" class="collection-item ng-scope"
             ng-repeat="item in memberCtrl.collections.Items">
            <div class="collection-item-card">

                <div class="collection-head">
                    <div class="collection-photo">
                        <a target="_self" class="photo" href="" style="width: 100%;border-radius: 12px">
                            <img alt="Yêu thích"
                                 ng-src="https://media.cooky.vn/recipe/g6/55310/s240x240/05aa3dab-bc48-4be9-a102-7261b730b89d.jpeg"
                                 class="img-responsive" style="width: 100%;border-radius: 12px;object-fit: cover"
                                 src="https://media.cooky.vn/recipe/g6/55310/s240x240/05aa3dab-bc48-4be9-a102-7261b730b89d.jpeg">
                        </a>
                        <div class="collection-stats">
                            <div class="stats-item " style="display: none"><span class="stat-count ng-binding">8</span>
                                Công thức
                            </div>
                        </div>
                    </div>
                    <div class="collection-photo-thumbs">
                        <div class="small-img-box">
                        <a target="_self" class="photo ng-scope" href="">
                        <span class="ng-scope">
         <img ng-src="https://media.cooky.vn/recipe/g6/55463/s80x80/242b164e-77cc-4905-b6ac-e0e9b3282461.jpeg"
              class="ng-scope"
              src="https://media.cooky.vn/recipe/g6/55463/s80x80/242b164e-77cc-4905-b6ac-e0e9b3282461.jpeg">
               </span>

                        </a>
                        <a target="_self" class="photo ng-scope" href="">
                            <span class="ng-scope">
           <img

               class="ng-scope"
               src="https://media.cooky.vn/recipe/g6/55344/s80x80/2ae60e2c-42b4-4462-9cc3-f408c658801e.jpeg">
               </span>
                        </a>
                        <a target="_self" class="photo ng-scope" href="">
                            <!-- ngIf: thumb.IsExisted==true -->
                            <span class="ng-scope">
                 <span
                             <span class="collection-photo-more ng-binding ng-scope overlay"> +5 </span>
                                  <img class="ng-scope" src="https://media.cooky.vn/recipe/g6/55344/s80x80/2ae60e2c-42b4-4462-9cc3-f408c658801e.jpeg">
               </span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="collection-header-box">
                    <h3 class="title"><a target="_self" title="Yêu thích" class="ng-binding" href="">Còn thở là còn
                            ăn</a></h3>
                </div>
                <div class="collection-item-acts">
         <div class="stats-item creator pull-left">
        <div> 300 người đã xem</div>
             <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
         </div>
                    <span class="stats-item pull-right" style="padding-right:0">
         <a class="btn-follow btn-subscribe btn-follow ng-isolate-scope ng-hide" ng-show="visiable()"
            ng-class="{'btn-subscribed subscribed': subscribed}" style="cursor:pointer" title="Lưu lại"
            ng-click="follow()" follow-item="" item="item.Id" user="item.UserId" subscriber="item.UserSubscribedId"
            text="Lưu lại" subscribed-text="Đã lưu" target="_self">
{{--             <span ng-hide="isLoading" class="fa fa-bookmark"></span>--}}
             {{--             <span ng-show="isLoading" class="loading-icon ng-hide"><img alt="Cooky.vn loading" style="width:10px" src="/Style/images/icons/small-loading.gif"></span> <span class="stats-text ng-binding" ng-bind="title()">Lưu lại</span>--}}
         </a>
         </span>
                </div>
            </div>
        </div>
    </div>
</div>
