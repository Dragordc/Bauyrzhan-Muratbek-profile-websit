<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function send(){
    	$objDemo = new \stdClass();
    	$objDemo->demo_one = 'Demo One Value';
    	$objDemo->demo_two = 'Demo Two Value';
    	$objDemo->sender = '190103181';
    	$objDemo->receiver = '190103181';
    	Mail::to("190103181@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}
