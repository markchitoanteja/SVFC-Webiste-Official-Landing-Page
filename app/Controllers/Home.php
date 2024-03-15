<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        session()->set("current_tab", "home");

        $body = view('pages/home_view');
        $footer = view('templates/footer');

        return $body . $footer;
    }
}
