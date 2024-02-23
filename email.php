<?php

/*Plugin Name: Email Plugin
Description: Email Erin Hazelwood Your Thoughts on This Plugin
Version: 1.0
Author: Erin Hazelwood
*/

$email_to = 'erin.renee.hazelwood@outlook.com';
$email_subject = 'Email Plugin';
$email_message = 'Check out my latest email plugin!';

wp_mail( $email_to, $email_subject, $email_message );
?>