<?php

namespace App\Controllers;

use App\Models\Contact_Us_Model;
use App\Models\User_Model;

date_default_timezone_set('Asia/Manila');

class Admin extends BaseController
{
    public function list_of_messages()
    {
        session()->set("current_tab", "admin/list_of_messages");
        session()->set("current_main_page", "Administrator Page");
        session()->set("current_sub_page", "List of Messages");

        $Contact_Us_Model = new Contact_Us_Model();
        $User_Model = new User_Model();

        $data["User_Model"] = $User_Model;

        $data['messages'] = $Contact_Us_Model->orderBy('id', 'DESC')->findAll();

        $header = view('templates/header', $data);
        $body = view('pages/admin/list_of_messages_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }

    public function manage_user_accounts()
    {
        session()->set("current_tab", "admin/manage_user_accounts");
        session()->set("current_main_page", "Administrator Page");
        session()->set("current_sub_page", "Manage User Accounts");

        $Contact_Us_Model = new Contact_Us_Model();
        $User_Model = new User_Model();

        $data['users'] = $User_Model->orderBy('id', 'DESC')->findAll();

        $header = view('templates/header', $data);
        $body = view('pages/admin/manage_user_accounts_view');
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }

    public function get_user_details()
    {
        $user_id = $this->request->getPost("user_id");

        $User_Model = new User_Model();

        $user_data = $User_Model->where('id', $user_id)->first();

        echo json_encode($user_data);
    }

    public function update_my_account()
    {
        $response = false;

        $id = $this->request->getPost("id");
        $old_username = $this->request->getPost("old_username");
        $old_password = $this->request->getPost("old_password");
        $name = $this->request->getPost("name");
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        $errors = 0;

        $User_Model = new User_Model();

        if (($username != $old_username) && $User_Model->where('username', $username)->first()) {
            $errors++;
        }

        if ($errors == 0) {
            if ($password) {
                $password = password_hash(strval($password), PASSWORD_BCRYPT);
            } else {
                $password = $old_password;
            }

            $data = [
                "name" => $name,
                "username" => $username,
                "password" => $password,
            ];

            $User_Model->update($id, $data);

            session()->set("notification", array(
                "title" => "Success!",
                "message" => "My account has been updated!",
                "icon" => "success",
            ));

            $response = true;
        }

        echo json_encode($response);
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
            session()->set('user_type', $user["user_type"]);

            session()->set("notification", array(
                "title" => "Success!",
                "message" => "Welcome, " . $user["name"] . "!",
                "icon" => "success",
            ));

            $response = true;
        } else {
            session()->set("notification", array(
                "title" => "Oops...",
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
