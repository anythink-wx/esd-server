<?php
namespace App\Controller;

use ESD\Go\GoController;
use ESD\Plugins\AnnotationsScan\Annotation\Component;
use ESD\Plugins\EasyRoute\GetHttp;
use ESD\Plugins\Mysql\GetMysql;
use ESD\Plugins\Redis\GetRedis;
use ESD\Plugins\Session\GetSession;
use ESD\Plugins\Cache\GetCache;


/**
 * Class Base
 * @package app\Controller
 */
class Base extends GoController
{
    use GetSession;
    use GetRedis;
    use GetHttp;
    use GetMysql;
    use GetCache;
}