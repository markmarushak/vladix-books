<?php


namespace App\Http\Controllers\Cabinet;


class CabinetController
{
    public function index()
    {
        return view('cabinet.index');
    }

    public function profile()
    {
        return view('cabinet.pages.profile');
    }

    public function cards()
    {
        return view('cabinet.pages.cards');
    }

    public function orders()
    {
        return view('cabinet.pages.orders');
    }

    public function feedback()
    {
        return view('cabinet.pages.feedback');
    }

    public function history()
    {
        return view('cabinet.pages.history');
    }

    public function cart()
    {
        return view('cabinet.pages.cart');
    }
}