<?php

namespace Modules\StaticPage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class StaticPageController extends Controller
{
    public function policyInfoSecurity()
    {
        return view('staticpage::policy_info_security');
    }

    public function policyPaymentSecurity()
    {
        return view('staticpage::policy_payment_security');
    }

    public function processComplaint()
    {
        return view('staticpage::policy_complaint');
    }

    public function policyRefund()
    {
        return view('staticpage::policy_refund');
    }

    public function termsOfUse()
    {
        return view('staticpage::terms_of_use');
    }

    public function operationRegulation()
    {
        return view('staticpage::operation_regulation');
    }

    public function frequentlyQuestion()
    {
        return view('staticpage::question');
    }

    public function informationSecurity()
    {
        return view('staticpage::information_security_policy');
    }
}
