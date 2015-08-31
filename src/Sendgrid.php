<?php

namespace Frc\WP\Env\Heroku\Sendgrid;

$username = getenv('SENDGRID_USERNAME');
$password = getenv('SENDGRID_PASSWORD');
if ( $username and $password ) {
    define('SENDGRID_USERNAME', $username);
    define('SENDGRID_PASSWORD', $password);
}
