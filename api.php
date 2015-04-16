<?php
error_reporting(0);
ob_start();
header('Content-Type: application/json');
include_once("classes/emailValidator.php");

$ev = new emailValidator('iamrohitx@gmail.com');			
function validate($ev, $email) {
	try {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		          throw new exception("Please re-check your email id format.");
		    } else {
			    if(!$ev->validate($email)) {
				        throw new exception("Email id seems to be not valid or may be fake.");
				} else {
				       $data = array('status'=>'success', 'msg'=>'Email id is valid.');
				}
		    }
		} catch (Exception $e) {
			 $data = array('status'=>'error', 'msg'=>$e->getMessage());
		} finally {
          return json_encode($data);
		}
}

$requestType = $_GET['type'];
if($requestType == 'email-validator') {
	$result = validate($ev, $_GET['email']);
	echo $result;
}
ob_flush();






