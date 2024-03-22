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

        $date_created = date("Y-m-d H:i:s");
        $name = $this->request->getPost("name");
        $email = $this->request->getPost("email");
        $facebook_account = $this->request->getPost("facebook_account");
        $mobile_number = $this->request->getPost("mobile_number");
        $message = $this->request->getPost("message");

        $data = [
            'date_created' => $date_created,
            'name' => $name,
            'email' => $email,
            'facebook_account' => $facebook_account,
            'mobile_number' => $mobile_number,
            'message' => $message,
            'status' => "unprocessed",
        ];

        $Contact_Us_Model->save($data);

        $message = "
            <p>SVFC'S ENROLLMENT IS NOW OPEN!!</p>
            <p>Starting MARCH 15, 2024 - Friday A.Y. 2024-2025</p>
            <p>You can click the link below if you have your STUDENT NUMBER for ONLINE ENROLLMENT:</p>
            <p><a href='https://portal.svfc-edu.com/login'>Online Enrollment Portal</a></p>
            <p>We also accept WALK-IN enrollment starting 8:00 A.M. to 5:00 P.M.</p>
            <p>Just simply bring your REQUIREMENTS and yourself.</p>
            <p>To get your STUDENT NUMBER contact us at:</p>
            <ul>
                <li>SMART 0968-729-2593</li>
                <li>SMART 0969-597-2577</li>
                <li>SMART 0908-658-1680</li>
                <li>SMART 0969-597-2586</li>
            </ul>
            <p>You can message your respective Facilitators for the availability of your STUDENT NUMBER.</p>
            <p>SVFC welcomes you to visit our website:</p>
            <p><a href='https://svfc-edu.com'>SVFC Website</a></p>
        ";

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
