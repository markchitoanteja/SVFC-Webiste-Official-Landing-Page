<?php

namespace App\Controllers;

use App\Models\Contact_Us_Model;

class Admin extends BaseController
{
    public function list_of_messages()
    {
        session()->set("current_tab", "admin/list_of_messages");
        session()->set("current_main_page", "Administrator Page");
        session()->set("current_sub_page", "List of Messages");

        $Contact_Us_Model = new Contact_Us_Model();

        $data['messages'] = $Contact_Us_Model->orderBy('id', 'DESC')->findAll();

        $header = view('templates/header', $data);
        $body = view('pages/admin/list_of_images_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }
}
