<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

require('admin.php');
require('user.php');

use PdfFiles\Nin\Admin;
use PdfFiles\Nin\User;

add_action('init', function(){new Admin();});
add_action('init', function(){new User();});