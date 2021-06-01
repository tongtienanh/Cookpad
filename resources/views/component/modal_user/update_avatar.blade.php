<div class="modal" id="update-avatar">
    <div class="modal-header">
        <h2 class="title">
            Thêm ảnh đại diện
        </h2>
    </div>
    <div class="modal-body">
        <form action="">
            <div class="update-avatar">
                <div class="avatar">
                    <img src="{{ url('statics/images/icon/user_avatar.svg') }}" alt="">
                </div>
                <div class="camera">
                    <img src="{{ url('statics/images/icon/camera.svg') }}" alt="">
                </div>
                <input type="file">
            </div>
            <span class="mt-2 mb-2 description">Bạn đã liệt kê công việc của bạn! Bây giờ thêm một ảnh đại diện để giúp người khác nhận ra bạn.</span>
            <button type="submit" class="btn btn-green-outline">Cập nhật ảnh đại diện</button>
        </form>
    </div>
</div>
