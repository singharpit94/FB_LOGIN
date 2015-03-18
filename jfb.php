<?php
require_once 'src/facebook.php'; //include the facebook php sdk
$facebook = new Facebook(array(
        'appId'  => '973696862648485',    //app id
        'secret' => '22978a50bc6a6fe94ebedc2d784aec56', // app secret
));
$user = $facebook->getUser();
if ($user) { // check if current user is authenticated
    try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');  //get current user's profile information using open graph
		echo $user_profile['first_name'];
		echo " ";
		echo $user_profile['last_name'];
		echo " ";
		echo $user_profile['id'];
            }
			
         catch(Exception $e){}
}
 ?>