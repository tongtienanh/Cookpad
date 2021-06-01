<html lang="en" class=" ">
<head>
    <style type="text/css">.swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body, .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after, .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after, .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button:not([disabled]):hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel:not([disabled]):hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger:not([disabled]):hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input, .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }

        .swal-content__input:focus, .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading ~ .swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width: 500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }</style>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="hKKNjhs4mJLtrHCTVEyP5HbeVIxjOsK9IVS2blVg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài liệu | ViecNgay.vn</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="ViecNgay.vn">
    <meta name="twitter:title" content="Tài liệu">
    <meta name="twitter:description" content="">

    <meta property="og:locale" content="vi_VN">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:type" content="website">
    <meta name="og:site_name" content="ViecNgay.vn">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://tuyendung.viecngay.vn/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://tuyendung.viecngay.vn/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="https://tuyendung.viecngay.vn/desktop/css/style.css?v=1.0.0">
    <link rel="stylesheet" href="https://tuyendung.viecngay.vn/css/nprogress.css">
    <link rel="shortcut icon" type="image/png" href="https://tuyendung.viecngay.vn/favicon.png">
    <style type="text/css">
        #maincontent {
            padding-top: 0;
            background: #fff;
        }
    </style>
    <style></style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="mainnav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://tuyendung.viecngay.vn">
                <img src="https://tuyendung.viecngay.vn/images/logo-blue.png" class="img-responsive logo" alt="Image">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar navbar-top">
                <li class=""><a href="https://tuyendung.viecngay.vn">Trang chủ</a></li>
                <li class=""><a href="https://tuyendung.viecngay.vn/danh-sach-tin-tuyen-dung">Quản lý tin</a></li>
                <li class=""><a href="https://tuyendung.viecngay.vn/tim-ung-vien">Tìm hồ sơ</a></li>
                <li class="active"><a href="https://tuyendung.viecngay.vn/tai-lieu">Tài liệu</a></li>
                <li class=""><a href="https://tuyendung.viecngay.vn/dich-vu">Dịch vụ</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://tuyendung.viecngay.vn/login">Đăng nhập</a></li>
                <li><a href="https://tuyendung.viecngay.vn/register">Đăng ký</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<nav class="navbar navbar-default" id="secondnav" role="navigation">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active"><a href="https://tuyendung.viecngay.vn/tai-lieu">Tất cả bài viết</a></li>
            <li class=""><a href="https://tuyendung.viecngay.vn/tai-lieu/thong-bao-cat-11">Thông báo</a></li>
            <li class=""><a href="https://tuyendung.viecngay.vn/tai-lieu/chia-se-kinh-nghiem-cat-10">Chia sẻ kinh
                    nghiệm</a></li>
            <li class=""><a href="https://tuyendung.viecngay.vn/tai-lieu/tuyen-dung-hieu-qua-cat-9">Tuyển dụng hiệu
                    quả</a></li>
        </ul>
    </div>
