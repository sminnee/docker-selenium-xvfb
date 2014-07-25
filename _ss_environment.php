<?php

/* This file gives SilverStripe information about the environment that it's running in */
define('SS_ENVIRONMENT_TYPE', 'dev');
 
/* This defines a default database user */
define('SS_DATABASE_SERVER', '127.0.0.1');
define('SS_DATABASE_USERNAME', 'root');
define('SS_DATABASE_PASSWORD', '');

define('SS_DATABASE_NAME', 'silverstripe');

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/var/www'] = 'http://localhost';
