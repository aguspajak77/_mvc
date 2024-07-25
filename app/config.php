<?php

//Time Zone
date_default_timezone_set('Asia/Singapore');

//Base URL
define('BASE_URL', $_SERVER['HTTP_HOST'] == 'localhost' ? 'http://localhost/_mvc/' : 'https://_mvc/');

//Database
define('DB_HOST', 'localhost');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');