</nav>
<div id="maincontent">
    <div class="container bg-white article-page">
        <div class="article-box special-1">
            <a href="https://tuyendung.viecngay.vn/tai-lieu/ky-nang-chup-anh-san-pham-khi-ban-hang-online-ea-104"
               class="img">
                <img
                    src="https://static2.viecngay.vn/article_images/30_30 Kỹ năng 900x500-5531965abeb73ae6004c8b0269494738-5ce37c03b62b1.jpg"
                    alt="Kỹ năng chụp ảnh sản phẩm khi bán quần áo online">
            </a>
            <div class="article-content">
                <h3 class="title">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/ky-nang-chup-anh-san-pham-khi-ban-hang-online-ea-104">Kỹ
                        năng chụp ảnh sản phẩm khi bán quần áo online</a>
                </h3>
                <span class="time time-ago">1 năm trước</span>
            </div>
        </div>

        <div class="row row-eq-height">
            <div class="col-md-6">
                <div class="article-box special-2">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/ky-nang-can-co-cho-quan-ly-khach-san-ea-103"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/29_30 Kỹ năng 900x500-f94b97ac3a2fbd9adc1227e823bad146-5ce3790247ca1.jpg"
                            alt="Kỹ năng cần có cho quản lý khách sạn">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/ky-nang-can-co-cho-quan-ly-khach-san-ea-103">Kỹ
                                năng cần có cho quản lý khách sạn</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Quản lý khách sạn luôn cần phải chắc chắn rằng nhân viên của họ đang cung cấp dịch vụ có
                                chất lượng tốt nhất dành cho khách hàng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="article-box special-2">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/sai-lam-khi-quan-ly-tho-nail-va-ky-nang-giai-quyet-ea-102"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/28_30 Kỹ năng 900x500-d82f18993c7c047ef64fb67397bd2681-5ce25c2e58613.jpg"
                            alt="Sai lầm khi quản lý thợ nail và kỹ năng giải quyết">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/sai-lam-khi-quan-ly-tho-nail-va-ky-nang-giai-quyet-ea-102">Sai
                                lầm khi quản lý thợ nail và kỹ năng giải quyết</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Tiệm nail không phải là mô hình kinh doanh lớn; nhưng không vì thế mà quản lý thợ nail
                                thiếu bài bản. Hãy tham khảo bài viết dưới đây để quản lý đúng cách
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-eq-height">
            <div class="col-md-4">
                <div class="article-box">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/kinh-nghiem-tuyen-tho-nails-hieu-qua-ea-122"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/1. Kinh nghiệm tuyển thợ nails 900x500-d3a218f74b679be703842d8ad522cc8d-5cf5fd17e97f6.jpg"
                            alt="Kinh nghiệm tuyển thợ nails hiệu quả">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/kinh-nghiem-tuyen-tho-nails-hieu-qua-ea-122">Kinh
                                nghiệm tuyển thợ nails hiệu quả</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Việc tuyển được một thợ nails có thể cung cấp cho khách hàng dịch vụ tốt phù hợp với
                                tiêu chí hoạt động của salon là điều vô cùng quan trọng.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="article-box">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/top-5-dau-sach-quan-tri-nhan-su-cac-nha-quan-ly-nen-doc-ea-121"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/47_47 Kinh nghiệm 900x500-cbb50301037ab825fc4b777686cdc42e-5cf5ef94479d9.jpg"
                            alt="Top 5 đầu sách quản trị nhân sự các nhà quản lý nên đọc">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/top-5-dau-sach-quan-tri-nhan-su-cac-nha-quan-ly-nen-doc-ea-121">Top
                                5 đầu sách quản trị nhân sự các nhà quản lý nên đọc</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Quản trị nhân sự vừa là cơ hội và cũng là thách thức với nhà quản lý. Thành công hay
                                thất bại của doanh nghiệp phụ thuộc hoàn toàn vào đội ngũ nhân sự.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="article-box">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/nhung-van-de-cua-cong-nhan-can-giai-quyet-triet-de-ea-120"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/46_47 Kinh nghiệm 900x500-dccc5a309c0ee2fd51be7ab3b79507ef-5cf4f0f334d63.jpg"
                            alt="Những vấn đề của công nhân cần giải quyết triệt để">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/nhung-van-de-cua-cong-nhan-can-giai-quyet-triet-de-ea-120">Những
                                vấn đề của công nhân cần giải quyết triệt để</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Trong quá trình làm việc của công nhân, có nhiều vấn đề nhỏ nhặt xảy ra nhưng nếu không
                                để ý giải quyết triệt để sẽ gây ra hậu quả khôn lường.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-eq-height">
            <div class="col-md-4">
                <div class="article-box">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/nhung-quy-dinh-nha-tuyen-dung-can-biet-trong-hop-dong-lao-dong-ea-119"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/45_47 Kinh nghiệm 900x500-2241537dc59e5cb830a25480a602f37e-5cf4e61c9e606.jpg"
                            alt="Những quy định nhà tuyển dụng cần biết hợp đồng lao động thời vụ">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/nhung-quy-dinh-nha-tuyen-dung-can-biet-trong-hop-dong-lao-dong-ea-119">Những
                                quy định nhà tuyển dụng cần biết hợp đồng lao động thời vụ</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Trong nền kinh tế hiện nay, lao động thời vụ là lực lượng vô cùng phổ biến. Vậy có quy
                                định nào về hợp đồng lao động thời vụ mà nhà tuyển dụng cần nắm được?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="article-box">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/lao-dong-thoi-vu-uu-diem-va-han-che-ea-118"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/44_47 Kinh nghiệm 900x500-febb7a24895e207bd48e6dd4cae24ecc-5cf0a3f6bad03.jpg"
                            alt="Lao động thời vụ:  Những ưu điểm và hạn chế tiềm ẩn">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/lao-dong-thoi-vu-uu-diem-va-han-che-ea-118">Lao
                                động thời vụ: Những ưu điểm và hạn chế tiềm ẩn</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Trong bối cảnh những mùa kinh doanh cao điểm; hay tình trạng thiếu nhân lực tạm thời của
                                doanh nghiệp, lao động thời vụ là giải pháp hàng đầu.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="article-box">
                    <a href="https://tuyendung.viecngay.vn/tai-lieu/kinh-nghiem-tuyen-sinh-vien-lam-them-ea-117"
                       class="img">
                        <img
                            src="https://static2.viecngay.vn/article_images/43_47 Kinh nghiệm 900x500-77d16ea27ff817d3a4053ae32fa9f4c8-5cef8503b2fcb.jpg"
                            alt="Kinh nghiệm tuyển sinh viên làm thêm">
                    </a>
                    <div class="article-content">
                        <h3 class="title">
                            <a href="https://tuyendung.viecngay.vn/tai-lieu/kinh-nghiem-tuyen-sinh-vien-lam-them-ea-117">Kinh
                                nghiệm tuyển sinh viên làm thêm</a>
                        </h3>
                        <span class="time time-ago">1 năm trước</span>
                        <div class="hidden-xs">
                            <div class="sub-content">
                                Là chủ cửa hàng, bạn có bao giờ tuyển dụng sinh viên làm thêm? Bài viết dưới đây đưa ra
                                kinh nghiệm giúp bạn tuyển dụng thành công sinh viên làm thêm!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="articles"> <!----></div>
    </div>
