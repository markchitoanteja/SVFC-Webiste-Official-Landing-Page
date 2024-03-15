<?php

namespace App\Controllers;

use App\Models\Contact_Us_Model;

class Contact_Us extends BaseController
{
    public function index()
    {
        session()->set("current_tab", "contact_us");
        session()->set("current_main_page", "Contact Us");
        session()->set("current_sub_page", null);

        $data["isSchoolOpen"] = $this->isSchoolOpen();

        $header = view('templates/header');
        $body = view('pages/contact_us_view', $data);
        $footer = view('templates/footer');

        return $header . $body . $footer;
    }

    function isSchoolOpen()
    {
        $currentDay = date('D');
        $currentTime = date('H:i');

        $schedule = array(
            'Mon' => array('08:00', '17:00'),
            'Tue' => array('08:00', '17:00'),
            'Wed' => array('08:00', '17:00'),
            'Thu' => array('08:00', '17:00'),
            'Fri' => array('08:00', '17:00'),
            'Sat' => array('Closed', 'Closed'),
            'Sun' => array('Closed', 'Closed'),
        );

        if (array_key_exists($currentDay, $schedule)) {
            $openTime = strtotime($schedule[$currentDay][0]);
            $closeTime = strtotime($schedule[$currentDay][1]);

            if ($currentTime >= date('H:i', $openTime) && $currentTime <= date('H:i', $closeTime)) {
                return "OPEN";
            } else {
                return "CLOSED";
            }
        } else {
            return "INVALID";
        }
    }

    function submit_message()
    {
        $Contact_Us_Model = new Contact_Us_Model();

        $name = $this->request->getPost("name");
        $email = $this->request->getPost("email");
        $facebook_account = $this->request->getPost("facebook_account");
        $mobile_number = $this->request->getPost("mobile_number");
        $message = $this->request->getPost("message");

        $data = [
            'name' => $name,
            'email' => $email,
            'facebook_account' => $facebook_account,
            'mobile_number' => $mobile_number,
            'message' => $message,
        ];

        $Contact_Us_Model->save($data);

        $message = "<p>Hello, thanks for reaching out to 
        St. Vincent de Ferrer College of Camarin, Inc.!
        We have received your message, please wait for our
        call within 24 hours to have your STUDENT NUMBER
        together with our assistance.</p> 

        <p>You can also feel free to contact us at:</p>
        <p>SMART 0968-729-2593</p>
        <p>SMART 0969-597-2577</p>
        <p>SMART 0908-658-1680</p>
        
        <br>
        
        <p>*For OLD Student, you can also ask
        your respective Facilitator for the
        availability of your STUDENT NUMBER.</p>
        <p>*If you have your STUDENT NUMBER, 
        please click here to ENROLL:</p>
        <p><a href='https://portal.svfc-edu.com/login'>https://portal.svfc-edu.com/login</p>
        
        <br>
        
        <p>Thank you!</p>";

        if (send_email($name, $email, "Thanks for reaching us", $message, "St. Vincent de Ferrer College of Camarin, Inc.", "no-reply@svfc-edu.com", "svfc@2024")) {
            session()->set("notification", array(
                "title" => "Success!",
                "message" => "Message Sent. Please check your email.",
                "icon" => "success",
            ));

            echo json_encode(true);
        }
    }
}
