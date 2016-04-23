<?php
date_default_timezone_set('Asia/Shanghai');
define('DEBUG', true);
define('YCF_BEGIN_TIME', microtime(true));
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', realpath(dirname(__FILE__)) . DS);

require 'vendor/autoload.php';

use Ycf\Core\YcfCore;

YcfCore::run();