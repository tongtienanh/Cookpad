<div class="about">
    <div class="container">
        <section id="about" class="bg-cookpad-white">

            <div class="mb-sm">

                <div id="recipe_image">
                    <div id="recipe_image" class="image droppable field-group" data-field="file" data-field-name="file"
                         data-ajax-upload="/vn/recipe/images">
                        <div class="editor">
                            <label class="icon-edit">
                                <span aria-label="Đổi" class="p-px"><i class="fa fa-camera" style="padding-left: 8px;margin: 9px 0;" aria-hidden="true"></i></span>
                                <input type="file" class="fileUpload" name="file" aria-label="Bạn đã đăng hình món mình nấu ở đây chưa?" accept="image/*">
                            </label>

                            <a data-confirm="Chắc chắn xoá?" class="delete" data-behavior="delete_image"
                               aria-label="Xóa hình món này" href="#"><i class="fa fa-trash delete-img" style="padding-right: 8px" aria-hidden="true"></i></a>

                        </div>
                        <label for="fileUpload">
                            <div class="image-holder" for="" class=" bg-cookpad-gray-200">

                                <div class="loading" style="display: none"></div>
                                <div class="image-upload text-center" >
                                    <div class="text-cookpad">
                                        <img class="" alt="" src="//assets-global.cpcdn.com/assets/camera-e526534167ed86f4891b97ae3da7bb6327b7679a0ad7c9b837434847f8457434.png">
                                        <h3 class="">Bạn đã đăng hình món mình nấu ở đây chưa?</h3>
                                        <p class="text-cookpad-14">Truyền cảm hứng nấu món của bạn đến mọi người
                                            nào!</p>
                                    </div>
                                    <input type="file" class="fileUpload" id="fileUpload" name="file"
                                           aria-label="Bạn đã đăng hình món mình nấu ở đây chưa?" accept="image/*">
                                    <div id="" style="width: 680px"></div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <input type="text" placeholder="Tên món: Bánh bột mì " style="width: 100% ;background: #F8F6F2;border: none">

        <input class="input-share" type="text"
               placeholder="Hãy chia sẻ với mọi người về món này của bạn nhé - ai đã truyền cảm hứng cho bạn, tại sao nó đặc biệt, bạn nấu món này cho ai?"
               style="width: 100% ;background: #F8F6F2;border: none">
        <div class="test">
            <div class="select mt-16">
                <p>Khẩu phần</p>
                <input type="text" class="about-form" placeholder="2 người" style="background: #F8F6F2;border: none">
            </div>
            <div class="the-count" id="the-count">
                <span class="current">0</span>
                <span class="maximum">/ 50</span>
            </div>

        </div>
        <div class="test">
            <div class="select">
                <p>Thời gian</p>
                <input type="text" class="about-form" placeholder="1 tiếng 30 phút"
                       style=" ;background: #F8F6F2;border: none">
            </div>
            <div class="the-count" id="the-count">
                <span class="current">0</span>
                <span class="maximum">/ 50</span>
            </div>
        </div>


    </div>
</div>


{{--<div class="item">--}}
