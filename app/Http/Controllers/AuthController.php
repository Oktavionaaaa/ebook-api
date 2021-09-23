<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[ 
            'Status' => '200',
            'Message' => 'Success',
            'NISN' => '3103119143',
            'Name' => 'Oktaviona Ramadhani',
            'Gender' => 'Female',
            'Phone' => '6287847977268',
            'Class' => 'XII RPL 5',
        ];
    }
}
