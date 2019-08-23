<?php
/**
 * Created by PhpStorm.
 * User: landehua
 * Date: 2019/8/23
 * Time: 16:16
 */

namespace EasyInfo\server;


use EasyInfo\Singleton;

class ServerManager{

    use Singleton;
    /**
     * @var \swoole_server $swooleServer
     */
    private $swooleServer;
    private $isStart = false;


    public function createSwooleServer($port,$type ,$address = '0.0.0.0',array $setting = [],...$args):bool
    {
        switch ($type){
            case EASYINFO_SERVER:{
                $this->swooleServer = new \swoole_server($address,$port,...$args);
                break;
            }
            case EASYINFO_HTTP_SERVER:{
                $this->swooleServer = new \swoole_http_server($address,$port,...$args);
                break;
            }
            case EASYINFO_WEB_SOCKET_SERVER:{
                $this->swooleServer = new \swoole_websocket_server($address,$port,...$args);
                break;
            }
            default:{
                $this->swooleServer = new \swoole_server($address,$port,...$args);
                break;
            }
        }
        if($this->swooleServer){
            $this->swooleServer->set($setting);
        }
        return true;
    }

}
