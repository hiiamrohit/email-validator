<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Version: 0.0.1
* Date: 14-04-2015
* App Name: Email Validator
* Description: Simple email id validator to check email id is valid or fake.
*/
error_reporting(0);
ob_start();
header('Content-Type: application/json');
include_once("classes/emailValidator.php");

$ev = new emailValidator('iamrohitx@gmail.com');			
function validate($ev, $email) {
	try {	
          if(!isset($email) || empty($email)) {
	          throw new exception("Email id is not set.");
           }
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		          throw new exception("Please re-check your email id format.");
		     }
			    if(!$ev->validate($email)) {
				        throw new exception("Email id seems to be not valid or may be fake.");
				} 
			$data = array('status'=>'success', 'msg'=>'Email id is valid.', 'tp'=>1, 'email'=>$email);
	} catch (Exception $e) {
		  $data = array('status'=>'error', 'msg'=>$e->getMessage(), 'tp'=>0, 'email'=>$email);
	} finally {
         return json_encode($data);
	}
}

$requestType = $_GET['type'];
if(!isset($requestType) && empty($requestType)) {
	 $data = array('status'=>'error', 'msg'=>'Request type is not set.', 'tp'=>0);
	 echo json_encode($data);
}
if($requestType == 'email-validator') {
	$result = validate($ev, $_GET['email']);
	echo $result;
}
ob_flush();






