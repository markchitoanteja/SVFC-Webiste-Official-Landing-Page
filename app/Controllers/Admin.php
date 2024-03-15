<?php

namespace App\Controllers;

use App\Models\Contact_Us_Model;

class Admin extends BaseController
{
    public function index()
    {
        session()->set("current_tab", "admin");
        session()->set("current_main_page", "List of Messages");
        session()->set("current_sub_page", null);

        $Contact_Us_Model = new Contact_Us_Model();

        $data['messages'] = $Contact_Us_Model->findAll();

        $header = view('templates/header', $data);
        $body = view('pages/admin_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }
}
