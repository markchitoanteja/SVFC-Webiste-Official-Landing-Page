<?php

namespace App\Controllers;

use App\Models\Contact_Us_Model;
use App\Models\User_Model;

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

    public function login()
    {
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        $response = false;

        $User_Model = new User_Model();

        $user = $User_Model->where('username', $username)->first();

        if ($user && password_verify(strval($password), $user["password"])) {
            session()->set('user_id', $user["id"]);
            session()->set('user_name', $user["name"]);

            session()->set("notification", array(
                "title" => "Success!",
                "message" => "Login Successful! You are now an Admin.",
                "icon" => "success",
            ));

            $response = true;
        } else {
            session()->set("notification", array(
                "title" => "Login Failed!",
                "message" => "Invalid Username or Password!",
                "icon" => "error",
            ));
        }

        echo json_encode($response);
    }

    public function logout()
    {
        session()->remove("user_id");
        session()->remove("user_name");

        return redirect()->to(base_url());
    }
}
