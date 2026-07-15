<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function refundPolicy()
    {
        return view('pages.refund-policy');
    }

    public function terms()
    {
        return view('pages.terms-and-conditions');
    }

    public function notfound()
    {
        return view('pages.404');
    }

}
