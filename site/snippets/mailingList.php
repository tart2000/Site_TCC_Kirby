

<?php
require_once 'MCAPI.class.php';
$apikey='df386eb5dce5e84ed2f6889590129a32-us10'; // Enter your API key
$api = new MCAPI($apikey);
$retval = $api->lists();
$listid=$listID; // Enter list Id here
$email='Subscriber-email-address'; // Enter subscriber email address
$name='Subscriber-first-name'; // Enter subscriber first name
$lname='Subscriber-last-name'; // Enter subscriber last name

// By default this sends a confirmation email - you will not see new members
// until the link contained in it is clicked!

$merge_vars = array('FNAME' => $name, 'LNAME' => $lname);
if($api->listSubscribe($listid, $email,$merge_vars) === true) {
echo 'success';
}
?>