</div>
<footer>
    <div class="container">
        <ul class="footer-link">
            <li><a href="https://tuyendung.viecngay.vn/policies/privacy">Chính sách bảo mật</a></li>
            <li><a href="https://tuyendung.viecngay.vn/policies/term-of-service">Điều khoản dịch vụ</a></li>
            <li><a href="https://tuyendung.viecngay.vn/tai-lieu">Thư viện</a></li>
        </ul>
        <a href="https://tuyendung.viecngay.vn">Viecngay.vn @2019</a>
    </div>
</footer>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://tuyendung.viecngay.vn/js/moment.js"></script>
<script src="https://tuyendung.viecngay.vn/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://tuyendung.viecngay.vn/plugins/toastr/toastr.min.js"></script>
<script src="https://tuyendung.viecngay.vn/js/common.js"></script>


<script src="https://tuyendung.viecngay.vn/js/nprogress.js"></script>
<script>
    NProgress.start(); // start
    NProgress.set(0.4); // To set a progress percentage, call .set(n), where n is a number between 0..1
    NProgress.inc();
    NProgress.configure({ease: 'ease', speed: 500});
    NProgress.configure({trickleSpeed: 800}); //Adjust how often to trickle/increment, in ms.
    NProgress.configure({showSpinner: false});//Turn off loading spinner by setting it to false. (default: true)
    NProgress.configure({parent: '#container'});//specify this to change the parent container. (default: body)
    NProgress.done(); // end
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
<script type="text/javascript">
    var categoryId = undefined;
    var perPage = 6;
    var isSpecial = 'false';
    new Vue({
        el: '#articles',
        data: function () {
            return {
                articles: [],
                loading: false,
                page: 1,
                loadMoreable: true,
                categoryId: categoryId,
                perPage: perPage,
                isSpecial: isSpecial
            }
        },

        computed: {
            chunkedArticles: function () {
                var array = [], size = 3;
                while (this.articles.length > 0) {
                    array.push(this.articles.splice(0, size))
                }
                return array
            }
        },

        mounted: function () {
            var vm = this;
            $(function () {
                $(window).scroll(function () {
                    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                        vm.loadMore()
                    }
                })
            })
        },

        methods: {
            loadMore: function () {
                if (this.loadMoreable == false) {
                    return false
                }
                this.loading = true;
                var vm = this;
                $.ajax({
                    url: 'https://tuyendung.viecngay.vn/articles',
                    dataType: 'json',
                    data: {
                        page: vm.page + 1,
                        per_page: vm.perPage,
                        category_id: vm.categoryId,
                        is_special: vm.isSpecial
                    }
                })
                    .done(function (res) {
                        res.data.forEach(function (article) {
                            if (vm.articles.findIndex(function (article2) {
                                article2.id == article.id
                            }) == -1) {
                                vm.articles.push(article)
                            }
                        });
                        vm.page = res.data.current_page;
                        if (res.data.current_page == res.data.last_page) {
                            vm.loadMoreable = false
                        }
                    })
                    .always(function () {
                        vm.loading = false
                    })
            }
        }
    })    </script>


</body>
</html>
