<?php

require_once 'app/core/Core.php';
require_once 'lib/Vitor/Database/Connection.php';
require_once 'app/controller/logincontroller.php';
require_once 'app/model/User.php';
require_once 'vendor/autoload.php';

$core = new core;
echo $core->start($_GET);