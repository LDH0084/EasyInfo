<?php
/**
 * Created by PhpStorm.
 * User: landehua
 * Date: 2019/8/23
 * Time: 16:06
 */

////////////////////////////////////////////////////////////////////
//                          _ooOoo_                               //
//                         o8888888o                              //
//                         88" . "88                              //
//                         (| ^_^ |)                              //
//                         O\  =  /O                              //
//                      ____/`---'\____                           //
//                    .'  \\|     |//  `.                         //
//                   /  \\|||  :  |||//  \                        //
//                  /  _||||| -:- |||||-  \                       //
//                  |   | \\\  -  /// |   |                       //
//                  | \_|  ''\---/''  |   |                       //
//                  \  .-\__  `-`  ___/-. /                       //
//                ___`. .'  /--.--\  `. . ___                     //
//            \  \ `-.   \_ __\ /__ _/   .-` /  /                 //
//      ========`-.____`-.___\_____/___.-`____.-'========         //
//                           `=---='                              //
//      ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^        //
//         佛祖保佑       永无BUG       永不修改                     //
////////////////////////////////////////////////////////////////////

namespace EasyInfo\console;

use Yii;
use EasyInfo\Singleton;

class CoreController extends yii\console\Controller
{
    use Singleton;

    public $EasyInfoEvent;

    public $host = "0.0.0.0";

    public $port = 9999;

    public $mode = SWOOLE_PROCESS;

    public $socketType = SWOOLE_TCP;

    public $rootDir = "";

    public $type = "advanced";

    public $app = "frontend";//如果type为basic,这里默认为空

    public $web = "web";

    public $debug = true;//是否开启debug

    public $env = 'dev';//环境，dev或者prod...

    public $swooleConfig = [];

    public $gcSessionInterval = 60000;//启动session回收的间隔时间，单位为毫秒

}
