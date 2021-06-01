<?php

Route::group([
    'prefix' => 'static',
    'namespace' => 'Modules\StaticPage\Http\Controllers'
], function () {
    Route::get('/', 'StaticPageController@index');
    Route::get('/quy-che-hoat-dong', ['as' => 'get.static.operation_regulation', 'uses' => 'StaticPageController@operationRegulation']);
    Route::get('/dieu-khoan-su-dung', ['as' => 'get.static.term_of_use', 'uses' => 'StaticPageController@termsOfUse']);
    Route::get('/chinh-sach-bao-mat-thong-tin', ['as' => 'get.static.policy_info_security', 'uses' => 'StaticPageController@policyInfoSecurity']);
    Route::get('/chinh-sach-bao-mat-thanh-toan', ['as' => 'get.static.policy_payment_security', 'uses' => 'StaticPageController@policyPaymentSecurity']);
    Route::get('/quy-trinh-giai-quyet-khieu-nai', ['as' => 'get.static.process_complaint', 'uses' => 'StaticPageController@processComplaint']);
    Route::get('/chinh-sach-hoan-tien', ['as' => 'get.static.policy_refund', 'uses' => 'StaticPageController@policyRefund']);
    Route::get('/cau-hoi-thuong-gap', ['as' => 'get.static.frequently_question', 'uses' => 'StaticPageController@frequentlyQuestion']);
    Route::get('/chinh-sach-bao-mat-thong-tin-chu-so-huu', ['as' => 'get.static.information_security_policy', 'uses' => 'StaticPageController@informationSecurity']);

});
