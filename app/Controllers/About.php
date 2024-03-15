<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return $this->svfc_history();
    }

    public function svfc_history()
    {
        session()->set("current_tab", "about/svfc_history");
        session()->set("current_main_page", "ABOUT");
        session()->set("current_sub_page", "SVFC History");

        $header = view('templates/header');
        $body = view('pages/svfc_history_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }
    
    public function college_seal()
    {
        session()->set("current_tab", "about/college_seal");
        session()->set("current_main_page", "ABOUT");
        session()->set("current_sub_page", "College Seal");

        $header = view('templates/header');
        $body = view('pages/college_seal_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }
    
    public function philosophy_mission_and_vision()
    {
        session()->set("current_tab", "about/philosophy_mission_and_vision");
        session()->set("current_main_page", "ABOUT");
        session()->set("current_sub_page", "Philosophy, Mission, and Vision");

        $header = view('templates/header');
        $body = view('pages/philosophy_mission_and_vision_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }
    
    public function goals_and_objectives()
    {
        session()->set("current_tab", "about/goals_and_objectives");
        session()->set("current_main_page", "ABOUT");
        session()->set("current_sub_page", "Goals and Objectives");

        $header = view('templates/header');
        $body = view('pages/goals_and_objectives_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }
    
    public function svfc_hymn()
    {
        session()->set("current_tab", "about/svfc_hymn");
        session()->set("current_main_page", "ABOUT");
        session()->set("current_sub_page", "SVFC Hymn");

        $header = view('templates/header');
        $body = view('pages/svfc_hymn_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }
}
