<?php

namespace App\Models;

use CodeIgniter\Model;

class Contact_Us_Model extends Model
{
    protected $table = "tbl_messages";
    protected $primary_key = "id";
    protected $allowedFields = [
        'name',
        'email',
        'facebook_account',
        'mobile_number',
        'message',
    ];
}
