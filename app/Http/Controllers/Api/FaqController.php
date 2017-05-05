<?php

namespace App\Http\Controllers\Api;

use App\Faq;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function getGuestFaq()
    {
        $guestFaqs = Faq::guest()->get();
        return \Response::json($guestFaqs);
    }

    public function getHostFaqs()
    {
        $hostFaqs = Faq::host()->get();
        return \Response::json($hostFaqs);
    }
}
